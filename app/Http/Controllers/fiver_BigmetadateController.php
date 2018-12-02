<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class fiver_BigmetadateController extends Controller
{
    /**
     * @return mixed
     */
    public function index ()
    {

        $data = array();
        $data['allsubcat'] = DB::table('fiver_subcategories')->get();
        $data['allgigmeta'] = DB::table('fiver_gig_metadatas')
            ->select("fiver_gig_metadatas.id",
                "fiver_gig_metadatas.metadata_name",
                "fiver_gig_metadatas.subcategories_id",
                "fiver_subcategories.subcat_name")
            ->join("fiver_subcategories", "fiver_subcategories.id", "=", "fiver_gig_metadatas.subcategories_id")
            ->get();
        return view("fiver_gigmetadata", $data);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function insert (Request $request)
    {

        $validatedData = request()->validate(
            ['metadata_name' => 'required',
            ]);
        $arr = array(
            "metadata_name" => $request->input("metadata_name"),
            "subcategories_id" => $request->input("subcategory_name"),
        );
        DB::table("fiver_gig_metadatas")->insert($arr);
        return redirect('fiver_gigmetadata');
    }
}
