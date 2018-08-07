<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FiverGigsPrissingController extends Controller {

    public function index() {
        $data = array();
        $data['alldelivery'] = DB::table('fiver_delivery_durations')->get();
        $data['allrevition'] = DB::table('fiver_revisions')->get();
        return view("fiver_gigs_prissing", $data);
    }

    public function insert(Request $request) {
//        $validatedData = request()->validate(
//                [
//                    'basic_title' => 'required',
//                    'delivery_id' => 'required',
//                    'page_number' => 'required',
//                    'picture' => 'required',
//                    'customization' => 'required',
//                    'transmition' => 'required',
//                    'upload' => 'required',
//                    'product' => 'required',
//                    'product_number' => 'required',
//                    'price' => 'required',
//        ]);


        $ext = "";
        $picture = $request["picture"];

        if ($picture) {
                 $ext = strtolower($picture->getClientOriginalExtension());

            if ($ext != 'jpg' && $ext !='png' && $ext !='jpeg' && $ext !='gif'){
                $ext = "";
            }
        } else {
            $ext = "";
        }




        $arr = array(
            "basic_title" => $request->input("basic_title"),
            "delivery_id" => $request->input("delivery_id"),
            "number_pages" => $request->input("page_number"),
            "designcustomization" => $request->input("customization"),
            "transcription" => $request->input("transmition"),
            "contentupload" => $request->input("upload"),
            "product_number" => $request->input("product_number"),
            "revision_id" => $request->input("revition_id"),
            "price" => $request->input("price"),
            "picture"=> $ext,
        );

//     dd($request);
//        die();
        $id = DB::table("fiver_gigs_prissings")->insertGetId($arr);
        if($id){
          $str = $request->input("gigs_description");
             Storage::put("files1/$id.txt", $str);
         if($ext) {
                $picture = $request->file("picture");
                $picture->move("public/images1","$id.$ext");
            }
            
        return redirect('fiver_gigs_prissing');
        
        }
    }

}
