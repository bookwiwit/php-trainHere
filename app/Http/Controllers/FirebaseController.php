<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use App\Http\Controllers\RegisterCon;
use Session;

class FirebaseController extends Controller
{
    /**
     * Store a newly data to firebase realtime database
     *
     * @param  string  $key
     * @param  array $data
     * @return string key
     */
	
	public function push($key, $data) {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/modal-82ed6-firebase-adminsdk-xjhls-fff96667b6.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
        $database = $firebase->getDatabase();
        $ref = $database->getReference($key)->push($data);

        return $ref->getKey();
    }

    public function querySnapshot($key){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/modal-82ed6-firebase-adminsdk-xjhls-fff96667b6.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

        
        $database = $firebase->getDatabase();

        // $k = $database->getReference($key)->push()->getKey();
        $key2 = array_keys($database->getReference($key)->getSnapshot()->getValue());

        $ref = $database->getReference($key)->getSnapshot()->getValue();

        // dd($key.$k);
        Session::put('key2', $key2);
        Session::put('ref', $ref); 

        // echo $ref;
        
          
        }


    public function deleteData($key, $key2){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/modal-82ed6-firebase-adminsdk-xjhls-fff96667b6.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
        
         $database = $firebase->getDatabase();

         $ref = $database->getReference($key.$key2)->remove();
        }
    

    public function updateData($key, $key2, $data ){
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/modal-82ed6-firebase-adminsdk-xjhls-fff96667b6.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
        
         $database = $firebase->getDatabase();

         

         $ref = $database->getReference($key.$key2)->update($data);
        }

    
    }


