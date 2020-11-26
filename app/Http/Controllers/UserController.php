<?php

namespace App\Http\Controllers;

use App\Models\competition;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        if (auth()->user()->isCO) {
            abort(401);
        }

        $competitions = competition::all();
        return view('user.index', compact('competitions'));
    }
}
