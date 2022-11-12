<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use App\Models\Click;

class ClickController extends Controller
{
    public function clicks(Request $request)
    {
      $ads = Ads::where('ads_id', $request->ads_id)->first();
      $last_day = Click::where('ads_id', $request->ads_id)->latest('created_at')->first();
      if (!empty($last_day)) {
        if ($last_day->created_at < today()) {
          // echo "Create new because today is bigger then tommorrow";
          Click::create([
            'ads_id' => $request->ads_id,
            'ads_click' => 1,
            'ads_view' => 1,
            'user_id' => $ads->user_id,
          ]);
        }else {
          // echo "Update Click by one because Today is the day";
          Click::where('ads_id', $request->ads_id)->where('created_at', '>', today())->update([
            'ads_click' => $last_day->ads_click + 1,
          ]);
        }
      }else{
        // echo "Create new because there was no record";
        Click::create([
          'ads_id' => $request->ads_id,
          'ads_click' => 1,
          'ads_view' => 1,
          'user_id' => $ads->user_id,
        ]);
      }
      return redirect($ads->ads_url);
    }
}
