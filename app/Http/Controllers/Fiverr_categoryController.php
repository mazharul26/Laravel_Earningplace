<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class Fiverr_categoryController extends Controller
{
    public function index(){
        return view('fiver_category');
    }
       public function view(){
        $data = array();
        $data['allcat'] = DB::table('fiver_categories')->get();
        return view("fiver_category", $data);
        
//        $data=[];
//        $data['subcat']=DB::table('fiver_subcategory')->get();
//        return view('fiver_subcategory');
        
    }
    public function insert(Request $request) {
        $validatedData = request()->validate(
                [
                    'name' => 'required',
                  
        ]);

        $arr = array(
            "name" => $request->input("name"),
            
        );
        DB::table("fiver_categories")->insert($arr);
       // $id = DB::table("products")->insertGetId($arr);
        return redirect('fiver_category');     
    }
}
