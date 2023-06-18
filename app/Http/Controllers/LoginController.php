<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //show login page
    public function index(){
        return view('login');
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }

    public function forgotPassword(){
        return view('auth.forgot-password');
    }

    public function resetPassword(Request $request){
        $email = $request->email;
        return view('auth.reset-password', compact('email'));
    }

    public function resetPassowrdStore(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'new_password' => 'required',
        ]);

        if ($request->password != $request->new_password) {
            return redirect()->back()->with('error', 'Password and Confirm Password does not match');
        }
        $user = User::where('email', $request->email)->first();
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/');
    }
}
