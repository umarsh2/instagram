@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create A New Post') }}</div>

                <div class="card-body">
                    <form method="post" action="{{url('/p')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="name" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row pt-3">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Post Image') }}</label>
                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" required autofocus>

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                        

                       

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add New Post') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
