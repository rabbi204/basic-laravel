
@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update About Us</div>
                        <div class="card-body">
                            <form action="{{ route('about.update', $abouts ->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="about" class="form-label">Update Title</label>
                                  <input type="text" class="form-control" id="about" name="title" value="{{ $abouts -> title }}" >
                                  @error('title')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <label for="about">Update Short Description</label>
                                    <textarea class="form-control" name="short_desc" placeholder="short description....." rows="4">{{ $abouts -> short_desc }}</textarea>
                                    @error('short_desc')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="about">Update Long Description</label>
                                    <textarea class="form-control" name="long_desc" placeholder="long description....." rows="8">{{ $abouts -> long_desc }}</textarea>
                                    @error('short_desc')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Update About Us</button>
                              </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection