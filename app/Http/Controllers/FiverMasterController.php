<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FiverMasterController extends Controller
{

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function index(Request $request, Response $response)
    {
        return view('master');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */

    public function slider( Request $request, Response $response)
    {
        return view('fiver_slider');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */

    public function about(Request $request, Response $response)
    {
        return view('fiver_about');
    }

    /**
     * @param Data $data
     * @param Response $response
     * @return mixed
     */

    public function freelancerplace(Data $data, Response $response)
    {
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

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */

    public function contact(Request $request, Response $response)
    {
        return view('fiver_contact');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */

    public function status(Request $request, Response $response)
    {
        return view('fiver_status');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */

    public function gellary(Request $request, Response $response)
    {
        return view('fiver_gellary');
    }

}

