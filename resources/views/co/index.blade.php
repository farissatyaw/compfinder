@extends('co.dashboard')

@section('body')
    <div class="card-body">
        
        @forelse($competitions as $comp)
        <div class="container border mb-3">
            <h5 class="m-3"><a href="/co/competitions/{{$comp->id}}">{{ucfirst($comp->name)}}</a></h5>
        </div>
        @empty
            No competitions yet
        @endforelse
        
    <a class="btn btn-primary" href="/co/competitions/add">New Competition</a>
    </div>
@endsection