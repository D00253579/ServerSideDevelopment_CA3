<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */

   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.home')
        ->with('users',User::orderBy('updated_at', 'DESC')->get());
    }
}
