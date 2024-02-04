<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function userlogin(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect('/admin-eventdescription');
            }

            return back()->withErrors(['email' => 'Invalid login credentials.']);
        }

        return view('admin.login');
    }

    public function userregister(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'password' => 'required|min:6',

            ]);
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->is_admin = true;
            $user->save();

            Auth::login($user);
            return redirect('/admin-login');
        }

        return view('admin.register');
    }

    public function adminloginpage(Request $request)
    {

        return view('backend.auth.login');
    }
    public function userlogout()
    {
        Auth::logout();

        return redirect('/'); 
    }

}
