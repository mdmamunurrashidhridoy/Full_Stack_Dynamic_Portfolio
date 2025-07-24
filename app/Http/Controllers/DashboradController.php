<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboradController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user(); // Gets the currently logged-in user

        return view("admin.dashboard", [
            'user' => $user
        ]);
    }
}
