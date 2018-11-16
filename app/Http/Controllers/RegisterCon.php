<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\FirebaseController;
use Session;

class RegisterCon extends FirebaseController
{
	


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {		
    	

        return view('register');
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
    	$this->querySnapshot('AdminUsers');
    	$check = true;
        
        foreach (array_values(Session::get('ref')) as $a => $value) {
        	$name = $value['name'];
        	$lastname = $value['lastname'];
        	$username = $value['username'];
        	$password = $value['password'];

            if($request->username != $username[$a] || $request->name == null || $request->lastname == null || $request->username == null || $request->password == null){
                $check = false;
                return view('register', ["message" => "Complete all field or Username already used."]);
            }
        }

    if ($check) {
        $this->push('AdminUsers', [
            "name" => $data["name"],
            "lastname" => $data["lastname"],
            "username" => $data["username"],
            "password" => $data["password"]
        ]);

        return view('login');
    }

    
    
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
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

    public function cancel(){
        return view('cancel');
    }

    
}