@extends('teacher.include.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">[Lectures]</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Teacher</a></li>
            <li class="breadcrumb-item active">Lecture</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info ">
            <div class="card-header border-transparent">
              <h3 class="card-title">On Going Lectures</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>

              </div>
            </div>
            <div class="card-body p-0" style="max-height:25rem;overflow:scroll;">
              <div class="col-md-12">

                <ul class="nav nav-tabs pt-2" id="custom-content-below-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true">Lectures</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">Messages</a>
                  </li>

                </ul>
                <div class="tab-content" id="custom-content-below-tabContent">
                  <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
                    <div id="siteloader" class="card-body p-0 w-100 embed-responsive embed-responsive-21by9">

                    </div>
                  </div>
                  <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                  </div>
                  <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">
                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-info collapsed-card">
            <div class="card-header border-transparent">
              <h3 class="card-title">My Past Lectures</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0" style="max-height:25rem;overflow:scroll;">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th class="text-left">Audience</th>
                      <th class="text-center">Subject</th>
                      <th class="text-center">Time</th>
                      <th class="text-right">Notes</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center">
                        <span class="badge badge-info">
                          9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                      <td class="text-right">
                        <a href="#">
                          <span>
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a>
                      </td>
                    </tr>



                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-info collapsed-card">
            <div class="card-header border-transparent">
              <h3 class="card-title">My Today's Lectures</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 " style="max-height:25rem;overflow:scroll;">
              <div class=" table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th class="text-left">Audience</th>
                      <th class="text-center">Subject</th>
                      <th class="text-center">Time</th>
                      <th class="text-right">Join</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM</span></td>
                      <td class="text-right">
                        <a href="#">
                          <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-info collapsed-card ">
            <div class="card-header border-transparent">
              <h3 class="card-title">My Future Lectures</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>

              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0" style="max-height:25rem;overflow:scroll;">
              <div class=" table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th class="text-left">Audience</th>
                      <th class="text-center">Subject</th>
                      <th class="text-right">Time</th>

                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-left"> 10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right">
                        <span class="badge badge-info"> 9:00 AM
                          </br> 10:00 AM
                        </span>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  $("#siteloader").html('<object data="http://cms.schooltimes.ca" />');
</script>
@endsection