<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
      return view('index');
    }

    public function listbook(){
      return view('listbook');
    }

    public function detailbook(){
      return view('detailbook');
    }
}
