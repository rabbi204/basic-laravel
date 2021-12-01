
@extends('admin.admin_master')
@section('admin')
<div class="py-12">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">Update Slider</div>
                    <div class="card-body">
                        <form action="{{ route('slider.update', $sliders -> id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="slider" class="form-label">Update Slider Title</label>
                              <input type="text" class="form-control" id="slider" name="title" value="{{ $sliders -> title }}">
                              @error('title')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Update Slider Description</label>
                                <textarea class="form-control" name="desc" placeholder="description....." rows="3">{{ $sliders -> desc }}</textarea>
                            </div>

                            <div class="form-group">
                              <label for="slider" class="form-label">Update Slider Image</label>
                              <input type="file" class="form-control" id="slider" name="image">
                              <br>
                              <input type="hidden" name="old_image" value="{{ $sliders -> image }}">
                              @error('image')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group">
                                <img src="{{ asset($sliders -> image) }}" style="width: 400px; height:200px" alt="">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Slider</button>
                          </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
