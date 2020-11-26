@extends('layouts.app')

@section('dropdown-item')

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
