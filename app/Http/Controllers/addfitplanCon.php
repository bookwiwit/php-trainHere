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
                    "bodyparts" => [ $data['bodyParts2'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set21']]
                        , 
                          ["amount" => $data['amount211'],
                          "title" => $data['title211']]
                        , 
                          ["amount" => $data['amount212'],
                          "title" => $data['title212']]
                        , 
                          ["amount" => $data['amount213'],
                          "title" => $data['title213']]
                        , 
                          ["amount" => $data['amount214'],
                          "title" => $data['title214']]
                        , 
                          ["amount" => $data['amount215'],
                          "title" => $data['title215']]
                          , 
                          ["amount" => $data['amount216'],
                          "title" => $data['title216']]
                          , 
                          ["amount" => $data['amount217'],
                          "title" => $data['title217']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set22']]
                        , 
                          ["amount" => $data['amount221'],
                          "title" => $data['title221']]
                        , 
                          ["amount" => $data['amount222'],
                          "title" => $data['title222']]
                        , 
                          ["amount" => $data['amount223'],
                          "title" => $data['title223']]
                        , 
                          ["amount" => $data['amount224'],
                          "title" => $data['title224']]
                        , 
                          ["amount" => $data['amount225'],
                          "title" => $data['title225']]
                          , 
                          ["amount" => $data['amount226'],
                          "title" => $data['title226']]
                          , 
                          ["amount" => $data['amount227'],
                          "title" => $data['title227']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set23']]
                        , 
                          ["amount" => $data['amount231'],
                          "title" => $data['title231']]
                        , 
                          ["amount" => $data['amount232'],
                          "title" => $data['title232']]
                        , 
                          ["amount" => $data['amount233'],
                          "title" => $data['title233']]
                        , 
                          ["amount" => $data['amount234'],
                          "title" => $data['title234']]
                        , 
                          ["amount" => $data['amount235'],
                          "title" => $data['title235']]
                          , 
                          ["amount" => $data['amount236'],
                          "title" => $data['title236']]
                          , 
                          ["amount" => $data['amount237'],
                          "title" => $data['title237']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set24']]
                        , 
                          ["amount" => $data['amount241'],
                          "title" => $data['title241']]
                        , 
                          ["amount" => $data['amount242'],
                          "title" => $data['title242']]
                        , 
                          ["amount" => $data['amount243'],
                          "title" => $data['title243']]
                        , 
                          ["amount" => $data['amount244'],
                          "title" => $data['title244']]
                        , 
                          ["amount" => $data['amount245'],
                          "title" => $data['title245']]
                          , 
                          ["amount" => $data['amount246'],
                          "title" => $data['title246']]
                          , 
                          ["amount" => $data['amount247'],
                          "title" => $data['title247']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set25']]
                        , 
                          ["amount" => $data['amount251'],
                          "title" => $data['title251']]
                        , 
                          ["amount" => $data['amount252'],
                          "title" => $data['title252']]
                        , 
                          ["amount" => $data['amount253'],
                          "title" => $data['title253']]
                        , 
                          ["amount" => $data['amount254'],
                          "title" => $data['title254']]
                        , 
                          ["amount" => $data['amount255'],
                          "title" => $data['title255']]
                          , 
                          ["amount" => $data['amount256'],
                          "title" => $data['title256']]
                          , 
                          ["amount" => $data['amount257'],
                          "title" => $data['title257']]
                    ]
                    ]

                    ]
                    ] , [
                    "bodyparts" => [ $data['bodyParts3'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set31']]
                        , 
                          ["amount" => $data['amount311'],
                          "title" => $data['title311']]
                        , 
                          ["amount" => $data['amount312'],
                          "title" => $data['title312']]
                        , 
                          ["amount" => $data['amount313'],
                          "title" => $data['title313']]
                        , 
                          ["amount" => $data['amount314'],
                          "title" => $data['title314']]
                        , 
                          ["amount" => $data['amount315'],
                          "title" => $data['title315']]
                          , 
                          ["amount" => $data['amount316'],
                          "title" => $data['title316']]
                          , 
                          ["amount" => $data['amount317'],
                          "title" => $data['title317']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set32']]
                        , 
                          ["amount" => $data['amount321'],
                          "title" => $data['title321']]
                        , 
                          ["amount" => $data['amount322'],
                          "title" => $data['title322']]
                        , 
                          ["amount" => $data['amount323'],
                          "title" => $data['title323']]
                        , 
                          ["amount" => $data['amount324'],
                          "title" => $data['title324']]
                        , 
                          ["amount" => $data['amount325'],
                          "title" => $data['title325']]
                          , 
                          ["amount" => $data['amount326'],
                          "title" => $data['title326']]
                          , 
                          ["amount" => $data['amount327'],
                          "title" => $data['title327']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set33']]
                        , 
                          ["amount" => $data['amount331'],
                          "title" => $data['title331']]
                        , 
                          ["amount" => $data['amount332'],
                          "title" => $data['title332']]
                        , 
                          ["amount" => $data['amount333'],
                          "title" => $data['title333']]
                        , 
                          ["amount" => $data['amount334'],
                          "title" => $data['title334']]
                        , 
                          ["amount" => $data['amount335'],
                          "title" => $data['title335']]
                          , 
                          ["amount" => $data['amount336'],
                          "title" => $data['title336']]
                          , 
                          ["amount" => $data['amount337'],
                          "title" => $data['title337']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set34']]
                        , 
                          ["amount" => $data['amount341'],
                          "title" => $data['title341']]
                        , 
                          ["amount" => $data['amount342'],
                          "title" => $data['title342']]
                        , 
                          ["amount" => $data['amount343'],
                          "title" => $data['title343']]
                        , 
                          ["amount" => $data['amount344'],
                          "title" => $data['title344']]
                        , 
                          ["amount" => $data['amount345'],
                          "title" => $data['title345']]
                          , 
                          ["amount" => $data['amount346'],
                          "title" => $data['title346']]
                          , 
                          ["amount" => $data['amount347'],
                          "title" => $data['title347']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set35']]
                        , 
                          ["amount" => $data['amount351'],
                          "title" => $data['title351']]
                        , 
                          ["amount" => $data['amount352'],
                          "title" => $data['title352']]
                        , 
                          ["amount" => $data['amount353'],
                          "title" => $data['title353']]
                        , 
                          ["amount" => $data['amount354'],
                          "title" => $data['title354']]
                        , 
                          ["amount" => $data['amount355'],
                          "title" => $data['title355']]
                          , 
                          ["amount" => $data['amount356'],
                          "title" => $data['title356']]
                          , 
                          ["amount" => $data['amount357'],
                          "title" => $data['title357']]
                    ]
                    ]

                    ]
                    ] , [
                    "bodyparts" => [ $data['bodyParts4'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set41']]
                        , 
                          ["amount" => $data['amount411'],
                          "title" => $data['title411']]
                        , 
                          ["amount" => $data['amount412'],
                          "title" => $data['title412']]
                        , 
                          ["amount" => $data['amount413'],
                          "title" => $data['title413']]
                        , 
                          ["amount" => $data['amount414'],
                          "title" => $data['title414']]
                        , 
                          ["amount" => $data['amount415'],
                          "title" => $data['title415']]
                          , 
                          ["amount" => $data['amount416'],
                          "title" => $data['title416']]
                          , 
                          ["amount" => $data['amount417'],
                          "title" => $data['title417']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set42']]
                        , 
                          ["amount" => $data['amount421'],
                          "title" => $data['title421']]
                        , 
                          ["amount" => $data['amount422'],
                          "title" => $data['title422']]
                        , 
                          ["amount" => $data['amount423'],
                          "title" => $data['title423']]
                        , 
                          ["amount" => $data['amount424'],
                          "title" => $data['title424']]
                        , 
                          ["amount" => $data['amount425'],
                          "title" => $data['title425']]
                          , 
                          ["amount" => $data['amount426'],
                          "title" => $data['title426']]
                          , 
                          ["amount" => $data['amount427'],
                          "title" => $data['title427']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set43']]
                        , 
                          ["amount" => $data['amount431'],
                          "title" => $data['title431']]
                        , 
                          ["amount" => $data['amount432'],
                          "title" => $data['title432']]
                        , 
                          ["amount" => $data['amount433'],
                          "title" => $data['title433']]
                        , 
                          ["amount" => $data['amount434'],
                          "title" => $data['title434']]
                        , 
                          ["amount" => $data['amount435'],
                          "title" => $data['title435']]
                          , 
                          ["amount" => $data['amount436'],
                          "title" => $data['title436']]
                          , 
                          ["amount" => $data['amount437'],
                          "title" => $data['title437']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set44']]
                        , 
                          ["amount" => $data['amount441'],
                          "title" => $data['title441']]
                        , 
                          ["amount" => $data['amount442'],
                          "title" => $data['title442']]
                        , 
                          ["amount" => $data['amount443'],
                          "title" => $data['title443']]
                        , 
                          ["amount" => $data['amount444'],
                          "title" => $data['title444']]
                        , 
                          ["amount" => $data['amount445'],
                          "title" => $data['title445']]
                          , 
                          ["amount" => $data['amount446'],
                          "title" => $data['title446']]
                          , 
                          ["amount" => $data['amount447'],
                          "title" => $data['title447']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set45']]
                        , 
                          ["amount" => $data['amount451'],
                          "title" => $data['title451']]
                        , 
                          ["amount" => $data['amount452'],
                          "title" => $data['title452']]
                        , 
                          ["amount" => $data['amount453'],
                          "title" => $data['title453']]
                        , 
                          ["amount" => $data['amount454'],
                          "title" => $data['title454']]
                        , 
                          ["amount" => $data['amount455'],
                          "title" => $data['title455']]
                          , 
                          ["amount" => $data['amount456'],
                          "title" => $data['title456']]
                          , 
                          ["amount" => $data['amount457'],
                          "title" => $data['title457']]
                    ]
                    ]

                    ]
                    ] , [
                    "bodyparts" => [ $data['bodyParts5'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set51']]
                        , 
                          ["amount" => $data['amount511'],
                          "title" => $data['title511']]
                        , 
                          ["amount" => $data['amount512'],
                          "title" => $data['title512']]
                        , 
                          ["amount" => $data['amount513'],
                          "title" => $data['title513']]
                        , 
                          ["amount" => $data['amount514'],
                          "title" => $data['title514']]
                        , 
                          ["amount" => $data['amount515'],
                          "title" => $data['title515']]
                          , 
                          ["amount" => $data['amount516'],
                          "title" => $data['title516']]
                          , 
                          ["amount" => $data['amount517'],
                          "title" => $data['title517']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set52']]
                        , 
                          ["amount" => $data['amount521'],
                          "title" => $data['title521']]
                        , 
                          ["amount" => $data['amount522'],
                          "title" => $data['title522']]
                        , 
                          ["amount" => $data['amount523'],
                          "title" => $data['title523']]
                        , 
                          ["amount" => $data['amount524'],
                          "title" => $data['title524']]
                        , 
                          ["amount" => $data['amount525'],
                          "title" => $data['title525']]
                          , 
                          ["amount" => $data['amount526'],
                          "title" => $data['title526']]
                          , 
                          ["amount" => $data['amount527'],
                          "title" => $data['title527']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set53']]
                        , 
                          ["amount" => $data['amount531'],
                          "title" => $data['title531']]
                        , 
                          ["amount" => $data['amount532'],
                          "title" => $data['title532']]
                        , 
                          ["amount" => $data['amount533'],
                          "title" => $data['title533']]
                        , 
                          ["amount" => $data['amount534'],
                          "title" => $data['title534']]
                        , 
                          ["amount" => $data['amount535'],
                          "title" => $data['title535']]
                          , 
                          ["amount" => $data['amount536'],
                          "title" => $data['title536']]
                          , 
                          ["amount" => $data['amount537'],
                          "title" => $data['title537']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set54']]
                        , 
                          ["amount" => $data['amount541'],
                          "title" => $data['title541']]
                        , 
                          ["amount" => $data['amount542'],
                          "title" => $data['title542']]
                        , 
                          ["amount" => $data['amount543'],
                          "title" => $data['title543']]
                        , 
                          ["amount" => $data['amount544'],
                          "title" => $data['title544']]
                        , 
                          ["amount" => $data['amount545'],
                          "title" => $data['title545']]
                          , 
                          ["amount" => $data['amount546'],
                          "title" => $data['title546']]
                          , 
                          ["amount" => $data['amount547'],
                          "title" => $data['title547']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set55']]
                        , 
                          ["amount" => $data['amount551'],
                          "title" => $data['title551']]
                        , 
                          ["amount" => $data['amount552'],
                          "title" => $data['title552']]
                        , 
                          ["amount" => $data['amount553'],
                          "title" => $data['title553']]
                        , 
                          ["amount" => $data['amount554'],
                          "title" => $data['title554']]
                        , 
                          ["amount" => $data['amount555'],
                          "title" => $data['title555']]
                          , 
                          ["amount" => $data['amount556'],
                          "title" => $data['title556']]
                          , 
                          ["amount" => $data['amount557'],
                          "title" => $data['title557']]
                    ]
                    ]

                    ]
                    ] , [
                    "bodyparts" => [ $data['bodyParts6'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set61']]
                        , 
                          ["amount" => $data['amount611'],
                          "title" => $data['title611']]
                        , 
                          ["amount" => $data['amount612'],
                          "title" => $data['title612']]
                        , 
                          ["amount" => $data['amount613'],
                          "title" => $data['title613']]
                        , 
                          ["amount" => $data['amount614'],
                          "title" => $data['title614']]
                        , 
                          ["amount" => $data['amount615'],
                          "title" => $data['title615']]
                          , 
                          ["amount" => $data['amount616'],
                          "title" => $data['title616']]
                          , 
                          ["amount" => $data['amount617'],
                          "title" => $data['title617']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set62']]
                        , 
                          ["amount" => $data['amount621'],
                          "title" => $data['title621']]
                        , 
                          ["amount" => $data['amount622'],
                          "title" => $data['title622']]
                        , 
                          ["amount" => $data['amount623'],
                          "title" => $data['title623']]
                        , 
                          ["amount" => $data['amount624'],
                          "title" => $data['title624']]
                        , 
                          ["amount" => $data['amount625'],
                          "title" => $data['title625']]
                          , 
                          ["amount" => $data['amount626'],
                          "title" => $data['title626']]
                          , 
                          ["amount" => $data['amount627'],
                          "title" => $data['title627']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set63']]
                        , 
                          ["amount" => $data['amount631'],
                          "title" => $data['title631']]
                        , 
                          ["amount" => $data['amount632'],
                          "title" => $data['title632']]
                        , 
                          ["amount" => $data['amount633'],
                          "title" => $data['title633']]
                        , 
                          ["amount" => $data['amount634'],
                          "title" => $data['title634']]
                        , 
                          ["amount" => $data['amount635'],
                          "title" => $data['title635']]
                          , 
                          ["amount" => $data['amount636'],
                          "title" => $data['title636']]
                          , 
                          ["amount" => $data['amount637'],
                          "title" => $data['title637']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set64']]
                        , 
                          ["amount" => $data['amount641'],
                          "title" => $data['title641']]
                        , 
                          ["amount" => $data['amount642'],
                          "title" => $data['title642']]
                        , 
                          ["amount" => $data['amount643'],
                          "title" => $data['title643']]
                        , 
                          ["amount" => $data['amount644'],
                          "title" => $data['title644']]
                        , 
                          ["amount" => $data['amount645'],
                          "title" => $data['title645']]
                          , 
                          ["amount" => $data['amount646'],
                          "title" => $data['title646']]
                          , 
                          ["amount" => $data['amount647'],
                          "title" => $data['title647']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set65']]
                        , 
                          ["amount" => $data['amount651'],
                          "title" => $data['title651']]
                        , 
                          ["amount" => $data['amount652'],
                          "title" => $data['title652']]
                        , 
                          ["amount" => $data['amount653'],
                          "title" => $data['title653']]
                        , 
                          ["amount" => $data['amount654'],
                          "title" => $data['title654']]
                        , 
                          ["amount" => $data['amount655'],
                          "title" => $data['title655']]
                          , 
                          ["amount" => $data['amount656'],
                          "title" => $data['title656']]
                          , 
                          ["amount" => $data['amount657'],
                          "title" => $data['title657']]
                    ]
                    ]

                    ]
                    ] , [
                    "bodyparts" => [ $data['bodyParts7'] ],
                    "sets" => [ [   
                        "workouts" => [   
                    
                          ["title" => $data['set71']]
                        , 
                          ["amount" => $data['amount711'],
                          "title" => $data['title711']]
                        , 
                          ["amount" => $data['amount712'],
                          "title" => $data['title712']]
                        , 
                          ["amount" => $data['amount713'],
                          "title" => $data['title713']]
                        , 
                          ["amount" => $data['amount714'],
                          "title" => $data['title714']]
                        , 
                          ["amount" => $data['amount715'],
                          "title" => $data['title715']]
                          , 
                          ["amount" => $data['amount716'],
                          "title" => $data['title716']]
                          , 
                          ["amount" => $data['amount717'],
                          "title" => $data['title717']]
                    ]
                    ] ,[
                        "workouts" => [   
                        
                          ["title" => $data['set72']]
                        , 
                          ["amount" => $data['amount721'],
                          "title" => $data['title721']]
                        , 
                          ["amount" => $data['amount722'],
                          "title" => $data['title722']]
                        , 
                          ["amount" => $data['amount723'],
                          "title" => $data['title723']]
                        , 
                          ["amount" => $data['amount724'],
                          "title" => $data['title724']]
                        , 
                          ["amount" => $data['amount725'],
                          "title" => $data['title725']]
                          , 
                          ["amount" => $data['amount726'],
                          "title" => $data['title726']]
                          , 
                          ["amount" => $data['amount727'],
                          "title" => $data['title727']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set73']]
                        , 
                          ["amount" => $data['amount731'],
                          "title" => $data['title731']]
                        , 
                          ["amount" => $data['amount732'],
                          "title" => $data['title732']]
                        , 
                          ["amount" => $data['amount733'],
                          "title" => $data['title733']]
                        , 
                          ["amount" => $data['amount734'],
                          "title" => $data['title734']]
                        , 
                          ["amount" => $data['amount735'],
                          "title" => $data['title735']]
                          , 
                          ["amount" => $data['amount736'],
                          "title" => $data['title736']]
                          , 
                          ["amount" => $data['amount737'],
                          "title" => $data['title737']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set74']]
                        , 
                          ["amount" => $data['amount741'],
                          "title" => $data['title731']]
                        , 
                          ["amount" => $data['amount742'],
                          "title" => $data['title742']]
                        , 
                          ["amount" => $data['amount743'],
                          "title" => $data['title743']]
                        , 
                          ["amount" => $data['amount744'],
                          "title" => $data['title744']]
                        , 
                          ["amount" => $data['amount745'],
                          "title" => $data['title745']]
                          , 
                          ["amount" => $data['amount746'],
                          "title" => $data['title746']]
                          , 
                          ["amount" => $data['amount747'],
                          "title" => $data['title747']]
                    ]
                    ],[
                        "workouts" => [   
                        
                          ["title" => $data['set75']]
                        , 
                          ["amount" => $data['amount751'],
                          "title" => $data['title751']]
                        , 
                          ["amount" => $data['amount752'],
                          "title" => $data['title752']]
                        , 
                          ["amount" => $data['amount753'],
                          "title" => $data['title753']]
                        , 
                          ["amount" => $data['amount754'],
                          "title" => $data['title754']]
                        , 
                          ["amount" => $data['amount755'],
                          "title" => $data['title755']]
                          , 
                          ["amount" => $data['amount756'],
                          "title" => $data['title756']]
                          , 
                          ["amount" => $data['amount757'],
                          "title" => $data['title757']]
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
