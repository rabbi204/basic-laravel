
@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <button class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
                            </div>
                        @endif
                        <div class="card-header">
                            All About
                            <a class="btn btn-sm btn-primary float-right" href="{{ route('add.about') }}">Add About</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">SL No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Short Description</th>
                                    <th scope="col">Long Description</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abouts as $about)
                                        <tr>
                                            <th scope="row">{{ $loop -> index + 1 }}</th>
                                            <td>{{ $about -> title }}</td>
                                            <td>{{ $about -> short_desc }}</td>
                                            <td>{{ $about -> long_desc }}</td>
                                            <td>
                                                <a href="{{ route('about.edit', $about -> id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="{{ route('about.delete', $about -> id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection