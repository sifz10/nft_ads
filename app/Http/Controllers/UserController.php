<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
      $users = User::get();
      return view('font.users.index', [
        'users' => $users,
      ]);
    }
}
