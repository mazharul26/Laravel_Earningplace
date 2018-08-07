<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FiverProductTypeController extends Controller {

    public function index() {

        $data = array();
        $data['allservice'] = DB::table('fiver_servicetypes')->get();

        
        $data['allproduct']=DB::table('fiver_product_types')
           ->select("fiver_product_types.id","fiver_product_types.product_name","fiver_product_types.servicetype_id","fiver_servicetypes.service_name")  
           ->join("fiver_servicetypes","fiver_servicetypes.id","=","fiver_product_types.servicetype_id")
           ->get();
        
        return view("fiver_product_type", $data);
    }

    public function insert(Request $request) {
        $validatedData = request()->validate(
                [
                    'product_name' => 'required',
        ]);
        $arr = array(
            "product_name" => $request->input("product_name"),
            "servicetype_id" => $request->input("service_id"),
        );
        DB::table("fiver_product_types")->insert($arr);

        return redirect('fiver_product_type');
    }

}
