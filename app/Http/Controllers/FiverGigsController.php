<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class FiverGigsController extends Controller {

    public function index() {
        $data = array();
        $data['allcat'] = DB::table('fiver_categories')->get();
        $data['allsubcat'] = DB::table('fiver_subcategories')->get();
        $data['allservice'] = DB::table('fiver_servicetypes')->get();
        $data['allgigmetadata'] = DB::table('fiver_gig_metadatas')->get();
        $data['allsearch'] = DB::table('fiver_searchtags')->get();
        
        return view('fiver_gigs', $data);
    }

    public function insert(Request $request) {

        $arr = array(
           "categories_id"=>$request->input("category"),
            "subcategories_id"=>$request->input("subcategory"),
            "service_id" =>$request->input("service"),
            "gigmetadata_id" =>$request->input("gigmetadata"),
        );

//         dd($request);
//        print_r($arr);
//       die();
        //     DB::table("fiver_gigs")->insertGetId($arr);

        $id = DB::table("fiver_gigs")->insertGetId($arr);
//         die();
//        if ($id) {
//           $multiple= $request->input("search");
//           
//          foreach($multiple as $allsearch){
//                $sql = array(
//                    "gigs_id"=>$id,
//                    "searchtag"=>$allsearch
//   //                DB::table("fiver_searchtag_details")->insert($sql);             );

//            }
//        }
  if ($id) {
            $str = $request->input("gigs_title");

            Storage::put("files/$id.txt", $str);


            //#############---Multiple description ar data file e insert korer code below#######################
//            $str = $request->input("descr1") . "fdksajfi&^%^%GHJG&^TGBJHG&^T" . $request->input("descr2") . "fdksajfi&^%^%GHJG&^TGBJHG&^T" . $request->input("descr3") . "fdksajfi&^%^%GHJG&^TGBJHG&^T" . $request->input("descr4");
//            $dir = ceil($id / 5);
//
//            Storage::put("files/$dir/$id.txt", $str);
            return redirect('fiver_gigs_prissing');
        }
    }

}
