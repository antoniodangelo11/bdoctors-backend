<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $doctors = User::select('id', 'first_name', 'last_name')
            ->with('profile', 'profile.typologies')
            ->get();

        return response($doctors, 200);
    }
}
