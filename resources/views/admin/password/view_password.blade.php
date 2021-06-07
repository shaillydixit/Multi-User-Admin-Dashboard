@extends('admin.admin_master')
@section('admin')

<div class="row" style="padding: 20px;">
<div class="col-md-6">
<h4>Change Password</h4>
<form action="{{route('admin.password.update')}}" method="post" >
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Current Password</label>
    <input type="password" name="oldpassword" id="current_password" type="password" class="form-control">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">New Password</label>
  <input type="password" name="password" id="password" type="password" class="form-control">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
  <input type="password" name="password_confirmation" id="password_confirmation" type="password" class="form-control">
  </div>
  
  <button type="submit" class="btn btn-primary">Update Password</button>
</form>
</div>
</div>


@endsection