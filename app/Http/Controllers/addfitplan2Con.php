<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addfitplan2Con extends FirebaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addfitplan2');
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
        $this->push('FitnessPlan',[
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
      "intensity" => $data['intensity'],
      "weeks" => [  [
        "days" => [ [  
            "bodyparts" => [ 
                "part1" => $data['bodyParts1'],
                "part2" => $data['bodyParts2'],
                "part3" => $data['bodyParts3']
            ],
            "sets" => [ [   
                "workouts" => [   
                    
                      ["resttime" => $data['resttime']]
                    , 
                      ["amount" => $data['amount1'],
                      "title" => $data['title1']]
                    , 
                      ["amount" => $data['amount2'],
                      "title" => $data['title2']]
                    , 
                      ["amount" => $data['amount3'],
                      "title" => $data['title3']]
                    , 
                      ["amount" => $data['amount4'],
                      "title" => $data['title4']]
                    , 
                      ["amount" => $data['amount5'],
                      "title" => $data['title5']]
                      , 
                      ["amount" => $data['amount6'],
                      "title" => $data['title6']]
                      , 
                      ["amount" => $data['amount7'],
                      "title" => $data['title7']]
                ]
                ] ,[
                    "workouts" => [   
                    
                      ["title" => $data['set1']]
                    , 
                      ["amount" => $data['amount1'],
                      "title" => $data['title1']]
                    , 
                      ["amount" => $data['amount2'],
                      "title" => $data['title2']]
                    , 
                      ["amount" => $data['amount3'],
                      "title" => $data['title3']]
                    , 
                      ["amount" => $data['amount4'],
                      "title" => $data['title4']]
                    , 
                      ["amount" => $data['amount5'],
                      "title" => $data['title5']]
                      , 
                      ["amount" => $data['amount6'],
                      "title" => $data['title6']]
                      , 
                      ["amount" => $data['amount7'],
                      "title" => $data['title7']]
                ]
                ]

                ] ],[
                    "bodyparts" => [ $data['bodyParts'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ]

                    ]
                    ] , [
                    "bodyparts" => [ $data['bodyParts'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ]

                    ]
                    ] , [
                    "bodyparts" => [ $data['bodyParts'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ]

                    ]
                    ] , [
                    "bodyparts" => [ $data['bodyParts'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ]

                    ]
                    ] , [
                    "bodyparts" => [ $data['bodyParts'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ]

                    ]
                    ] , [
                    "bodyparts" => [ $data['bodyParts'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set1']]
                        , 
                          ["amount" => $data['amount1'],
                          "title" => $data['title1']]
                        , 
                          ["amount" => $data['amount2'],
                          "title" => $data['title2']]
                        , 
                          ["amount" => $data['amount3'],
                          "title" => $data['title3']]
                        , 
                          ["amount" => $data['amount4'],
                          "title" => $data['title4']]
                        , 
                          ["amount" => $data['amount5'],
                          "title" => $data['title5']]
                          , 
                          ["amount" => $data['amount6'],
                          "title" => $data['title6']]
                          , 
                          ["amount" => $data['amount7'],
                          "title" => $data['title7']]
                    ]
                    ]

                    ]
                    ]
                    ]
                    ]
                ]

        ]);
    return view('menu');
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
