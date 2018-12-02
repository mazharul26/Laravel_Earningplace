<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class Fiverr_categoryController extends Controller
{
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function index(Request $request, Response $response)
    {
        return view('fiver_category');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */

    public function view(Request $request, Response $response)
    {
        $data = array();
        $data['allcat'] = DB::table('fiver_categories')->get();
        return view("fiver_category", $data);
    }

    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function insert(Request $request, Response $response)
    {
        $validatedData = request()->validate(['name' => 'required']);
        $arr = array(
            "name" => $request->input("name"),
        );
        DB::table("fiver_categories")->insert($arr);
        return redirect('fiver_category');
    }
}
