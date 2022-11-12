<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use Auth;
use Image;

class AdsController extends Controller
{
    public function create(Request $request)
    {
      return view('font.ads_create');
    }

    public function tageting(Request $request)
    {
      $ads = Ads::findOrFail($request->id);
      return view('font.targeting', [
        'ads' => $ads,
      ]);
    }
    public function payments(Request $request)
    {
      $ads = Ads::findOrFail($request->id);
      return view('font.payment', [
        'ads' => $ads,
      ]);
    }

    public function index(Request $request)
    {
      $ads = Ads::get();
      return view('font.ads.ads', [
        'ads' => $ads,
      ]);
    }

    public function users_ads(Request $request)
    {
      $ads = Ads::where('user_id', Auth::id())->get();
      return view('font.ads.user_ads', [
        'ads' => $ads,
      ]);
    }

    public function ads_step_one(Request $request)
    {
      $request->validate([
        'ads_name' => 'required',
        'ads_title' => 'required',
        'ads_url' => 'required',
        'ads_price' => 'required',
        'ads_banner' => 'required',
        'ads_desc' => 'required',
        'ads_desc' => 'required',
      ]);
      $ads = new Ads;
      $ads->ads_id = uniqid();
      $ads->ads_name = $request->ads_name;
      $ads->user_id = Auth::id();
      $ads->ads_title = $request->ads_title;
      $ads->ads_url = $request->ads_url;
      $ads->ads_price = $request->ads_price;

      if($request->hasFile('ads_banner'))
      {
        $imageName = time().'.'.$request->ads_banner->extension();
        $path = $request->ads_banner->move('uploads/ads/', $imageName);
        Image::make($path)->fit(1170, 100)->save($path);
        $ads->ads_banner = $path;
      }
      $ads->ads_desc = $request->ads_desc;
      $ads->save();

      return redirect()->route('targeting.ads', ['id' => $ads->id]);
    }

    public function tageting_save(Request $request)
    {
      $request->validate([
        'ads_deaily_budget' => 'required',
      ]);
      $ads = Ads::findOrFail($request->id);
      if ($ads->ads_price < $request->ads_deaily_budget) {
        return back()->with('danger', 'Your daily budget is less then your total budget.');
      }
      $ads->ads_deaily_budget = $request->ads_deaily_budget;
      $ads->ads_deaily_clicks = $request->ads_deaily_clicks;
      $ads->ads_referral_code = $request->ads_referral_code;
      $ads->save();

      return redirect()->route('payments.ads', ['id' => $ads->id]);
    }

    public function payments_save(Request $request)
    {
      $ads = Ads::findOrFail($request->id);
      $ads->txHash = $request->hashtx;
      $ads->status = "Paid";
      $ads->save();

      return redirect('/ads/')->with('success', 'Your ads has been placed. You will see the progress soon.');
    }

    public function ads_approve(Request $request)
    {
      $ads = Ads::findOrFail($request->id);
      $ads->txHash = "Admin Approved";
      $ads->status = "Paid";
      $ads->save();

      return back()->with('success', 'You just approved an ad');
    }

    public function ads_stop(Request $request)
    {
      $ads = Ads::findOrFail($request->id);
      $ads->status = "Paused";
      $ads->save();

      return back()->with('success', 'You just paused a ad');
    }

    public function ads_details(Request $request)
    {
      $ads = Ads::findOrFail($request->id);
      return view('font.ads.details' , [
        'ads' => $ads,
      ]);
    }

    public function nft_ads_api(Request $request)
    {
      $ads = Ads::get(['ads_title', 'ads_url', 'ads_banner', 'ads_id']);
      $total_ads = $ads->count();
      $array_ads = json_decode($ads);

      $random_number = rand(0, $total_ads-1);
      return $array_ads[$random_number];
    }

    public function ads_codes(Request $request)
    {
      return view('font.code.ads');
    }
}
