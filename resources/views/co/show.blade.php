@extends('co.dashboard')

@section('body')
    <div class="card-body">
        @if($competition->admin_approval==1)
        Status : Verified
        @else
        Status : Unverified
        @endif
    {{$competition}}
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">NIK</th>
            <th scope="col">Company</th>
            <th scope="col">Payment</th>
            </tr>
        </thead>
        <tbody>
    @foreach($registeredusers as $user)
        <tr>
            <td scope="col">{{$loop->index+1}}</td>
            <td scope="col">{{$user->name}}</td>
            <td scope="col">{{$user->email}}</td>
            <td scope="col">{{$user->NIK}}</td>
            <td scope="col">{{$user->company}}</td>
            <td scope="col">
            @if($user->pivot[0]->bukti_bayar)
            <a href="/{{$user->pivot[0]->bukti_bayar}}">Click here to view</a>
            @else
            Not Yet Paid
            @endif
            </td>
            </tr>
    @endforeach
        </tbody>
    </table>
    </div>
@endsection