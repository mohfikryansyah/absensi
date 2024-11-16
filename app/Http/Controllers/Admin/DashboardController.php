<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Office;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Employee;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $today = Carbon::today();
        $office = Office::first();

        $query = Attendance::with('user')->latest();

        // Filter status
        $statuses = [];
        if ($request->has('hadir')) {
            $statuses[] = 'Hadir';
        }
        if ($request->has('izin')) {
            $statuses[] = 'Izin';
        }
        if ($request->has('alpa')) {
            $statuses[] = 'Alpa';
        }
        if ($request->has('sakit')) {
            $statuses[] = 'Sakit';
        }
        if ($request->has('perjalanan_dinas')) {
            $statuses[] = 'Perjalanan Dinas';
        }

        if (!empty($statuses)) {
            $query->whereIn('status', $statuses);
        }

        try {
            if ($request->filled('start_date') && $request->filled('end_date')) {
                $startDate = Carbon::parse($request->start_date)->startOfDay();
                $endDate = Carbon::parse($request->end_date)->endOfDay();
                $query->whereBetween('tanggal', [$startDate, $endDate]);
            } elseif ($request->filled('start_date')) {
                $startDate = Carbon::parse($request->start_date)->startOfDay();
                $query->where('tanggal', '>=', $startDate);
            } elseif ($request->filled('end_date')) {
                $endDate = Carbon::parse($request->end_date)->endOfDay();
                $query->where('tanggal', '<=', $endDate);
            } else {
                // Jika tidak ada filter tanggal dari request, gunakan hari ini
                $query->where('tanggal', $today);
            }
        } catch (\Exception $e) {
            return $this->responseJson([
                'success' => false,
                'message' => 'Format tanggal tidak valid'
            ], 400);
        }

        $attendances = $query->get();
        $countEmployees = $this->countEmployees();
        $countAttendances = $this->countAttendances();
        $countAttendancesToday = $this->countAttendancesToday();

        return view('dashboard', compact('office', 'attendances', 'countEmployees', 'countAttendances', 'countAttendancesToday'));
    }

    private function countEmployees() {
        return Employee::count();
    }

    private function countAttendances() {
        return Attendance::count();
    }

    private function countAttendancesToday() {
        $today = Carbon::today();
        return Attendance::where('tanggal', $today)->count();
    }
}
