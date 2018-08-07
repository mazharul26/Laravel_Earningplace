<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('deshboard');
    }
    
    

        public function general(){
             $data = array();
        $data['allgigsprossing'] = DB::table('fiver_gigs_prissings')
                ->select("fiver_gigs_prissings.id",
                        "fiver_gigs_prissings.basic_title",
                        "fiver_gigs_prissings.delivery_id",
                        "fiver_gigs_prissings.transcription",
                         "fiver_gigs_prissings.picture",
                           "fiver_gigs_prissings.views",
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
        return view('general', $data);
//        return view('general');
    }
    
    public function details(Request $request){
        
        $data=array();
       $data['alldelivery'] = DB::table('fiver_delivery_durations')->get();
      $data['allrevition'] = DB::table('fiver_revisions')->get();
       $data['allgigsprising'] =DB::table('fiver_gigs_prissings')->select("*")->where(array("id" =>$request->id))->first();
        return view("fiver_details",$data);
    }
    
    public function gigs_view(){
        $views=array();
            $views['allgigsprossing'] = DB::table('fiver_gigs_prissings')
                ->select("fiver_gigs_prissings.id",
                        "fiver_gigs_prissings.basic_title",
                        "fiver_gigs_prissings.delivery_id",
                        "fiver_gigs_prissings.transcription",
                         "fiver_gigs_prissings.picture",
                        "fiver_gigs_prissings.views",
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
        return view("fiver_gigs_views_me",$views);
    }
}
