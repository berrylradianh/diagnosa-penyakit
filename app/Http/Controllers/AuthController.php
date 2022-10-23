<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // TODO: do user authentication

        // TODO: check user is exist
        $user = User::firstWhere('email', $request->email);
        if (!blank($user)) {
            // TODO: check password is valid
            if (password_verify($request->password, $user->password)) {
                // TODO: set authenticated user
                // Auth::attempt($user->toArray());
                Auth::attempt($request->only('email', 'password'));

                session($user->toArray());

                // TODO: chek user role
                return $user->role == 'admin'
                    ? to_route('dashboard-admin')
                    : to_route('dashboard-user');
            }

            return back()->with('failed', 'Wrong password');
        }

        return back()->with('failed', 'User or password does not match!');
    }

    public function register(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user == true) {
            session()->flash('success', ' Email sudah pernah terdaftar, silakan Login!');
            return redirect('login');
        } else {
            User::create([
                'name' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'petani'
            ]);
            return redirect('login');
        }
    }
}
