<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class DashboardController extends Controller
{
  public function dashboard()
  {
    return view('BackEnd.dashboard.dashboard');
  }
  public function userList()
  {
      $users = User::all();
    return view('BackEnd.user.user-list', compact('users'));
  }
}
