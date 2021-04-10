@extends('layouts.master')
@section('title', 'Sign up')

@section('content')
    <div class="hold-transition register-page">
        <div class="top-page">
            <!-- this is content -->
            <div class="register-box">
              <div class="card card-outline card-primary">
                <div class="card-header text-center">
                  <a href="#" class="h1"><b>Signup </b> accademic</a>
                </div>
                <div class="card-body">
                  <p class="login-box-msg">Register a new account</p>

                  <form action="signup" method="post">
                  @csrf <!-- {{ csrf_field() }} -->
                    <div class="input-group mb-3">
                      <input name="user" type="text" class="form-control" placeholder="User name">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-user"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input name="email" type="email" class="form-control" placeholder="Email">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input name="password" type="password" class="form-control" placeholder="Password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input name="re-password" type="password" class="form-control" placeholder="Retype password">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-8">
                        <div class="icheck-primary">
                          <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                          <label for="agreeTerms">
                          I agree to the <a href="#">terms</a>
                          </label>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                      </div>
                      <!-- /.col -->
                    </div>
                  </form>

                  <div class="social-auth-links text-center">                   
                    <a href="#" class="btn btn-block btn-danger">
                      <i class="fab fa-google-plus mr-2"></i>
                      Sign up using Google+
                    </a>
                  </div>

                  <a href="{{ url('login') }}" class="text-center">I already have a account</a>


                </div>
                <!-- /.form-box -->
              </div><!-- /.card -->
            </div>
            <!-- /.register-box -->
        </div>
   </div>
@stop

@if(session()->has('jsAlert'))
    <script>
        alert("{{ session()->get('jsAlert') }}");
    </script>
@endif 