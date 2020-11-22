@extends('co.dashboard')

@section('body')
    <div class="card-body">
        <div class="container border mb-3">
        @forelse($competitions as $comp)
            <h5 class="m-3">{{ucfirst($comp->name)}}</h5>
        @empty

        @endforelse
        </div>
    <a class="btn btn-primary" href="/co/competitions/add">New Competition</a>
    </div>
@endsection