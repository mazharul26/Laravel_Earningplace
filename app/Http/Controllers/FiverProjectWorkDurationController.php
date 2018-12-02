<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;




class FiverProjectWorkDurationController extends Controller
{
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
   public function index(Request $request, Response $response)
   {
        return view("fiver_project_work");
     
       
    }

    /**
     * @param Request $data
     * @param Response $response
     * @return mixed
     */
    public function view(Request $data, Response $response)
      {
         $data = array();
         $data['allprojectend'] = DB::table('fiver_project_work_durations')->get();
         return view("fiver_project_work", $data);
      }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function insert(Request $request, Response $response)
      {
          $validatedData = request()->validate(['ending_time' => 'required']);

          $arr = array("ending_time" => $request->input("ending_time"));
          DB::table("fiver_project_work_durations")->insert($arr);
          return redirect('fiver_project_work');
      }
}
