<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editfitplanCon extends FirebaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->querySnapshot('FitnessPlan');

        return view('editfitplan');
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
        $this->updateData('FitnessPlan/', $request->key2, [
            "age" => [
        "end" => $data['ageEnd'],
        "start" => $data['ageStart']
      ],
      "avgtime" => $data['avgTime'],
      "bmi" => [
        "end" => $data['bmiEnd'],
        "start" => $data['bmiStart']
      ],
      "category" => $data['category'],
      "difficult" => $data['difficult'],
      "equipment" => [ $data['equipment0'], $data['equipment1'] ],
      "gender" => [ $data['gender0'], $data['gender1'] ],
      "intensity" => $data['intensity']
        ]);
        return view('editfitplan', ["message" => "Edit Success."]);
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
