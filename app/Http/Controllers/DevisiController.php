<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Devisi;
use Illuminate\Http\Request;

class DevisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Divisi.index-divisi', [
            'devisi' => Devisi::with('KetuaDivisi')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get();
        return view('Divisi.create-divisi', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'ketua' => 'required',
        ]);

        Devisi::create($validatedData);

        return back()->with('success', 'Divisi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Devisi $devisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devisi $devisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devisi $devisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Devisi $devisi)
    {   
        Devisi::where('id', $request->id)->delete();
        return back()->with('success', 'Data berhasil dihapus!');
    }

    public function getDevisi(Devisi $id)
    {
        return $id;
    }
}
