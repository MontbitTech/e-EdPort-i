@extends('teacher.include.layout')
@section('content')

<div class="container">
  <div class="row">
    <div class="teacher-register-box">
      <div class="register-logo">
        <a href="">
          <img src="{{asset('assets/img/logo.png')}}" width="40" alt="[school_name_logo]" class="brand-image">
          <b>Delhi Public School</b>
        </a>
      </div>

      <div class="card">
        <div class="card-body register-card-body">
          <h4 class="login-box-msg">Teacher Registration</h4>

          <form action="" method="post">
            <div class="card-body pb-0">

              <div class="form-group">

                <div class="row">
                  <div class="col-md-6 mt-1">
                    <label for="select_name">Full Name</label>
                    <input type="text" class="form-control" id="select_name" placeholder="Full Name">
                  </div>
                  <div class="col-md-6 mt-1">
                    <label for="select_dob">Email</label>
                    <input type="email" class="form-control" id="select_name" placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="form-group">

                <div class="row">
                  <div class="col-md-6 mt-1">
                    <label for="select_dob">Mobile No.</label>
                    <input type="text" class="form-control" id="select_name" placeholder="Mobile No.">
                  </div>
                  <div class="col-md-6 mt-1">
                    <label for="select_dob">D.O.B</label>
                    <input type="date" class="form-control" id="select_name" placeholder="D.O.B">
                  </div>
                </div>
              </div>
              <div class="form-group">

                <div class="row">

                  <div class="col-md-6 mt-1">
                    <label for="select_dob">Gender</label>
                    <div class="row mt-2">
                      <div class="col-md-6">

                        <label class="form-check-label" for="male">
                          <input type="radio" id="male" name="radio1">
                          Male
                        </label>
                      </div>
                      <div class="col-md-6">

                        <label class="form-check-label" for="female">
                          <input type="radio" id="female" name="radio1">
                          Female
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mt-1">
                    <label for="select_address">Address</label>
                    <textarea class="form-control" id="select_address" rows="2" placeholder="Enter ..."></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="select_dob">Highest Education Detail</label>
                <div class="row">
                  <div class="col-md-6 mt-1">
                    <label for="select_dob" class="form-check-label">Qualification</label>
                    <input type="text" class="form-control" id="select_name" placeholder="Qualification">
                  </div>
                  <div class="col-md-6 mt-1">
                    <label for="select_dob" class="form-check-label">Institute</label>
                    <input type="text" class="form-control" id="select_name" placeholder="Institute">
                  </div>
                </div>
              </div>

              <div class="form-group">

                <div class="row">
                  <div class="col-md-6 mt-1">
                    <label for="exampleInputFile">Document</label>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Government ID</label>
                    </div>
                  </div>

                </div>
              </div>
              <div class="form-group">
                <label for="select_dob">Language Proficiency</label>
                <div class="row">
                  <div class="col-md-6 mt-1">
                    <label for="select_dob">English</label>
                    <div class="row mt-2">
                      <div class="col-md-4">

                        <label class="form-check-label" for="cb1">
                          <input type="radio" id="cb1" name="language1">
                          Beginner
                        </label>
                      </div>
                      <div class="col-md-4">

                        <label class="form-check-label" for="cb2">
                          <input type="radio" id="cb2" name="language1">
                          Advanced
                        </label>
                      </div>
                      <div class="col-md-4">

                        <label class="form-check-label" for="cb3">
                          <input type="radio" id="cb3" name="language1">
                          Intermediate
                        </label>
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6">
                    <select class="form-control w-100 select1">
                      <option selected>Select The Regional Language</option>
                      <option value="1">Hindi</option>
                      <option value="2">Marathi</option>
                      <option value="3">Tamil</option>
                    </select>
                    <div class="row mt-2">
                      <div class="col-md-4">

                        <label class="form-check-label" for="cb4">
                          <input type="radio" id="cb4" name="language2">
                          Beginner
                        </label>
                      </div>
                      <div class="col-md-4">

                        <label class="form-check-label" for="cb5">
                          <input type="radio" id="cb5" name="language2">
                          Advanced
                        </label>
                      </div>
                      <div class="col-md-4">

                        <label class="form-check-label" for="cb6">
                          <input type="radio" id="cb6" name="language2">
                          Intermediate
                        </label>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Declaration</label>
                <div class="col-12 mt-1">

                  <label for="checkboxSuccess1" class="form-check-label">
                    <input type="checkbox" id="checkboxSuccess1">
                    The information provided in this form is correct to the best of my knowledge.
                  </label>
                </div>
                <div class="col-12 mt-1">

                  <label for="checkboxSuccess2" class="form-check-label">
                    <input type="checkbox" id="checkboxSuccess2">
                    In case of any information furnished by me is found to be incorrect, the school
                    has the right to take any action it deems fit,
                    including expulsion at anytime after admission.
                  </label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-12 mt-2">
          <button type="submit" class="btn btn-info btn-lg m-auto btn-block" style="width:100px">Submit</button>
        </div>
        <a href="login.html" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
  </div>
</div>
@endsection