<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index(){
    	return view('user.index');
    }

    function profil(){
    	return view('user.profil');
    }

    function listBook(){
    	return view('user.listBook');
    }

    function detailBook(){
    	return view('user.detailBook');
    }
}
