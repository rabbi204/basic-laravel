
@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Create About Us</div>
                        <div class="card-body">
                            <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label for="about" class="form-label">Title</label>
                                  <input type="text" class="form-control" id="about" name="title" >
                                  @error('title')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <label for="about">Short Description</label>
                                    <textarea class="form-control" name="short_desc" placeholder="short description....." rows="3"></textarea>
                                    @error('short_desc')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="about">Long Description</label>
                                    <textarea class="form-control" name="long_desc" placeholder="long description....." rows="3"></textarea>
                                    @error('short_desc')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Add About Us</button>
                              </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection