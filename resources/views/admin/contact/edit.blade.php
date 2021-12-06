
@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Update Contract Contract</div>
                        <div class="card-body">
                            <form action="{{ route('admin.contact.update', $contacts -> id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="contact" class="form-label">Update Contact Email</label>
                                  <input type="email" value="{{ $contacts -> email }}" class="form-control" id="contact" name="email" placeholder="Contact Email" >
                                  @error('email')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <label for="contact" class="form-label">Update Phone Number</label>
                                    <input type="number" value="{{ $contacts -> phone }}" class="form-control" id="contact" name="phone" placeholder="Contact Number" >
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                <div class="form-group">
                                    <label for="contact">Update Contact Address</label>
                                    <textarea class="form-control" name="address" placeholder="contact address....." rows="3">{{ $contacts -> address }}</textarea>
                                    @error('address')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Add Contact</button>
                              </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection