<?php

namespace App\Http\Controllers;

use App\Models\competition;
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
        $this->validateCO();

        $competitions=competition::all();

        return view('co.index', compact('competitions'));
    }
    public function add()
    {
        $this->validateCO();

        return view('co.add');
    }
    public function create()
    {
        $validated=request()->validate([
            'name'=>'required',
            'description'=>'required',
            'startdate'=>'required',
            'enddate'=>'required'
        ]);
        competition::create([
            'name'=>$validated['name'],
            'co_id'=>auth()->user()->id,
            'description'=>$validated['description'],
            'start_date'=>$validated['startdate'],
            'end_date'=>$validated['enddate']

        ]);
        
        return redirect('/co/dashboard');
    }

    public function validateCO()
    {
        if (!auth()->user()->isCO) {
            return abort(401);
        }
    }
}
