<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;

class authController extends Controller
{
    public function login()
    {
        return view('main.login');
    }

    public function registration()
    {
        return  view('main.registration');
    }
    public function userProfil()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', Session::get('loginId'))->first();
        }

        return  view('main.user-profil', compact('data'));
    }
    public function logOut()
    {
        Session::forget('loginId');
        
        return  redirect('/');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]);

        $users = User::where('email','=',$request->email)->first();

        if ($users) {
            if(Hash::check($request->password,$users->password))
            {
                $request->session()->put('loginId', $users->id);
                return redirect('/user-profil');
            }else{
                return back()->with('fail', 'Password not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }

        return redirect('/registration')->with('success','Blog Create successfully,');
    }
}
