<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      return view('welcome');
    }

    public function about()
    {
      return view('about');
    }

    public function bibliography()
    {
      return view('bibliography');
    }

    public function documentation()
    {
      return view('documentation');
    }
}
