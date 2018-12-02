<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class FiverGigsController extends Controller
{

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function index (Request $request, Response $response)
    {
        $data = array();
        $data['allcat'] = DB::table('fiver_categories')->get();
        $data['allsubcat'] = DB::table('fiver_subcategories')->get();
        $data['allservice'] = DB::table('fiver_servicetypes')->get();
        $data['allgigmetadata'] = DB::table('fiver_gig_metadatas')->get();
        $data['allsearch'] = DB::table('fiver_searchtags')->get();
        return view('fiver_gigs', $data);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function insert (Request $request, Response $response)
    {
        $arr = array(
            "categories_id" => $request->input("category"),
            "subcategories_id" => $request->input("subcategory"),
            "service_id" => $request->input("service"),
            "gigmetadata_id" => $request->input("gigmetadata"),
        );

        $id = DB::table("fiver_gigs")->insertGetId($arr);

        if ($id) {
            $str = $request->input("gigs_title");
            Storage::put("files/$id.txt", $str);
            return redirect('fiver_gigs_prissing');
        }
    }

}

//#############---Multiple description ar data file e insert korer code below#######################
//            $str = $request->input("descr1") . "fdksajfi&^%^%GHJG&^TGBJHG&^T" . $request->input("descr2") . "fdksajfi&^%^%GHJG&^TGBJHG&^T" . $request->input("descr3") . "fdksajfi&^%^%GHJG&^TGBJHG&^T" . $request->input("descr4");
//            $dir = ceil($id / 5);
//
//            Storage::put("files/$dir/$id.txt", $str);


