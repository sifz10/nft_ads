<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Socialmedia;
use Illuminate\Support\Facades\Storage;
use Auth;
use Image;

class SocialmediaController extends Controller
{
    public function update(Request $request)
    {
      $request->validate([
        'name' => 'required',
      ]);

      $data = User::find(Auth::id());
      $data->name = $request->name;

      if($request->hasFile('avatar'))
      {
          $imageName = time().'.'.$request->avatar->extension();
          $path = $request->avatar->move('uploads/avatars', $imageName);
          Image::make($path)->fit(400, 400)->save($path);
          $data->profile_picture = $path;
          $oldFile = Auth::user()->avatar;
          !is_null($oldFile) && Storage::delete($oldFile);
      }
      $social = $this->save_social($request);
      $data->socialmedia()->save($social);
      $data->save();

      return back()->with('success', 'Your profile has been updated');
    }

    public function save_social($request)
    {
      $checking = Socialmedia::where('user_id', Auth::id())->first();
      if (!empty($checking)) {
        $social = Auth::user()->socialmedia;
        $social->wallet = $request->wallet;
        $social->facebook_link = $request->facebook_link;
        $social->instagram_link = $request->instagram_link;
        $social->twitter_link = $request->twitter_link;
      }else {
        $social = new Socialmedia;
        $social->wallet = $request->wallet;
        $social->facebook_link = $request->facebook_link;
        $social->instagram_link = $request->instagram_link;
        $social->twitter_link = $request->twitter_link;
      }
      return $social;
    }
}
