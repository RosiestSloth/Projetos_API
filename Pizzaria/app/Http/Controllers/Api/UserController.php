<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::orderBy('id', 'DESC')->get();

        return response()->json([
            'status' => true,
            'users' => $users,
        ], 200);
    }
}
