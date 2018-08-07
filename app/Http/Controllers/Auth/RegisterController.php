<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create(array $data) {

//    	$token =$_POST['g-recaptcha-response'];
        
          $token = $_POST['g-recaptcha-response'];

          if ($token) {
          $client = new Client();
          $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
          'form_params' => array(
          'secret'    => '6LfWAGMUAAAAAMK9kurRasscFby_HxhAmTtwvYjl',
          'response'  => $token
          )
          ]);
          $results = json_decode($response->getBody()->getContents());

          if (!$results->success) {
          return redirect('/register');
          }
          # we know it was submitted
          } else {
          return redirect('/');
          }

         

//picture information

        $ext = "";
        $picture = $data["picture"];

        if ($picture) {
            $ext = strtolower($picture->getClientOriginalExtension());

            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif') {
                $ext = "";
            }
        } else {
            $ext = "";
        }

        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'gender' => $data['gender'],
                    'picture' => $ext,
        ]);
        /*
         ####----description insert information----###
         * 
         * 
          $str=$request->input('shortdes')."vfkjfkvckvckk".$request->input('specialdes')."vfkjfkvckvckk".$request->input('descrip');
          
          $dir= ceil($ids/5);
          
          Storage::put("files/$dir/$ids.txt",$str);
          
         */
    }

}
