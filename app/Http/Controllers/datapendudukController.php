<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datart;
use App\Models\datakepalakeluarga;
use App\Http\Controllers\Post;

class datapendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datart = datart::all();
        return view('layouts.datapenduduk.datart')->with('datart',$datart);
        // return view('layouts.dashboard_datapenduduk.datart',['datart'=>$datart]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahrt(Request $request)
    {   
        datart::create([
            'rt' => $request->rt,
            'ketuart' => $request->ketuart,
            'alamatrt' => $request->alamatrt,    
        ]);

        return redirect('/dashboard-datapenduduk')->with('success', 'Task Created Successfully!');
    }

    public function delete($id)
    {
        $datart = datart::find($id);
        $datart->delete();


        return redirect('/dashboard-datapenduduk')->with('datart',$datart);
    }

    public function editrt(Request $request, $id)
    {
        $datart = datart::find($id);
        $datart->update($request->all());

        $datart->save();
        return redirect('/dashboard-datapenduduk')->with('datart', $datart);
    }

    public function editrtindex($id)
    {
        $datart = datart::find($id);
        return view('layouts.datapenduduk.editrt',['datart'=>$datart]);
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
