@extends('user.dashboard')

@section('body')
<div class="card-body">
        
        @forelse($registeredcompetitions as $comp)
        <div class="container border mb-3 d-flex justify-content-between">
            <h5 class="m-3">{{ucfirst($comp->name)}}</h5>
        </div>
        @empty
            No competitions yet
        @endforelse

    </div>
@endsection
