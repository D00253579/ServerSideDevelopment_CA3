<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class ShowUsersController extends Controller
{
    //
    public function index(){
        return view('auth.home')
        ->with('users',User::orderBy('updated_at', 'DESC')->get());
    }





}
