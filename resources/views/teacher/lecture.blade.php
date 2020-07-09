@extends('teacher.include.app')
@section('content')

<!-- Lecture-Main-Content -->
<div class="content-wrapper">
  <!-- Lecture-Header-Content -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">[Lectures]</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Teacher</a></li>
            <li class="breadcrumb-item active">Lecture</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- ./Lecture-Header-Content -->

  <!-- Lecture-Body-Content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Lecture-On-Going-Lecture -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info ">
            <div class="card-header border-transparent">
              <h3 class="card-title">On Going Lectures</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0" style=" min-height:25rem; max-height:25rem; overflow:hidden">
              <div class="container-fluid">
                <div class="row pt-2">
                  <div class="col-md-8 col-sm-6">
                    <!--TODO: Try http://leimi.github.io/drawingboard.js/ Whiteboard here -->
                    <div class="card ">

                      <div class="card-body m-0 p-0" id="myFrame">
                        <button type="button" onclick="myFunction()" class="btn position-static btn-tool btn-info d-inline text-primary " data-card-widget="maximize"><i class="fas fa-expand"></i>
                        </button>
                        <div id="siteloader" class="card-body p-0 w-100 embed-responsive embed-responsive-21by9">
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-4 col-sm-6">

                    <button onclick="myFunction()" class="btn btn-block bg-gradient-info btn-xs mt-2  mb-2 mr-2">Start Live Lecture <i class="fas fa-arrow-circle-right ml-2"></i></button>
                    <select class="custom-select select1 w-100 mt-2">
                      <option selected>Select The Topic</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <!-- <button onclick="onnew()" class="btn btn-lg d-block btn-info">new</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Lecture-On-Going-Lecture -->

      <!-- Lecture-All-Lectures -->
      <div class="row">

        <!-- Lecture-Past-Lectures -->
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
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x "></i>

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
                            <i class="fas fa-sticky-note text-info fa-lg icon-3x"></i>

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
        <!-- ./Lecture-Past-Lectures -->


        <!-- Lecture-Today's-Lectures -->
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
                          <span>
                            <i class="fas fa-lg icon-3x fa-arrow-circle-right text-info"></i></span>
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
        <!-- ./Lecture-Today's-Lectures -->

        <!-- Lecture-Future-Lectures -->
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
        <!-- ./Lecture-Future-Lectures -->
      </div>
      <!-- ./Lecture-All-Lectures -->
    </div>
  </section>
  <!-- ./Lecture-Body-Content -->
</div>
<!-- ./Lecture-Main-Content -->

<!-- Lecture-other-site-show-code -->

<script>
  function myFunction() {
    document.getElementById("myFrame").width = "100% !important";
  }
</script>
<script>
  $("#siteloader").html('<object data="http://cms.schooltimes.ca" />');
</script>
<!-- Lecture-other-site-show-code -->

@endsection