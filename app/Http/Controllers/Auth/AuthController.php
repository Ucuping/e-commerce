<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function check(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username);

        if($user->count() > 0) {
            if(Auth::attempt(['usermane' => $request->username, 'password' => $request->password])){
                return response()->json([
                    'message' => 'Login success',
                    'redirect' => Auth::user()->roles[0]->name ==
                    'Partner' ? route('dashbord.partner') : route('dashboard')
                ]);
            }else {
                return response()->json([
                    'errors' => [
                        'password' => ["Wrong password"]
                    ]
                ], 422);
            }
        } else {
            return response()->json([
                'errors' => [
                    'username' => ['username has not registered']
                ]
                ], 422);
        }
    }

    public function register()
    {
        return view('auth.register');
    }
}
