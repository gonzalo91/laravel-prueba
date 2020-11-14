<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        header("Access-Control-Allow-Origin: *");
        return response()->json([
            'error' => false,
            'data' => User::with('addresses')->get()
        ], 200);

    }
}
