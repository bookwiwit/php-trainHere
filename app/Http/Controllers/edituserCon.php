<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class edituserCon extends FirebaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->querySnapshot('User');
        
       
        return view('edituser');
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
        $data = $request->all();
        $this->updateData('User/', $request->key2, [
          "dateofbirth" => $data['dob'],
          "email" => $data['email'],
          "fName" => $data['fname'],
          "gender" => $data['gender'],
          "height" => $data['height'],
          "lName" => $data['lname'],
          "password" => $data['password'],
          "waistMeasurement" => $data['waist'],
          "weight" => $data['weight']
        ]);

        return view('edituser', ["message" => "Edit Success."]);
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
