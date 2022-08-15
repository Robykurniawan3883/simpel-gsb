<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\hash;
use Illuminate\Support\Facades\Crypt;

class dataadminController extends Controller
{
    public function index()
    {

        $User = User::all();
        return view('layouts.dashboard_kelola_admin.dataadmin')->with('User',$User);

    }

    public function createadmin(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'password' => bcrypt($request['password']),
            
        ]);
        return redirect('/dashboard-dataadmin')->with('Sukses', 'Data Berhasil Ditambahkan');
    }

    public function updateadmin(Request $request, $id)
    {
        $User = User::find($id);

        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->level = $request->input('level');
        $User->password = bcrypt($request['password']);

        $User->save();

        return redirect('/dashboard-dataadmin')->with('sukses', 'Data Berhasil Diubah');
    }

    public function updateadminindex($id)
    {

        $User = User::find($id);
        return view('layouts.dashboard_kelola_admin.editadmin',['User'=>$User]);

    }

    public function delete($id)
    {
        $User = User::find($id);
        $User->delete();


        return redirect('/dashboard-dataadmin')->with('User',$User);
    }
}
