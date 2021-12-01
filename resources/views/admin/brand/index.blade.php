
@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
                            </div>
                        @endif
                        <div class="card-header">
                            All Brand
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">SL No</th>
                                    <th scope="col">Brand Name</th>
                                    <th scope="col">Brand Image</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <th scope="row">{{ $brands -> firstItem() + $loop -> index }}</th>
                                            <td>{{ $brand -> brand_name }}</td>
                                            <td><img src="{{ asset($brand -> brand_image) }}" style="height: 43px; width:62px;" alt="brand logo"></td>
                                            <td>
                                                @if ($brand -> created_at == NULL)
                                                    <span class="text-danger">No Date Set</span>
                                                    @else
                                                    {{ $brand -> created_at -> diffForHumans() }}
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('brand.edit', $brand -> id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="{{ route('brand.delete', $brand -> id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                              {{ $brands -> links() }}
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Brand</div>
                        <div class="card-body">
                            <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label for="brand" class="form-label">Brand Name</label>
                                  <input type="text" class="form-control" id="brand" name="brand_name" aria-describedby="emailHelp">
                                  @error('brand_name')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                  <label for="brand" class="form-label">Brand Image</label>
                                  <input type="file" class="form-control" id="brand" name="brand_image" aria-describedby="emailHelp">
                                  @error('brand_image')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Add Brand</button>
                              </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection