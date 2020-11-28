@extends('layouts.dashboard')

@section('content')
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Competition Official Name</th>
            <th scope="col">Description</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Admin Approval</th>
            </tr>
        </thead>
        <tbody>
    @foreach($competitions as $comp)       
            <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$comp->name}}</td>
            <td>{{$comp->official->name}}</td>
            <td>{{$comp->description}}</td>
            <td>{{$comp->start_date}}</td>
            <td>{{$comp->end_date}}</td>
            <td>
                @if($comp->admin_approval==false)
                <form method="POST" action="/admin/competitions/verify">
                    @csrf
                    <input type="hidden" name="comp_id" value="{{$comp->id}}">
                    <button type="submit" class="btn btn-light">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
                    </svg>
                    </button>
                </form>
                @else
                    Already Verified
                @endif
            </td>
            </tr>
    @endforeach
    </tbody>
    </table>
@endsection
