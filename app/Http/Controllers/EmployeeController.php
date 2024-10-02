<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Devisi;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        ]);
        // 'avatar' => ['nullable', 'file', 'max:2048'],
        // dd($request->all());

        DB::beginTransaction();

        try {
            // Simpan ke tabel pertama
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make('password');
            $user->save();
            // dd($user->id);

            // Simpan ke tabel kedua
            $employee = new Employee();
            $employee->devisi_id = $request->input('devisi');
            $employee->date_joined = $request->input('date_joined');
            $employee->date_of_birth = $request->input('date_of_birth');
            $employee->gender = $request->input('gender');
            $employee->address = $request->input('address');
            $employee->phone_number = $request->input('phone_number');
            $employee->user_id = $user->id;
            // dd($employee);
            // $employee->avatar = $request->input('avatar');
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
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
