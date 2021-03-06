<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editquestionCon extends FirebaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->querySnapshot('Questionnaires/-LBL-ic5iz7DLvBjvDKP');
        
        return view('editquestion');
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
        $i = $request->num;
        $data = $request->all();
        $this->updateData('Questionnaires/-LBL-ic5iz7DLvBjvDKP/', 'Question'.$i, [
            
            "choices" => [ $data['choice1'],$data['choice2'],$data['choice3'],$data['choice4'],$data['choice5'] ],
            "question" => $data['question']
      
        ]);

        return view('editquestion', ["message" => "Edit Success."]);
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
