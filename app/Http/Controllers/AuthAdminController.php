<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AuthAdminController extends Controller
{
    public function loginAdmin()
    {
        return view('loginAdmin');
    }
    public function loginPostAdmin(Request $request)
    {
        $this->validate($request, [
            'userID' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'emailAdmin' => $request->userID,
        ];

        $admin = Admin::where('userID', $credentials['emailAdmin'])->first();
        $admins = DB::table('employee')->where('userID', $request->userID)->first();

        if ($admin === null) {
            return redirect('/login')->with('error', 'Invalid member credentials.');
        }

        if ($request->password === $admin->password) {
            return view('/homeAdmin', compact('admins'))->with('success', 'Login berhasil!');

        } else {
            return redirect('/login')->with('error', 'Invalid password.');
        }
    }
    public function logoutAdmin()
    {
        Auth::logoutAdmin();
        return redirect()->route('loginAdmin');
    }
}
