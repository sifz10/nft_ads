<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Image;

class SettingController extends Controller
{
    public function settings_index(Request $request)
    {
      $settings = Setting::first();
      // dd($settings);
      return view('font.settings.index', [
        'settings' => $settings,
      ]);
    }

    public function settings_save(Request $request)
    {
      $settings = Setting::findOrFail(1);
      $settings->site_name = $request->sitename;
      $settings->meta_title = $request->meta_title;
      $settings->meta_desc = $request->meta_desc;
      $settings->tutorial_link = $request->tutorial_link;
      if($request->hasFile('favicons'))
      {
          $imageName = time().'.'.$request->favicons->extension();
          $path = $request->favicons->move('uploads/favicons', $imageName);
          Image::make($path)->save($path);
          $settings->favicons = $path;
      }
      if($request->hasFile('logo'))
      {
          $logo_name = time().'.'.$request->logo->extension();
          $logopath = $request->logo->move('uploads/logo', $logo_name);
          Image::make($logopath)->save($logopath);
          $settings->logo = $logopath;
      }
      $settings->save();
      return back()->with('success', 'You just updated your settings');
    }
}
