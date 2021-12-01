
@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Brand</div>
                        <div class="card-body">
                            <form action="{{ route('brand.update', $brands -> id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label for="brand" class="form-label">Update brand Name</label>
                                  <input type="text" class="form-control" id="brand" name="brand_name" aria-describedby="emailHelp" value="{{ $brands -> brand_name }}">
                                  @error('brand_name')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="brand" class="form-label">Update brand Image</label>
                                  <input type="file" class="form-control" id="brand" name="brand_image" aria-describedby="emailHelp">
                                  <br>
                                  <input type="hidden" name="old_image" value="{{ $brands -> brand_image }}">
                                  @error('brand_image')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <img src="{{ asset($brands -> brand_image) }}" style="width: 400px; height:200px" alt="">
                                </div>

                                <button type="submit" class="btn btn-primary">Update brand</button>
                              </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
