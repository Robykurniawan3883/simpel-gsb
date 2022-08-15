<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.loginpage.login');
    }

    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard-welcome');

        }
        return redirect('/login');
    }

    // public function postloginmanajemen (Request $request){
    //     // dd($request->all());
    //     if (Auth::attempt($request->only('email','password'))){
    //         return redirect('/dashboard-datapegawai');

    //     }
    //     return redirect('/login');
    // }

    public function update(Request $request)
    {
        // Validate the new password length...
 
        $request->user()->fill([
            'password' => Hash::make($request->newPassword)
        ])->save();
    }

    public function logout(Request $request)
    {
        // Validate the new password length...
        Auth::logout();
        return redirect('/login');
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


    public function destroy($id)
    {
        //
    }
}
