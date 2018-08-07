<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;




class FiverProjectWorkDurationController extends Controller
{
   public function index(){
        return view("fiver_project_work");
     
       
    }
      public function view(Request $data){
         $data = array();
        $data['allprojectend'] = DB::table('fiver_project_work_durations')->get();
        return view("fiver_project_work", $data);
    }
    
    
      public function insert(Request $request){
          
        $validatedData = request()->validate(
            [
                'ending_time' => 'required',
              
    ]);

    $arr = array(
        "ending_time" => $request->input("ending_time"),
        
    );
    DB::table("fiver_project_work_durations")->insert($arr);
   // $id = DB::table("products")->insertGetId($arr);
    return redirect('fiver_project_work');  

    }
}
