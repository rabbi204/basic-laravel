
@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
                            </div>
                        @endif
                        <div class="card-header">
                            <strong>All Slider</strong>
                            <a href="{{ route('add.slider') }}" class="btn btn-primary btn-sm float-right d-inline">Add Slider</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">SL No</th>
                                    <th scope="col">Slider Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Slider Image</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <th scope="row">{{ $loop -> index + 1 }}</th>
                                            <td>{{ $slider -> title }}</td>
                                            <td >{{ $slider -> desc }}</td>
                                            <td><img src="{{ asset($slider -> image) }}" style="height: 43px; width:62px;" alt="brand logo"></td>
                                            <td>
                                                <a href="{{ route('slider.edit', $slider -> id) }}" class="btn btn-sm btn-warning d-inline">Edit</a>
                                                <a href="{{ route('slider.delete', $slider -> id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-sm btn-danger d-inline">Delete</a>
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
