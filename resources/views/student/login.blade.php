@extends('student.include.layout')
@section('content')

 <div class="login-box">
  <div class="login-logo">
      <a href="">
        <img src="{{asset('assets/img/logo.png')}}" width="40" alt="[school_name_logo]" class="brand-image">
        <b>Delhi Public School</b>
      </a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <div class="text-center">
                       <i class="far fa-user-circle" style="font-size: 60px;color: 253372;"></i>
                </div>
    <h4 class="login-box-msg">Student Login</h4>

      <form action="" method="post">
        <div class="form-group mb-2">
        <label for="email">Email</label>
        <div class="row">
        <div class="col-md-12 mt-1">
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        </div>
        </div>
        <div class="form-group mb-2">
        <label for="password">Password</label>
        <div class="row">
        <div class="col-md-12 mt-1">
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        </div>
        </div>
        <div class="form-group mb-2">
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-12 mt-1">
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt mr-2"></i>Sign In</button>
          </div>
          <!-- /.col -->
        </div>
       </div>
      </form>
      <div class="social-auth-links text-center mb-1">
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google mr-2"></i> Sign in using Google
        </a>
      </div>
      <p>
        <a href="forgot-password.html">Forget Password</a>
        <a style="float:right" href="forgot-password.html">Back To Homepage</a>
      </p>
    </div>
    <!-- /.login-card-body -->
    <div class="card-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-md btn-secondary" style="width:100%;"><i class="fas fa-user-plus mr-2"></i>Apply For Student Admission</a>
            </div>
            <!-- /.card-footer -->
  </div>
</div>
<!-- /.login-box -->
@endsection
