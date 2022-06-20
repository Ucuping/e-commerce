<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

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
                    //     return redirect()->route('seller.dashboard');
                    // } else {
                    //     return redirect()->route('home');
                    // }
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Login Success',
                        'redirect' => Auth::user()->roles[0]->name == 'Seller' ? route('seller.dashboard') : route('home')
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

    public function checkRegister(Request $request)
    {
        try {

            $customer = null;
            $seller = null;

            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'username' => 'required|unique:users',
                'email' => 'required|unique:users',
                'password' => 'required|confirmed',
                'role' => 'required'
            ]);

            if ($request->role == 'Customer') {
                $customer = Customer::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'created_at' => Carbon::now(),
                ]);
            } else {
                $seller = Seller::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'created_at' => Carbon::now(),
                ]);
            }

            User::create([
                'customer_id' => $customer != null ? $customer->id : null,
                'seller_id' => $seller != null ? $seller->id : null,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => Carbon::now(),
            ])->assignRole($request->role);

            return response()->json([
                'status' => 'success',
                'message' => 'Register Success',
                'redirect' => route('auth.login')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'trace' => $e->getTrace()
            ], 500);
        }
    }
}
