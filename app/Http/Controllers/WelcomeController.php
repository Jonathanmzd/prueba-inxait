<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        if ($totalUsers >= 5) {
            $randomUser = User::inRandomOrder()->first();
            return view('welcome', ['totalUsers' => $totalUsers, 'randomUser' => $randomUser]);
        } else {
            return view('welcome', ['totalUsers' => $totalUsers]);
        }
    }
}
