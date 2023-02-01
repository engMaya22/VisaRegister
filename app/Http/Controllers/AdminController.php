<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userInfo(){
        $users = User::with('visa','residencePrefernces')
                      ->has('visa')
                     ->where('role_id',User::USER)
                     ->get();
        return view('admin.users',compact('users'));
    }
}
