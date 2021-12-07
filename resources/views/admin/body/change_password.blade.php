@extends('admin.admin_master')
@section('admin')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Change Password</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('password.update') }}" method="POST" class="form-pill">
            @csrf
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" name="old_password" class="form-control" id="current_password" placeholder="current password">
                @error('old_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="new password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="confirm password">
                @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-default">Save</button>
        </form>
    </div>
</div>

@endsection