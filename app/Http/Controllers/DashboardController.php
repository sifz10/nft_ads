<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use App\Models\Click;
use Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $ads = Ads::where('user_id', Auth::id())->get();
      return view('dashboard', [
        'ads' => $ads,
      ]);
    }
}
