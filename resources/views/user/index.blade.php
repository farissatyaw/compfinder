@extends('user.dashboard')

@section('body')
<div class="card-body">
        @forelse($competitions as $comp)
        <div class="container border mb-3 d-flex justify-content-between">
            <h5 class="m-3">{{ucfirst($comp->name)}}</a></h5>
            <form method="POST" action="/user/register">
                @csrf
                <input type="hidden" name="competition_id" value="{{$comp->id}}">
                <button class="btn btn-primary m-2">Register</button>
            </form>
           
        </div>
        @if(session('message'))
                <p class="text-danger">{{session('message')}}</p>
        @endif
        @empty
            No competitions
        @endforelse

    </div>
@endsection
