
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
                            Contact Data
                            <a class="btn btn-sm btn-primary float-right" href="{{ route('admin.add.contact') }}">Add Contact</a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">SL No</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <th scope="row">{{ $loop -> index + 1 }}</th>
                                            <td>{{ $contact -> address }}</td>
                                            <td>{{ $contact -> email }}</td>
                                            <td>{{ $contact -> phone }}</td>
                                            <td>
                                                <a href="{{ route('admin.contact.edit', $contact -> id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="{{ route('admin.contact.delete', $contact -> id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-sm btn-danger">Delete</a>
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