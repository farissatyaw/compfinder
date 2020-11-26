@extends('layouts.app')

@section('dropdown-item')
<a href="/user/dashboard"class="dropdown-item">Find Competitions</a>
<a href="/user/competitions"class="dropdown-item">Registered Competitions</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @yield('body')
            </div>
        </div>
    </div>
</div>
@endsection
