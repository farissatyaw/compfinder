<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class COController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (!auth()->user()->isCO) {
            abort(401);
        }

        return view('co.dashboard');
    }
}
