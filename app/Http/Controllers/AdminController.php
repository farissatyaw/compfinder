<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        $credentials =  request()->only('username', 'password');

        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        } else {
            return back()->withErrors(['field_name' => ['Login Gagal']]);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
    public function competitionsindex()
    {
        $competitions = competition::orderBy('admin_approval')->get();

        return view('admin.competitions', compact('competitions'));
    }
    public function verifycompetition()
    {
        $comp=competition::find(request()->comp_id);
        
        $comp->admin_approval=1;
        $comp->save();

        return redirect()->back();
    }
}
