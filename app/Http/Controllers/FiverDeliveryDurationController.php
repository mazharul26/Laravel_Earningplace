<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class FiverDeliveryDurationController extends Controller
{
   public function index(){
        return view("fiver_delivery_duration");
     
       
    }
      public function view(Request $data){
         $data = array();
        $data['alldelivery'] = DB::table('fiver_delivery_durations')->get();
        return view("fiver_delivery_duration", $data);
    }
    
    
      public function insert(Request $request){
          
        $validatedData = request()->validate(
            [
                'delivery_time' => 'required',
              
    ]);

    $arr = array(
        "delivery_time" => $request->input("delivery_time"),
        
    );
    DB::table("fiver_delivery_durations")->insert($arr);
   // $id = DB::table("products")->insertGetId($arr);
    return redirect('fiver_delivery_duration');  

    }
}
