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

        $competitions=competition::where('co_id', auth()->user()->id)->get();

        return view('co.index', compact('competitions'));
    }

    public function show(competition $competition)
    {
        $registeredusers = [];
        $this->validateCO();
        for ($i=0; $i <count($competition->pivot) ; $i++) {
            $registeredusers[$i]=$competition->pivot[$i]->users;
        }
        return view('co.show', compact('competition', 'registeredusers'));
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
        $path= 'storage' . substr(request()->file('poster')->store('public/poster'), 6);
        $comp=competition::create([
            'name'=>$validated['name'],
            'poster'=>$path,
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
