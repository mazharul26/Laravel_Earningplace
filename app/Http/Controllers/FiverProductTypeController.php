<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FiverProductTypeController extends Controller
{
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function index(Request $request, Response $response)
    {
        $data = array();
        $data['allservice'] = DB::table('fiver_servicetypes')->get();
        $data['allproduct']=DB::table('fiver_product_types')
           ->select("fiver_product_types.id","fiver_product_types.product_name","fiver_product_types.servicetype_id","fiver_servicetypes.service_name")  
           ->join("fiver_servicetypes","fiver_servicetypes.id","=","fiver_product_types.servicetype_id")
           ->get();
        return view("fiver_product_type", $data);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function insert(Request $request,Response $response)
    {
        $validatedData = request()->validate(['product_name' => 'required']);
        $arr = array(
            "product_name" => $request->input("product_name"),
            "servicetype_id" => $request->input("service_id"),
        );
        DB::table("fiver_product_types")->insert($arr);
        return redirect('fiver_product_type');
    }
}
