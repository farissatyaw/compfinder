@extends('co.dashboard')

@section('body')
    <div class="card-body">
        <form method="POST" action="/co/competitions/add" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                    <div class="col-md-6">
                        <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="form-group row mt-3">
                    <label for="poster" class="col-md-4 col-form-label text-md-right">Photo</label>

                    <div class="col-md-6">
                        <input id="poster" type="file" class="form-control @error('poster') is-invalid @enderror" name="poster" autofocus>
                    
                        @error('poster')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="startdate" class="col-md-4 col-form-label text-md-right">Start Date</label>

                    <div class="col-md-6">
                        <input id="startdate" type="date" class="form-control @error('startdate') is-invalid @enderror" name="startdate" value="{{ old('startdate') }}" required autocomplete="startdate" autofocus>

                            @error('startdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="form-group row">
                    <label for="enddate" class="col-md-4 col-form-label text-md-right">End Date</label>

                    <div class="col-md-6">
                        <input id="enddate" type="date" class="form-control @error('enddate') is-invalid @enderror" name="enddate" value="{{ old('enddate') }}" required autocomplete="enddate" autofocus>

                            @error('enddate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>

                <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection