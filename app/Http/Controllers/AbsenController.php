<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;
use App\Models\Student;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absens = Absen::latest()->paginate(5);

        return view('absen.index', compact('absens'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::all();
        return view("absen.create", compact('student', $student));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'jam_kedatangan' => 'required',
            'jam_kepulangan' => 'required',
            'ket' => 'required'
        ]);
        Absen::create($request->all());
        return redirect()->route('absen.index')->with('success', 'Berhasil Menyimpan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        $student = Student::all();
        return view('absen.edit', compact('absen', 'student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
        $request->validate([
            'nis' => 'required',
            'jam_kedatangan' => 'required',
            'jam_kepulangan' => 'required',
            'ket' => 'required'
        ]);
        $absen->update($request->all());
        return redirect()->route('absen.index')->with('success', 'Berhasil Mengubah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absen)
    {
        $absen->delete();
        return redirect()->route('absen.index')->with('success', 'Berhasil Menghapus Data!');
    }
}
