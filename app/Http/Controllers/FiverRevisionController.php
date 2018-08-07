<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class FiverRevisionController extends Controller
{
     public function index(){
        return view("fiver_revision");
     
       
    }
      public function view(Request $data){
         $data = array();
        $data['allrevition'] = DB::table('fiver_revisions')->get();
        return view("fiver_revision", $data);
    }
    
    
      public function insert(Request $request){
          
        $validatedData = request()->validate(
            [
                'revision_type' => 'required',
              
    ]);

    $arr = array(
        "revision_type" => $request->input("revision_type"),
        
    );
    DB::table("fiver_revisions")->insert($arr);
   // $id = DB::table("products")->insertGetId($arr);
    return redirect('fiver_revision');  

    }
}
