@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h3>Post A Photo For Your Followers</h3>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                    <input
                        id="caption"
                        type="text"
                        class="form-control @error('caption') is-invalid @enderror"
                        name="caption"
                        value="{{ old('caption') }}"
                        autocomplete="caption"
                        autofocus
                    >

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Photo</label>
                    <input type="file" class="form-control-file" name="image" id="image" >
                    @error('image')
                            <strong class="pt-2">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row pt-3 justify-content-end">
                    <button class="btn pl-3 pr-3 btn-primary">
                        Post Photo Now
                    </button>
                </div>
        </div>
    </form>
</div>
@endsection
