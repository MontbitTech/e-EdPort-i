@extends('teacher.include.app')
@section('content')
<!-- Extra File Include -->
    
  <!-- DrawingBoard CSS-->
  <link rel="stylesheet" href="{{asset('assets/plugins/bower_components/drawingboard.js/dist/drawingboard.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/bower_components/drawingboard.js/dist/drawingboard.nocontrol.min.css')}}">
  <!-- Drawing Board JS-->
  <script src="{{asset('assets/plugins/bower_components/drawingboard.js/dist/drawingboard.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bower_components/drawingboard.js/dist/drawingboard.nocontrol.min.js')}}"></script>
  
  <style>
	#zbeubeu {
		width: 1330px;
		height:435px;
	}
	#siteloader{
		height:435px;
	}
	#myframein {
    overflow:hidden;
	}
</style>
<!-- ./Extra File Include -->

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
          <div class="card card-info" id="myframeout">
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
            <div class="card-body p-0">
              <div class="container-fluid">
                <div class="row pt-2">
                  <div class="col-md-8">
                    <!--TODO: Try http://leimi.github.io/drawingboard.js/ Whiteboard here -->
                    <div class="card card-primary m-0 card-outline card-tabs"  id="myframein">

              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
				 <li class="nav-item">
				  <a href="javascript:void(0)" class="nav-link " id="cardfs1"><i class="fas fa-expand"></i>
                        </a>
                        <a href="javascript:void(0)" class="nav-link " style="display:none;" id="cardfs2"><i class="fas fa-compress"></i>
                        </a>
				  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="false">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="true">Drawing Board</a>
                  </li>
				  
                </ul>
				
              </div>
              <div class="card-body m-1 p-0">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                     <div id="siteloader" class="card-body p-0 w-100 embed-responsive embed-responsive-21by9">
                        </div> 
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                     <div id="zbeubeu"></div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
                    </div>

                  </div>
                  <div class="col-md-4 mt-2 mb-2">

                    <button onclick="myFunction()" class="btn w-100 bg-gradient-info btn-md mt-2  mb-2 mr-2">Start Live Lecture <i class="fas fa-arrow-circle-right ml-2"></i></button>
                    <select class="w-100 select1 mt-2">
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
  $("#siteloader").html('<object data="http://cms.schooltimes.ca" />');
</script>
<!-- Lecture-other-site-show-code -->
<script>
	var myBoard = new DrawingBoard.Board('zbeubeu',{
	controls: [
		'Color',
		{ Size: { type: 'dropdown' } },
		{ DrawingMode: { filler: true} },
		'Navigation'
	],
	controlsPosition:'top left',
	size: 1,
	webStorage: false,
	droppable:true,
	enlargeYourContainer: true,
	stretchImg:true
});
$(document).ready(function () {
		$(".drawing-board-controls").append('<div class="drawing-board-control"><i class="fas fa-expand" id="drawzoom"></i></div>');
		var elem = document.getElementById("zbeubeu");
    var elem1 = document.getElementById("myframein");
		$('#drawzoom').on('click', function(){
			elem.requestFullscreen();
			var w = $(window).width();
			var h = $(window).height();
			$(".drawing-board-canvas").css("width", w + "px");
			$(".drawing-board-canvas").attr("width", w );
			$(".drawing-board-canvas").css("height", h + "px");
			$(".drawing-board-canvas").attr("height", h );
		})
    $('#cardfs1').on('click', function(){
      if(document.fullscreenElement||document.webkitFullscreenElement||document.mozFullScreenElement||document.msFullscreenElement) {
        $("#siteloader").css("height", "435px");
			document.exitFullscreen();
		}
      else{
			elem1.requestFullscreen();
			var w = $(window).width();
			var h = 700;
			$(".drawing-board-canvas").css("width", w + "px");
			$(".drawing-board-canvas").attr("width", w );
			$(".drawing-board-canvas").css("height", h + "px");
			$(".drawing-board-canvas").attr("height", h );
      $(".drawing-board-canvas-wrapper").css("width", w + "px");
      $(".drawing-board-canvas-wrapper").css("height", h + "px");
      $("#siteloader").css("height", h + "px");
      }
      
      
		});
	
		
	});
</script>
<!--script>
$("[data-card-widget='maximize']").click(function() {
  document.getElementById("myFrameout").style.height = "35rem";
});
</!--script-->
@endsection