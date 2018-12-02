<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FiverServicetypeController extends Controller {

    public function index() {
        $data = array();
        $data['allsubcat'] = DB::table('fiver_subcategories')->get();
        
        $data["allservice"] = DB::table("fiver_servicetypes")
                ->select("fiver_servicetypes.id", "fiver_servicetypes.service_name", "fiver_servicetypes.subcategories_id", "fiver_subcategories.subcat_name")
                ->join("fiver_subcategories", "fiver_subcategories.id", "=", "fiver_servicetypes.subcategories_id")
                ->get();

        return view('fiver_service', $data);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function insert(Request $request)
    {
        $validatedData = request()->validate(
                ['service_name' => 'required']);
        $arr = array(
            "service_name" => $request->input("service_name"),
            "subcategories_id" => $request->input("subcategory_name")
           );
        DB::table("fiver_servicetypes")->insert($arr);
        return redirect('fiver_service');
    }
}
