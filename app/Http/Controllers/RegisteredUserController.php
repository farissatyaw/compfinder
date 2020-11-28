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
    public function addbuktibayar()
    {
        $pivot=RegisteredUser::where('competition_id', request()->competition_id)->first();

        $path= 'storage' . substr(request()->file('bukti_bayar')->store('public/buktibayar'), 6);
        $pivot->bukti_bayar= $path;
        $pivot->save();
        
        return redirect()->back();
    }

    public function index()
    {
        $registeredcompetitions=[];

        $pivots=RegisteredUser::where('user_id', auth()->user()->id)->get();

        for ($i=0; $i <count($pivots) ; $i++) {
            $registeredcompetitions[$i]=$pivots[$i]->competition;
        }


        return view('user.showregistered', compact('registeredcompetitions', 'pivots'));
    }
}
