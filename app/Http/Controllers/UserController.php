<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Socialmedia;
use App\Models\Ads;
use Image;

class UserController extends Controller
{
    public function index(Request $request)
    {
      $users = User::get();
      return view('font.users.index', [
        'users' => $users,
      ]);
    }

    public function show_user(Request $request)
    {
      $user = User::findOrFail($request->id);
      return view('font.users.show', [
        'user' => $user,
      ]);
    }

    public function ads_by_user(Request $request)
    {
      $ads = Ads::where('user_id', $request->id)->get();
      return view('font.ads.ads', [
        'ads' => $ads,
      ]);
    }

    public function edit(Request $request)
    {
      $user = User::find($request->id);
      return view('font.users.edit', [
        'user' => $user,
      ]);
    }

    public function update(Request $request)
    {
      $request->validate([
        'name' => 'required',
      ]);

      $data = User::find($request->user_id);
      $data->name = $request->name;

      if($request->hasFile('avatar'))
      {
          $imageName = time().'.'.$request->avatar->extension();
          $path = $request->avatar->move('uploads/avatars', $imageName);
          Image::make($path)->fit(400, 400)->save($path);
          $data->profile_picture = $path;
          $oldFile = $data->avatar;
          !is_null($oldFile) && Storage::delete($oldFile);
      }
      $social = $this->save_social($request, $data);
      $data->socialmedia()->save($social);
      $data->save();

      return back()->with('success', 'Your profile has been updated');
    }

    public function save_social($request, $user)
    {
        $checking = Socialmedia::where('user_id', $request->user_id)->first();
        $social = $user->socialmedia;
        $social->wallet = $request->wallet;
        $social->facebook_link = $request->facebook_link;
        $social->instagram_link = $request->instagram_link;
        $social->twitter_link = $request->twitter_link;

        return $social;
    }

    public function blocked(Request $request)
    {
      $user = User::find($request->id);
      if ($user->user_blocked == 0) {
        $user->user_blocked = 1;
      }else {
        $user->user_blocked = 0;
      }
      $user->save();
      return back()->with('success', 'You just change a users account status.');
    }
}
