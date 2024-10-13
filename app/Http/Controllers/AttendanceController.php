<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Office;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance::with('user')->get();

        return $this->responseJson([
            'success' => true,
            'data' => $attendances,
        ], 200, 'Attendances.index-attendance', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Attendances.create-attendance');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = auth()->user()->id;

        if ($this->checkAttendance()) {
            return $this->redirectWithMessage('Anda sudah melakukan absensi hari ini.', 'error');
        }

        if ($request->hasFile('swafoto')) {
            // Simpan gambar ke direktori 'public/uploads' atau 'storage/app/public/uploads'
            $path = $request->file('swafoto')->store('swafoto', 'public'); 
            // File akan disimpan di folder: public/storage/uploads
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menerima gambar swafoto',
            ], 400);
        }

        $validatedData = $this->validateAttendance($request);
        $validatedData['clock_in'] = Carbon::now()->setTimezone('Asia/Makassar')->format('H:i:s');
        $validatedData['tanggal'] = Carbon::now()->format('Y-m-d');
        $validatedData['user_id'] = $userId;
        $validatedData['swafoto'] = $path;
        

        if ($validatedData['status'] !== 'Hadir') {
            return $this->saveAttendance($validatedData, 'Absensi berhasil dibuat.', 201);
        }

        $office = $this->getOffice();
        if (!$office) {
            return response()->json(['message' => 'Office not found'], 404);
        }

        $distance = $this->calculateDistance($office->latitude, $office->longitude, $request->latitude, $request->longitude);
        if ($distance > $office->radius) {
            return $this->redirectWithMessage('Anda berada di luar radius absensi.', 'error', 422);
        }

        return $this->saveAttendance($validatedData, 'Absensi berhasil dibuat.', 201);
    }

    public function checkAttendance()
    {
        $today = Carbon::today();
        $userId = auth()->user()->id;

        $checkAttendance = Attendance::where('user_id', $userId)
            ->where('tanggal', $today)
            ->first();
        
        return $checkAttendance;
    }

    public function statusAttendance()
    {
        $today = Carbon::today();
        $userId = auth()->user()->id;

        $checkClockIn = Attendance::where('user_id', $userId)
            ->where('tanggal', $today)
            ->whereNotNull('clock_in')
            ->first();

        $checkClockOutIn = Attendance::where('user_id', $userId)
            ->where('tanggal', $today)
            ->whereNotNull('clock_in')
            ->whereNotNull('clock_out')
            ->first();


        if ($checkClockIn) {
            return $this->redirectWithMessage('Anda sudah melakukan clock in hari ini.', 'success');
        } elseif($checkClockOutIn)  {
            return $this->redirectWithMessage('Anda sudah melakukan clock out hari ini.', 'success');
        } else {
            return $this->redirectWithMessage('Anda belum melakukan absensi hari ini.', 'success');
        }
    }

    /**
     * Clock out logic.
     */
    public function clock_out(Request $request)
    {
        if (!$this->checkAttendance()) {
            return $this->redirectWithMessage('Anda belum melakukan absensi hari ini.', 'error');
        }

        $validatedLokasi = $request->validateWithBag('edit_attendance', [
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
        ]);

        $validatedData['clock_out'] = Carbon::now()->setTimezone('Asia/Makassar')->format('H:i:s');

        $office = $this->getOffice();
        if (!$office) {
            return response()->json(['message' => 'Office not found'], 404);
        }

        $distance = $this->calculateDistance($office->latitude, $office->longitude, $validatedLokasi['latitude'], $validatedLokasi['longitude']);
        if ($distance > $office->radius) {
            return $this->redirectWithMessage('Anda berada di luar radius absensi.', 'error', 422);
        }

        $this->checkAttendance()->update($validatedData);
        return $this->redirectWithMessage('Berhasil Clock out.', 'success', 201);
    }

    /**
     * Calculate the distance between two points (Haversine formula).
     */
    private function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371000; // Radius bumi dalam meter
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        return $earthRadius * $c; // Jarak dalam meter
    }

    /**
     * Validate attendance input.
     */
    private function validateAttendance(Request $request)
    {
        return $request->validateWithBag('add_attendance', [
            'status' => 'required|in:Hadir,Sakit,Alpa,Izin',
            'longitude' => 'required_if:status,Hadir|numeric',
            'latitude' => 'required_if:status,Hadir|numeric',
            'keterangan' => 'nullable|string',
            // 'swafoto' => 'required_if:status,Hadir|file|max:2048',
            'swafoto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    }

    /**
     * Get the office details.
     */
    private function getOffice()
    {
        return Office::find(1);
    }

    /**
     * Save attendance record and return response.
     */
    private function saveAttendance($data, $message, $statusCode)
    {
        $attendance = Attendance::create($data);
        return $this->responseJson([
            'success' => true,
            'data' => $attendance,
            'message' => $message,
        ], $statusCode);
    }

    /**
     * Handle JSON or redirect responses.
     */
    private function responseJson($data, $statusCode = 200, $view = null, $viewData = [])
    {
        if (request()->expectsJson()) {
            return response()->json($data, $statusCode);
        }

        return $view ? view($view, $viewData) : redirect()->route('attendances.index');
    }

    /**
     * Redirect with message and optional status code.
     */
    private function redirectWithMessage($message, $type = 'success', $statusCode = 200)
    {
        if (request()->expectsJson()) {
            return response()->json([
                'success' => $type === 'success',
                'message' => $message,
            ], $statusCode);
        }

        return back()->with($type, $message);
    }

    public function destroy(Request $request, Attendance $attendance)
    {
        $attendance->delete();
        return back();
    }
}
