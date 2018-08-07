<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fiver_category extends Model
{
   public function index(){
        return view('fiver_category');
    }
}
