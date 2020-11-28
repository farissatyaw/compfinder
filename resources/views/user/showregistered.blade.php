@extends('user.dashboard')

@section('body')
<div class="card-body">
        
        @forelse($registeredcompetitions as $comp)
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="heading{{$loop->index}}">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{$loop->index}}" aria-expanded="true" aria-controls="collapse{{$loop->index}}">
                    {{ucfirst($comp->name)}}
                    </button>
                </h2>
                </div>

                <div id="collapse{{$loop->index}}" class="collapse" aria-labelledby="heading{{$loop->index}}" data-parent="#accordionExample">
                <div class="card-body">
                    
                    <p>{{$comp->description}}</p>
                    @if(!is_null($pivots[$loop->index]->bukti_bayar))
                        <img src="/{{$pivots[$loop->index]->bukti_bayar}}" class="img-fluid">
                    @else
                    <form method="POST" action="/user/addbuktibayar" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mt-3">
                            <label for="bukti_bayar" class="col-md-4 col-form-label text-md-right">Photo</label>

                            <div class="col-md-6">
                                <input id="bukti_bayar" type="file" class="form-control @error('bukti_bayar') is-invalid @enderror" name="bukti_bayar" autofocus>
                    
                                @error('bukti_bayar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="competition_id" value="{{$comp->id}}">

                        <button class="btn btn-link">Submit</button>
                        @endif
                    </form>
                </div>
                </div>
            </div>
        </div>
        


        <!-- <div class="container border mb-3 d-flex justify-content-between">
            <h5 class="m-3">{{ucfirst($comp->name)}}</h5>
        </div> -->
        @empty
            No competitions yet
        @endforelse

    </div>
@endsection
