<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
   
        public function __construct()
        {
            $this->middleware('auth');
        }

        public function verified()
        {
            $user = Auth::user();

            if ($user->usertype === config('constants.USER_TYPE_ADMIN')) {
                return view("admin.admin");
            } else {
                return view("dashboard");
            }
        }

}

