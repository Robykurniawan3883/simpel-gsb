<?php

namespace App\Http\Controllers;


use App\Exports\bukutamuExport;
use Illuminate\Http\Request;
use App\Models\bukutamu;
use Maatwebsite\Excel\Facades\Excel;

class datapengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view('layouts.dashboard.datapengunjung');
    // }

    public function display()
    {
        $bukutamu = bukutamu::all();
        return view('layouts.dashboard.datapengunjung')->with('bukutamu',$bukutamu);
    }

    
    public function delete($id)
    {
        $bukutamu = bukutamu::find($id);
        $bukutamu->delete();


        return redirect('/dashboard-datapengunjung')->with('bukutamu',$bukutamu);
    }


    public function bukutamuExport(Request $request){
        
        return Excel::download(new bukutamuExport,'bukutamu.xlsx');
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $bukutamu = bukutamu::find($id);
        $bukutamu->update($request->all());

        $bukutamu->save();
        return redirect('/dashboard-datapengunjung')->with('bukutamu', $bukutamu);
    }

    public function showeditpengunjung($id)
    {
        $bukutamu = bukutamu::find($id);
        return view('layouts.dashboard.editpengunjung')->with('bukutamu',$bukutamu);
        // return view('layouts.dashboard.profilpegawai', ['datapegawai' => $datapegawai]);
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
