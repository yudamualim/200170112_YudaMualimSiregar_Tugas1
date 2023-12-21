<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataMahasiswa;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DataMahasiswa = DataMahasiswa::all();
        return view('home', compact('DataMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_matkul');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DataMahasiswa::create(
            [
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'kode_kelas' => $request->kode_kelas,
                'sks' => $request->sks,
                'dosen_kelas' => $request->dosen_kelas,
                
            ]
        );
        return redirect()->route('DataMahasiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DataMahasiswa = DataMahasiswa::find ($id);
        return view('edit_matkul', ['DataMahasiswa' => $DataMahasiswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DataMahasiswa::where('id', $id)
            ->update(
                [
                    'nama' => $request->nama,
                    'kelas' => $request->kelas,
                    'kode_kelas' => $request->kode_kelas,
                    'sks' => $request->sks,
                    'dosen_kelas' => $request->dosen_kelas,
                ]

            );
        return redirect()->route('DataMahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataMahasiswa::destroy($id);
        return redirect()->route('DataMahasiswa.index');
    }
}
