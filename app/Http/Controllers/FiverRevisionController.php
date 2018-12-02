<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class FiverRevisionController extends Controller
{
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
     public function index(Request $request, Response $response)
     {
        return view("fiver_revision");
     }

    /**
     * @param Request $data
     * @param Response $response
     * @return mixed
     */
    public function view(Request $data,Response $response)
    {
        $data = array();
        $data['allrevition'] = DB::table('fiver_revisions')->get();
        return view("fiver_revision", $data);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function insert(Request $request, Response $response)
      {
          
        $validatedData = request()->validate(['revision_type' => 'required']);
        $arr = array(
        "revision_type" => $request->input("revision_type"),
        );
        DB::table("fiver_revisions")->insert($arr);
        return redirect('fiver_revision');
      }
}
