@extends('layouts.app')

@section('dropdown-item')
<a href="/co/dashboard"class="dropdown-item">Competitions</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Competitions</div>
                @yield('body')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
