<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeshboardController extends Controller
{
    public function index()
    {
        $data=[];
        $data['Type']=Auth::users()->type;
        return view('deshboard',$data);
    }
}
