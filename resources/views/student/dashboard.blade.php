@extends('student.include.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <!-- small box -->
          <div class="small-box bg-info ">
            <div class="inner">
              <h4>[Subject]</h4>

              <p>[Teacher]</p>
              <p>9:00AM To 10:00 AM</p>
            </div>
            <div class="icon">
              <i class="fas fa-book-reader"></i>
            </div>
            <a href="#" class="small-box-footer">Join Lecture <i class="fas fa-arrow-circle-right ml-2"></i></a>

          </div>
        </div>


        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Today's Upcoming Lectures</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                <li class="item">
                  <div class="product-img">
                    <i class="fas fa-book-reader fa-3x text-info"></i>
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title text-info">[Subject]</a>
                    <span class="product-description text-secondary text-sm">
                      By [Teacher] <br />From [9:00 AM] To [10:00 AM]
                    </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- Attendance Percentage -->
        <div class="col-md-3">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">My Attendance</span>
              <span class="info-box-number">75%</span>

              <div class="progress">
                <div class="progress-bar" style="width: 75%"></div>
              </div>
              <span class="progress-description">
                If LT 60 then low else ok
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <!-- Attendance Percentage -->

        <!-- Attendance Percentage -->
        <div class="col-md-3">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Direct Messages</span>
              <span class="info-box-number">163,921</span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
              <span class="progress-description">
                40% Increase in 30 Days
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <!-- Attendance Percentage -->

        <!-- Attendance Percentage -->
        <div class="col-md-3">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Direct Messages</span>
              <span class="info-box-number">163,921</span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
              <span class="progress-description">
                40% Increase in 30 Days
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <!-- Attendance Percentage -->

        <!-- Attendance Percentage -->
        <div class="col-md-3">
          <div class="info-box bg-info">
            <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Direct Messages</span>
              <span class="info-box-number">163,921</span>

              <div class="progress">
                <div class="progress-bar" style="width: 40%"></div>
              </div>
              <span class="progress-description">
                40% Increase in 30 Days
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <!-- Attendance Percentage -->

      </div>
    </div>
  </section>
</div>



@endsection