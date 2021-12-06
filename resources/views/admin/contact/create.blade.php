
@extends('admin.admin_master')
@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Create Contract</div>
                        <div class="card-body">
                            <form action="{{ route('store.contact') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="contact" class="form-label">Contact Email</label>
                                  <input type="email" class="form-control" id="contact" name="email" placeholder="Contact Email" >
                                  @error('email')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <label for="contact" class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" id="contact" name="phone" placeholder="Contact Number" >
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                <div class="form-group">
                                    <label for="contact">Contact Address</label>
                                    <textarea class="form-control" name="address" placeholder="contact address....." rows="3"></textarea>
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