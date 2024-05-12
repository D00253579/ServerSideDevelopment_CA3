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
        ->with('users',User::orderBy('name', 'ASC')->get());
    }
    public function edit($name){
        return view('auth.edit')
        ->with ('user',User::where('name',$name)->first());
    }
    public function update(Request $request, $name)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::where('name', $name)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
                
            ]);
            
            return redirect('auth.home');
    }
    public function destroy($name){
        
        $name=User::where('name',$name);
        $name->delete();
            return redirect('auth.home');
    }
}
