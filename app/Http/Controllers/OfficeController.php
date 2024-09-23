<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Attendance;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Office::all());
        return view('Offices.index-office', [
            'offices' => Office::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Offices.create-office');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all())
        $validatedData = $request->validateWithBag('add_office', [
            'name' => ['required'],
            'radius' => ['required', 'numeric'],
            'latitude' => ['required', 'numeric'],
            'longitude' => ['required', 'numeric'],
            'clock_in' => ['required', 'date_format:H:i'],
            'clock_out' => ['required', 'date_format:H:i', 'after:clock_in'],
        ]);

        dd($validatedData);

        Office::create($validatedData);
        return redirect()->route('office.index')->with('success', 'Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Office $office)
    {
        $attendances = Attendance::with('user')->get();

        return view('Offices.view-office', [
            'office' => $office,
            'attendances' => $attendances,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Office $office)
    {
        return view('Offices.edit-office', compact('office'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Office $office)
    {
        // dd($request->all());
        $validatedData = $request->validateWithBag('edit_office', [
            'name' => ['required'],
            'radius' => ['required', 'numeric'],
            'latitude' => ['required', 'numeric'],
            'longitude' => ['required', 'numeric'],
            'clock_in' => ['required', 'date_format:H:i'],
            'clock_out' => ['required', 'date_format:H:i'],
        ]);

        //  dd($validatedData);

        $office->update($validatedData);

        $previousUrl = session('previous_url', route('office.index')); // Ganti 'office.index' dengan nama route yang sesuai
        return redirect($previousUrl)->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Office $office)
    {
        $office->delete();
        return back()->with('success', 'deleted!');
    }
}