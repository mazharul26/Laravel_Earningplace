<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FiverMasterController extends Controller {

    public function index() {
        return view('master');
    }

    public function slider() {
        return view('fiver_slider');
    }

    public function about() {
        return view('fiver_about');
    }

    public function freelancerplace() {

        $data = array();
        $data['allgigsprossing'] = DB::table('fiver_gigs_prissings')
                ->select("fiver_gigs_prissings.id",
                        "fiver_gigs_prissings.basic_title",
                        "fiver_gigs_prissings.delivery_id",
                        "fiver_gigs_prissings.transcription",
                         "fiver_gigs_prissings.picture",
                        "fiver_gigs_prissings.designcustomization",
                        "fiver_gigs_prissings.contentupload",
                        "fiver_gigs_prissings.product_number",
                       "fiver_gigs_prissings.revision_id",
                       "fiver_revisions.revision_type",
                      "fiver_delivery_durations.delivery_time",
                        "fiver_gigs_prissings.price")
           ->join("fiver_delivery_durations","fiver_delivery_durations.id","=","fiver_gigs_prissings.delivery_id")
           ->join("fiver_revisions","fiver_revisions.id","=","fiver_gigs_prissings.revision_id")
           ->get();
        return view('fiver_news', $data);
    }

    public function contact() {
        return view('fiver_contact');
    }

    public function status() {
        return view('fiver_status');
    }

    public function gellary() {
        return view('fiver_gellary');
    }

}

//  " fiver_gigs_prissings.number_pages ",
//                   "fiver_gigs_prissings.picture",
//                   "fiver_gigs_prissings.delivery_id",
//                   "fiver_gigs_prissings.revision_id",
//                   "fiver_gigs_prissings.transcription",
//                   "fiver_gigs_prissings.designcustomizatio",
//                   "fiver_gigs_prissings.contentupload ",
//                   "fiver_gigs_prissings.product_number",