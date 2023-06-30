@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Registration</div>
                  <div class="card-body">
  
                      <form action="{{ route('registerstore') }}" method="post">
                         @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name"  >
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="email" id="email_address" class="form-control" name="email"  >
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                                  
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" >
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="confirm_password" class="form-control" name="confirm_password" >
                                  @if ($errors->has('confirm_password'))
                                      <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="phone" class="col-md-4 col-form-label text-md-right">Phone_Number</label>
                              <div class="col-md-6">
                                  <input type="number" id="phone" class="form-control" name="phone" >
                                  @if ($errors->has('phone'))
                                      <span class="text-danger">{{ $errors->first('phone') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="dob" class="col-md-4 col-form-label text-md-right">Date_of_Birth</label>
                              <div class="col-md-6">
                                  <input type="date" id="dob" class="form-control" name="dob" >
                                  @if ($errors->has('dob'))
                                      <span class="text-danger">{{ $errors->first('dob') }}</span>
                                  @endif
                              </div>
                          </div>
  
                         
  
                        <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
