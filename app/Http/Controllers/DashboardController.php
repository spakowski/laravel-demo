<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(){
    //dd(Post::all());
    return view ('layout.master');
  }
}
