<?php

namespace App\Http\Controllers;

use App\Mail\RegisterSuccess;
use App\Models\competition;
use App\Models\RegisteredUser;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule as ValidationRule;

class RegisteredUserController extends Controller
{
    public function add()
    {
        $user=auth()->user();
        
        $validated=request()->validate([
            'competition_id'=>'required'
        ]);
        $temp=RegisteredUser::where('user_id', $user->id)->where('competition_id', $validated['competition_id'])->get();
        if (isset($temp)) {
            return redirect()->back()->with('message', 'Already Registered');
        }

        $competition = competition::find($validated['competition_id']);

        RegisteredUser::create([
            'user_id' => $user->id,
            'competition_id'=>$validated['competition_id']
        ]);

        Mail::to($user->email)
            ->send(new RegisterSuccess($user, $competition));

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
