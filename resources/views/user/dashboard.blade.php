@extends('layouts.app')

@section('searchbar')
<form class="form-inline search-form" action="/user/search" method="GET">
<div class="input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-search"></i></span>
    </div>
    <input type="text" name="search" class="form-control" placeholder="I am looking for.." />
    <div class="input-group-append"><button class="btn btn-light" type="button">Search </button></div>
</div>  
</form>
@endsection

@section('dropdown-item')
<a href="/user/dashboard"class="dropdown-item">Find Competitions</a>
<a href="/user/competitions"class="dropdown-item">Registered Competitions</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card" style="width:36rem;">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @yield('body')
            </div>
        </div>
    </div>
</div>
@endsection
