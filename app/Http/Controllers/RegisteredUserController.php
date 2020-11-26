<?php

namespace App\Http\Controllers;

use App\Models\RegisteredUser;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function add()
    {
        $validated=request()->validate([
            'competition_id'=>'required'
        ]);

        RegisteredUser::create([
            'user_id' => auth()->user()->id,
            'competition_id'=>$validated['competition_id']
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $registeredcompetitions=[];

        $pivots=RegisteredUser::where('user_id', auth()->user()->id)->get();

        for ($i=0; $i <count($pivots) ; $i++) {
            $registeredcompetitions[$i]=$pivots[$i]->competition;
        }


        return view('user.showregistered', compact('registeredcompetitions'));
    }
}
