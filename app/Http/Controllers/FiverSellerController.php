<?php

namespace App\Http\Controllers;
use http\Env\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FiverSellerController extends Controller
{
    /**
     * @param Request $request
     * @param Response $response
     * @return mixed
     */
    public function index(Request $request, Response $response)
    {
        $data = array();
        $data['allcat'] = DB::table('fiver_categories')->get();
        $data['allsubcat'] = DB::table('fiver_subcategories')->get();
        $data['allproduct'] = DB::table('fiver_product_types')->get();
        $data['alldelivery'] = DB::table('fiver_delivery_durations')->get();
        $data['allsearch'] = DB::table('fiver_searchtags')->get();
        return view("fiver_seller_post", $data);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function insert(Request $request)
    {

        $ext = "";
        $picture = $request["picture"];
        if ($picture) {
                 $ext=strtolower($picture->getClientOriginalExtension());

            if ($ext !='jpg' && $ext !='png' && $ext !='jpeg' && $ext !='gif'){
                $ext = "";
            }
        } else {
            $ext = "";
        }


        $arr = array(
            "sell_title"=>$request->input("gigs_title"),
            "categories_id" =>$request->input("category"),
            "subcategories_id" =>$request->input("subcategory"),
            "product_type_id" =>$request->input("product"),
            "delivery_duratin_id" =>$request->input("delivery"),
            "users_id" =>$request->input("users_id"),
            "date"=>$request->input("mydate"),
            "selling_price" =>$request->input("price"),
            "file_upload"=>$ext,
        );
        $id = DB::table("fiver_sellers")->insertGetId($arr);
        if($id){
             if($ext) {
                $picture = $request->file("picture");
                $picture->move("public/seller_images","$id.$ext");
            }
         return redirect('fiver_seller_post');  
        }
    }
    public function view(){
        $data=array();
        return view("fiver_buyer_request",$data);
    }
}
