<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FiverSubcategoryController extends Controller {

    public function index() {

        $data = array();
        $data['allcat'] = DB::table('fiver_categories')->get();
        
        $data['allsubcat']=DB::table('fiver_subcategories')
           ->select("fiver_subcategories.id","fiver_subcategories.subcat_name","fiver_subcategories.categories_id","fiver_categories.name")  
           ->join("fiver_categories","fiver_categories.id","=","fiver_subcategories.categories_id")
           ->get();
        
        return view("fiver_subcategory", $data);
    }

    public function view() {
        
    }

    public function insert(Request $request) {
        $validatedData = request()->validate(
                [
                    'subcat_name' => 'required',
        ]);
        $arr = array(
            "subcat_name" => $request->input("subcat_name"),
            "categories_id" => $request->input("category_name"),
        );
        DB::table("fiver_subcategories")->insert($arr);
   
        return redirect('fiver_subcategory');
    }

}
