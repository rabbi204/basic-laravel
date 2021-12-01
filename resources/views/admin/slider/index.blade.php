
@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <a href="{{ route('add.slider') }}" class="btn btn-primary btn-sm">Add Slider</a>
                <div class="col-md-12">
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
                            </div>
                        @endif
                        <div class="card-header">
                            All Slider
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col" width="5%">SL No</th>
                                    <th scope="col" width="15%">Slider Title</th>
                                    <th scope="col" width="15%">Description</th>
                                    <th scope="col" width="15%">Slider Image</th>
                                    <th scope="col" width="15%">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <th scope="row">{{ $loop -> index + 1 }}</th>
                                            <td>{{ $slider -> title }}</td>
                                            <td>{{ $slider -> description }}</td>
                                            <td><img src="{{ asset($slider -> image) }}" style="height: 43px; width:62px;" alt="brand logo"></td>                                       
                                            <td>
                                                <a href="{{ route('brand.edit', $slider -> id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="{{ route('brand.delete', $slider -> id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                              {{--  {{ $sliders -> links() }}  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection