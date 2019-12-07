<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//renomear Request pois Request é um metodo do laravel
use App\Request as Requet;

class HomeController extends Controller
{
    public function index()
    {
      $req = Requet::all();
      return view('home',compact('req'));
    }
}
