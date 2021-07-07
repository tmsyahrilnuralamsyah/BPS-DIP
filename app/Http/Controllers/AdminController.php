<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['showLogin', 'doLogin']);
    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect(route('admindashboard'));
        } else {
            return redirect(route('adminlogin'))->with('info', 'username atau password salah.')->withInput();
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('adminlogin'));
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
