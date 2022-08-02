<?php

namespace App\Http\Controllers;
use App\Models\loginusers;
use Illuminate\Http\Request;

class LoginusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return loginusers::all();

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        loginusers::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\loginusers  $loginusers
     * @return \Illuminate\Http\Response
     */
    public function show(loginusers $loginusers, $id)
    {
        $user = loginusers::where('username', $id)->get();
       return $user;
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\loginusers  $loginusers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, loginusers  $loginusers)
    {

        $user = loginusers::findOrFail($id);
        $user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loginusers  $loginusers
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id, loginusers $loginusers)
    {
        $user = loginusers::findOrFail($id);
        $user->delete();
    }
}
