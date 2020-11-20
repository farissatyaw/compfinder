<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login()
    {
        $admin=Admin::where('username', request()->username)->first();
        if ($admin->password===Hash::make(request()->password)) {
            return redirect('/dashboard/admin');
        } else {
            return redirect()->back()->withMessage('Login Failed');
        }
    }
}
