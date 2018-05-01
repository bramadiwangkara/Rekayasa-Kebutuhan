<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
      return view('admin.adminindex');
    }

    public function kelolabuku(){
      return view('admin.kelolabuku');
    }

    public function kelolapemustaka(){
      return view('admin.kelolapemustaka');
    }

    public function kelolapustakawan(){
      return view('admin.kelolapustakawan');
    }

    public function datapeminjaman(){
      return view('admin.datapeminjaman');
    }
}
