@extends('user.dashboard')

@section('body')
<div class="card-body">
        
        @forelse($competitions as $comp)
        <div class="container border mb-3 d-flex justify-content-between">
            <h5 class="m-3">{{ucfirst($comp->name)}}</h5>
            <form method="POST" action="/user/register">
                @csrf
                <input type="hidden" name="competition_id" value="{{$comp->id}}">
                <button class="btn btn-primary">Register</button>
            </form>
            
        </div>
        @empty
            No competitions yet
        @endforelse

    </div>
@endsection
