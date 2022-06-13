<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function check(Request $request)
    {
        try {
            //code...
            $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);

            $user = User::where('username', $request->username);

            if ($user->count() > 0) {
                if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
                    // if (Auth::user()->roles[0]->name == 'Seller') {
                    //     return redirect()->route('sellers.dashboard');
                    // } else {
                    //     return redirect()->route('home');
                    // }
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Login Success',
                        'redirect' => Auth::user()->roles[0]->name == 'Seller' ? route('sellers.dashboard') : route('home')
                    ], 302);
                } else {
                    return response()->json([
                        'errors' => [
                            'password' => ["Wrong password"]
                        ]
                    ], 422);
                }
            } else {
                return response()->json([
                    'errors' => [
                        'username' => ['Username has not registered']
                    ]
                ], 422);
            }
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
