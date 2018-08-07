<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;



class FiverSearchtagsController extends Controller
{
    public function index(){
        return view("fiver_searchtags");
     
       
    }
    public function view(Request $data){
         $data = array();
        $data['allsearch'] = DB::table('fiver_searchtags')->get();
        return view("fiver_searchtags", $data);
    }

        public function insert(Request $request){
        $validatedData = request()->validate(
            [
                'name' => 'required',
              
    ]);

    $arr = array(
        "name" => $request->input("name"),
        
    );
    DB::table("fiver_searchtags")->insert($arr);
   // $id = DB::table("products")->insertGetId($arr);
    return redirect('fiver_searchtags');  

    }
}
