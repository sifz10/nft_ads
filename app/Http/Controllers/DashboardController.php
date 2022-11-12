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
      $day_today_click = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now())->sum('ads_click');
      $day_one_click = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(1))->sum('ads_click');
      $day_two_click = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(2))->sum('ads_click');
      $day_three_click = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(3))->sum('ads_click');
      $day_four_click = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(4))->sum('ads_click');
      $day_five_click = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(5))->sum('ads_click');
      $day_six_click = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(6))->sum('ads_click');
      $day_seven_click = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(7))->sum('ads_click');
      $day_eight_click = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(8))->sum('ads_click');
      $day_nine_click = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(9))->sum('ads_click');

      $day_today_view = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now())->sum('ads_view');
      $day_one_view = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(1))->sum('ads_view');
      $day_two_view = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(2))->sum('ads_view');
      $day_three_view = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(3))->sum('ads_view');
      $day_four_view = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(4))->sum('ads_view');
      $day_five_view = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(5))->sum('ads_view');
      $day_six_view = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(6))->sum('ads_view');
      $day_seven_view = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(7))->sum('ads_view');
      $day_eight_view = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(8))->sum('ads_view');
      $day_nine_view = Click::where('user_id', Auth::id())->whereDate('created_at', Carbon::now()->subDays(9))->sum('ads_view');
      return view('dashboard', [
        'ads' => $ads,
        'day_today_click' => $day_today_click,
        'day_one_click' => $day_one_click,
        'day_two_click' => $day_two_click,
        'day_three_click' => $day_three_click,
        'day_four_click' => $day_four_click,
        'day_five_click' => $day_five_click,
        'day_six_click' => $day_six_click,
        'day_seven_click' => $day_seven_click,
        'day_eight_click' => $day_eight_click,
        'day_nine_click' => $day_nine_click,

        'day_today_view' => $day_today_view,
        'day_one_view' => $day_one_view,
        'day_two_view' => $day_two_view,
        'day_three_view' => $day_three_view,
        'day_four_view' => $day_four_view,
        'day_five_view' => $day_five_view,
        'day_six_view' => $day_six_view,
        'day_seven_view' => $day_seven_view,
        'day_eight_view' => $day_eight_view,
        'day_nine_view' => $day_nine_view,
      ]);
    }
}
