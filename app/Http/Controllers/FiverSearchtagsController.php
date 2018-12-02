<?php
namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class FiverSearchtagsController extends Controller
{
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function index(Request $request, Response $response)
    {
        return view("fiver_searchtags");
    }

    /**
     * @param Request $data
     * @param Response $response
     * @return mixed
     */
    public function view(Request $data,Response $response)
    {
         $data = array();
         $data['allsearch'] = DB::table('fiver_searchtags')->get();
         return view("fiver_searchtags", $data);
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
        DB::table("fiver_searchtags")->insert($arr);
        return redirect('fiver_searchtags');
    }
}
