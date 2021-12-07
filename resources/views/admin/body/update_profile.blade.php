@extends('admin.admin_master')
@section('admin')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>User Profile</h2>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
            </div>
        @endif
        <form action="{{ route('update.user.profile') }}" method="POST" class="form-pill">
            @csrf
            <div class="form-group">
                <label for="">User Name</label>
                <input type="text" name="name" value="{{ $user['name'] }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">User Email</label>
                <input type="email" name="email" value="{{ $user['email'] }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-default">Update</button>
        </form>
    </div>
</div>

@endsection