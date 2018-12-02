<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class FiverDeliveryDurationController extends Controller
{
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
   public function index(Request $request, Response $response)
   {
        return view("fiver_delivery_duration");
     
   }

    /**
     * @param Request $data
     * @return mixed
     */

      public function view(Request $data)
      {
         $data = array();
         $data['alldelivery'] = DB::table('fiver_delivery_durations')->get();
         return view("fiver_delivery_duration", $data);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function insert(Request $request, Response $response)
    {
          
        $validatedData = request()->validate(['delivery_time' => 'required',]);
        $arr = array(
        "delivery_time" => $request->input("delivery_time"),
        );
    DB::table("fiver_delivery_durations")->insert($arr);
    return redirect('fiver_delivery_duration');
    }
}
