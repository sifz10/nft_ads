<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function create(Request $request)
    {
      return view('font.ads_create');
    }

    public function tageting(Request $request)
    {
      return view('font.targeting');
    }
    public function payments(Request $request)
    {
      return view('font.payment');
    }

    public function index(Request $request)
    {
      return view('font.ads.ads');
    }
}
