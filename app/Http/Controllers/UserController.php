<?php

namespace App\Http\Controllers;

use App\Models\competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $competitions = competition::where('admin_approval', true)->get();

        return view('user.index', compact('competitions'));
    }
    public function search()
    {
        $competitions=DB::table('competitions')->where('name', 'like', "%".request()->search."%")->get();

        return view('user.index', compact('competitions'));
    }
}
