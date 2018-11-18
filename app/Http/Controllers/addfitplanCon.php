<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addfitplanCon extends FirebaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addfitplan');
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
            "bodyparts" => [ $data['bodyParts1'] ],
            "sets" => [ [   
                "workouts" => [   
                    
                      ["title" => $data['set11']]
                    , 
                      ["amount" => $data['amount111'],
                      "title" => $data['title111']]
                    , 
                      ["amount" => $data['amount112'],
                      "title" => $data['title112']]
                    , 
                      ["amount" => $data['amount113'],
                      "title" => $data['title113']]
                    , 
                      ["amount" => $data['amount114'],
                      "title" => $data['title114']]
                    , 
                      ["amount" => $data['amount115'],
                      "title" => $data['title115']]
                      , 
                      ["amount" => $data['amount116'],
                      "title" => $data['title116']]
                      , 
                      ["amount" => $data['amount117'],
                      "title" => $data['title117']]
                ]
                ] ,[
                    "workouts" => [   
                    
                      ["title" => $data['set12']]
                    , 
                      ["amount" => $data['amount121'],
                      "title" => $data['title121']]
                    , 
                      ["amount" => $data['amount122'],
                      "title" => $data['title122']]
                    , 
                      ["amount" => $data['amount123'],
                      "title" => $data['title123']]
                    , 
                      ["amount" => $data['amount124'],
                      "title" => $data['title124']]
                    , 
                      ["amount" => $data['amount125'],
                      "title" => $data['title125']]
                      , 
                      ["amount" => $data['amount126'],
                      "title" => $data['title126']]
                      , 
                      ["amount" => $data['amount127'],
                      "title" => $data['title127']]
                ]
                ],[
                    "workouts" => [   
                    
                      ["title" => $data['set13']]
                    , 
                      ["amount" => $data['amount131'],
                      "title" => $data['title131']]
                    , 
                      ["amount" => $data['amount132'],
                      "title" => $data['title132']]
                    , 
                      ["amount" => $data['amount133'],
                      "title" => $data['title133']]
                    , 
                      ["amount" => $data['amount134'],
                      "title" => $data['title134']]
                    , 
                      ["amount" => $data['amount135'],
                      "title" => $data['title135']]
                      , 
                      ["amount" => $data['amount136'],
                      "title" => $data['title136']]
                      , 
                      ["amount" => $data['amount137'],
                      "title" => $data['title137']]
                ]
                ],[
                    "workouts" => [   
                    
                      ["title" => $data['set14']]
                    , 
                      ["amount" => $data['amount141'],
                      "title" => $data['title141']]
                    , 
                      ["amount" => $data['amount142'],
                      "title" => $data['title142']]
                    , 
                      ["amount" => $data['amount143'],
                      "title" => $data['title143']]
                    , 
                      ["amount" => $data['amount144'],
                      "title" => $data['title144']]
                    , 
                      ["amount" => $data['amount145'],
                      "title" => $data['title145']]
                      , 
                      ["amount" => $data['amount146'],
                      "title" => $data['title146']]
                      , 
                      ["amount" => $data['amount147'],
                      "title" => $data['title147']]
                ]
                ],[
                    "workouts" => [   
                    
                      ["title" => $data['set15']]
                    , 
                      ["amount" => $data['amount151'],
                      "title" => $data['title151']]
                    , 
                      ["amount" => $data['amount152'],
                      "title" => $data['title152']]
                    , 
                      ["amount" => $data['amount153'],
                      "title" => $data['title153']]
                    , 
                      ["amount" => $data['amount154'],
                      "title" => $data['title154']]
                    , 
                      ["amount" => $data['amount155'],
                      "title" => $data['title155']]
                      , 
                      ["amount" => $data['amount156'],
                      "title" => $data['title156']]
                      , 
                      ["amount" => $data['amount157'],
                      "title" => $data['title157']]
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
    return view('addfitplan', ["message" => "Add Success."]);
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
