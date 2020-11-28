@extends('user.dashboard')

@section('body')
<div class="card-body">
        <form action="/user/search" method="GET">
            <div class="form-group row">
                <label for="search" class="col-md-4 col-form-label text-md-right">Search bar</label>

                <div class="col-md-6">
                    <input id="search" type="text" class="form-control @error('search') is-invalid @enderror" name="search" value="{{ old('search') }}" required autocomplete="search" autofocus>

                    @error('search')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                         </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            
        </form>
        
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
