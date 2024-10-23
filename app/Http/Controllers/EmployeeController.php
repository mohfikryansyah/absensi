<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Devisi;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(User::with('employees')->latest()->get());
        $employees = Employee::with(['devisi', 'user'])->latest()->get();
        // return response()->json($employees);
        // dd();
        return view('Employee.index-employee', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $devisis = Devisi::orderBy('name', 'desc')->get();
        return view('Employee.create-employee', compact('devisis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validateWithBag('add_employee', [
            'name' => ['required', 'max:255', 'string'],
            'date_of_birth' => ['required', 'date_format:Y-m-d'],
            'gender' => ['required', 'in:Laki-laki,Perempuan'],
            'address' => ['required'],
            'phone_number' => ['required', 'numeric', 'min_digits:10', 'max_digits:15'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'devisi' => ['required'],
            'date_joined' => ['required', 'date_format:Y-m-d'],
            'avatar' => ['nullable', 'file', 'max:1024'],
        ]);

        DB::beginTransaction();

        try {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make('password');
            $user->save();

            $employee = new Employee();
            $employee->devisi_id = $request->input('devisi');
            $employee->date_joined = $request->input('date_joined');
            $employee->date_of_birth = $request->input('date_of_birth');
            $employee->gender = $request->input('gender');
            $employee->address = $request->input('address');
            $employee->phone_number = $request->input('phone_number');
            $employee->user_id = $user->id;
            if ($request->hasFile('avatar')) {
                $pathAvatar = $request->file('avatar')->store('avatar', 'public');
                $employee->avatar = $pathAvatar;
            }
            $employee->save();

            DB::commit();

            return redirect()->back()->with('success', 'Data berhasil disimpan!');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Temukan employee berdasarkan ID
        $employee = Employee::findOrFail($id);
        $user = User::findOrFail($employee->user_id);

        // Mulai transaksi
        DB::beginTransaction();

        try {
            // Validasi dan update untuk setiap field
            if ($request->has('name')) {
                $request->validate([
                    'name' => ['string', 'max:255'],
                ]);
                $user->name = $request->input('name');
            }

            if ($request->has('email')) {
                $request->validate([
                    'email' => ['email', 'max:255', 'unique:' . User::class . ',email,' . $user->id],
                ]);
                $user->email = $request->input('email');
            }

            if ($request->has('password')) {
                $request->validate([
                    'password' => ['string', 'min:8'],
                ]);
                $user->password = Hash::make($request->input('password'));
            }

            // Simpan perubahan pada User
            $user->save();

            // Validasi dan update untuk Employee
            if ($request->has('devisi')) {
                $request->validate([
                    'devisi' => ['required'],
                ]);
                $employee->devisi_id = $request->input('devisi');
            }

            if ($request->has('date_of_birth')) {
                $request->validate([
                    'date_of_birth' => ['date_format:Y-m-d'],
                ]);
                $employee->date_of_birth = $request->input('date_of_birth');
            }

            if ($request->has('gender')) {
                $request->validate([
                    'gender' => ['in:Laki-laki,Perempuan'],
                ]);
                $employee->gender = $request->input('gender');
            }

            if ($request->has('address')) {
                $employee->address = $request->input('address');
            }

            if ($request->has('phone_number')) {
                $request->validate([
                    'phone_number' => ['numeric', 'min_digits:10', 'max_digits:15'],
                ]);
                $employee->phone_number = $request->input('phone_number');
            }

            if ($request->has('date_joined')) {
                $request->validate([
                    'date_joined' => ['date_format:Y-m-d'],
                ]);
                $employee->date_joined = $request->input('date_joined');
            }

            // Jika avatar di-upload, lakukan update
            if ($request->hasFile('avatar')) {
                $request->validate([
                    'avatar' => ['nullable', 'file', 'max:1024'],
                ]);
                $pathAvatar = $request->file('avatar')->store('avatar', 'public');
                $employee->avatar = $pathAvatar;
            }

            // Simpan perubahan pada Employee
            $employee->save();

            // Commit transaksi jika berhasil
            DB::commit();

            return redirect()->back()->with('success', 'Data berhasil diperbarui!');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi error
            DB::rollback();

            return redirect()
                ->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
