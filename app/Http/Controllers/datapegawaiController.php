<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapegawai;

class datapegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapegawai = datapegawai::all();
        return view('layouts.dashboard.datapegawai')->with('datapegawai',$datapegawai);
    }

    public function create(Request $request )
    {

        $datapegawai = new datapegawai();

        $datapegawai->nama = $request->input('nama');
        $datapegawai->email = $request->input('email');
        $datapegawai->jabatan = $request->input('jabatan');
        $datapegawai->npwp = $request->input('npwp');
        $datapegawai->nip = $request->input('nip');
        $datapegawai->pangkat = $request->input('pangkat');
        $datapegawai->notelepon = $request->input('notelepon');

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension('');
            $filename = time(). '.' . $extension;
            $file->move('images/',$filename);
            $datapegawai->image = $filename;
        } else {
            return $request;
            $datapegawai->image='';

        }
        $datapegawai->save();


        return redirect('/dashboard-datapegawai')->with('success', 'Data Berhasil Tersimpan');
    }

    public function delete($id)
    {
        $datapegawai = datapegawai::find($id);
        $datapegawai->delete();


        return redirect('/dashboard-datapegawai')->with('datapegawai',$datapegawai);
    }

    public function profil($id)
    {
        $datapegawai = datapegawai::find($id);
        return view('layouts.dashboard.profilpegawai')->with('datapegawai',$datapegawai);
        // return view('layouts.dashboard.profilpegawai', ['datapegawai' => $datapegawai]);
    }

    // public function profil($id)
    // {
    //     $datapegawai = DB::table('datapegawai')->where('id','=',$id)->get();
    //     return view('layouts.dashboard.profilpegawai', compact('datapegawai', $datapegawai));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function store(Request $request)
    // {
    //     //
    // }

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
