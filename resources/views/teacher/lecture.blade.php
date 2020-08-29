@extends('teacher.include.app') @section('content')
<!-- Lecture Extra Content -->

<!-- DrawingBoard CSS-->
<link rel="stylesheet" href="{{asset('assets/plugins/bower_components/drawingboard.js/dist/drawingboard.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/bower_components/drawingboard.js/dist/drawingboard.nocontrol.min.css')}}">
<!-- Drawing Board JS-->
<script src="{{asset('assets/plugins/bower_components/drawingboard.js/dist/drawingboard.min.js')}}"></script>
<script src="{{asset('assets/plugins/bower_components/drawingboard.js/dist/drawingboard.nocontrol.min.js')}}"></script>

<style>
  .resp-container {
    position: relative;
    overflow: hidden;
    padding-top: 56.25%;
  }

  .resp-iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
  }

  #zbeubeu {
    width: 100vw;
    height: 100vh;
  }

  #myframein {
    overflow: hidden;
    height: 435px;
  }
</style>
<!-- ./Lecture Extra Content -->

<!-- Content Wrapper -->
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

  <!-- Section Content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Lecture-On-Going-Lecture -->
      <div class="row mb-3">
        <div class="col-md-12">
          <!--Teacher Lecture Tab -->
          <div class="card card-primary m-0 card-outline card-tabs" id="myframein">
            <!--Teacher Tab Navigation --->
            <div class="card-header p-0 pt-1 border-bottom-0">
              <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item"><a href="javascript:void(0)" class="nav-link " id="cardfs1"><i class="fas fa-expand"></i>
                  </a> <a href="javascript:void(0)" class="nav-link " style="display: none;" id="cardfs2"><i class="fas fa-compress"></i> </a></li>
                <li class="nav-item"><a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="false">On
                    Going Lecture</a></li>
                <li class="nav-item"><a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="true">Drawing
                    Board</a></li>
              </ul>
            </div>
            <!--Teacher Tab Navigation --->


            <div class="card-body">
              <!--Teacher Tab-Content --->
              <div class="tab-content" id="custom-tabs-three-tabContent">
                <!--Teacher Cms View --->
                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                  <div class="col-md-12 mt-2 mb-2">
                    <label for="exampleInputFile">Ongoing Lecture Topic</label>
                    <div class="row">
                      <div class="col-md-6 mt-2">

                        <select id="selecttopic" class="w-100 select2">
                          <option value="" selected>Select The Topic</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <!--button onclick="onnew()" class="btn btn-lg d-block btn-info">new</!--button-->
                      </div>
                      <div class="col-md-6">

                        <button class="livelecture btn w-100 bg-gradient-info btn-md mt-2  mb-2 mr-2">
                          Start Live Lecture <i class="fas fa-arrow-circle-right ml-2"></i>
                        </button>

                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 mt-2 mb-2">
                    <label for="exampleInputFile">Documents</label>
                    <div class="row">
                      <div class="col-md-2 col-sm-4 text-center openpdf" id="1">
                        <i class="far fa-file-pdf" style="font-size: 58px; color: red"></i>
                        <div>Abc3.pdf</div>
                      </div>
                      <div class="col-md-2 col-sm-4 text-center">
                        <a href="http://www.africau.edu/images/default/sample.pdf">
                          <i class="far fa-file-pdf" style="font-size: 58px; color: red"></i>
                          <div>Abc4.pdf</div>
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
                <!--./Teacher Cms View --->

                <!--Teacher White Board --->
                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                  <div id="zbeubeu"></div>
                  <!--./Teacher White Board --->
                </div>
              </div>
              <!--./Teacher Tab Content --->
            </div>

          </div>
          <!-- ./ Teacher Lecture Tab -->

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
            <div class="card-body p-0" style="max-height: 25rem; overflow: scroll;">
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
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span> <i class="fas fa-sticky-note text-info fa-lg icon-3x "></i>

                          </span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span> <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span> <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span> <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span> <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span> <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span> <i class="fas fa-sticky-note text-info fa-lg icon-3x ml-2"></i>

                          </span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span> <i class="fas fa-sticky-note text-info fa-lg icon-3x"></i>

                          </span>
                        </a></td>
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
            <div class="card-body p-0 " style="max-height: 25rem; overflow: scroll;">
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
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span> <i class="fas fa-lg icon-3x fa-arrow-circle-right text-info"></i></span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-center"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                      <td class="text-right"><a href="#"> <span><i class="fas fa-lg icon-3x fa-arrow-circle-right text-info ml-2"></i></span>
                        </a></td>
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
            <div class="card-body p-0" style="max-height: 25rem; overflow: scroll;">
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
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
                    </tr>
                    <tr>
                      <td class="text-left">10-A</td>
                      <td class="text-center">English</td>
                      <td class="text-right"><span class="badge badge-info">
                          9:00 AM </br> 10:00 AM
                        </span></td>
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
  <!-- ./Section Content -->
  <!-- All Modal Open -->
  <!-- ./All Modal Close -->
</div>
<!-- ./Content Wrapper-->

<!-- Lecture Extra Content -->
<script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
<script>
  var myBoard = new DrawingBoard.Board('zbeubeu', {
    controls: [
      'Color',
      {
        Size: {
          type: 'dropdown'
        }
      },
      {
        DrawingMode: {
          filler: true
        }
      },
      'Navigation'
    ],
    controlsPosition: 'top left',
    size: 1,
    webStorage: false,
    droppable: true,
    enlargeYourContainer: true,
    stretchImg: true
  });
  $(document).ready(function() {
    $(".drawing-board-control-navigation-back").html("<i class='fas fa-undo'></i>");
    $(".drawing-board-control-navigation-forward").html("<i class='fas fa-redo'></i>");
    $(".drawing-board-control-navigation-reset").html("<i class='fas fa-times'></i>");

    var elem1 = document.getElementById("myframein");

    $('#cardfs1').on('click', function() {
      if (document.fullscreenElement || document.webkitFullscreenElement || document.mozFullScreenElement || document.msFullscreenElement) {
        document.exitFullscreen();
      } else {
        elem1.requestFullscreen();
      }
    });
  });
</script>
<script>
  function removeTab(liElem) {
    if (confirm("Are you sure?")) {
      $('ul#custom-tabs-three-tab > li#li' + liElem).fadeOut(1000, function() {
        $(this).remove();
      });

      $('div.tab-content div#tab' + liElem).remove();
      //$('ul#custom-tabs-three-tab li:nth-child(2) a.nav-link').addClass(" active");
      $('a#custom-tabs-three-home-tab').addClass(" active");
      $('div#custom-tabs-three-home').addClass(" active show");
    }
    return false;
  }
</script>
<script>
  var nbrLiElem = 1;
  $('body').on('click', '.livelecture', function(event) {

    var topic_id = $('#selecttopic').val();
    if (topic_id == 1) {
      var topic_name = "One";
    } else if (topic_id == 2) {
      var topic_name = "Two";
    } else {
      var topic_name = "Three";

    }
    if (topic_id) {
      $('ul#custom-tabs-three-tab li:last-child').after('<li class="nav-item" id="li' + (nbrLiElem + 1) + '"><a class="nav-link" href="#tab' + (nbrLiElem + 1) + '" role="tab" data-toggle="pill" role="tab" aria-controls="tab' + (nbrLiElem + 1) + '" aria-selected="true" data-toggle="tab">' + (topic_name) + ' <button type="button" class="btn btn-xs" onclick="removeTab(' + (nbrLiElem + 1) + ');"><i class="fas fa-times"></i></button></a>');
      $('div.tab-content div.tab-pane:last-child').after(`<div class="tab-pane fade" role="tabpanel" id="tab` + (nbrLiElem + 1) + `" aria-labelledby="tab` + (nbrLiElem + 1) + `"><div class="resp-container"><iframe class="resp-iframe" src="https://www.tutorialrepublic.com/faq/how-to-get-the-value-of-selected-option-in-a-select-box-using-jquery.php" frameborder="0"></iframe></div></div>`);
      nbrLiElem = nbrLiElem + 1;
    }
  });
</script>
<script>
  $('body').on('click', '.openpdf', function(event) {

    var id = $(this).attr('id');
    if (id == 1) {
      var topic_name = "One";
    } else if (id == 2) {
      var topic_name = "Two";
    } else {
      var topic_name = "Three";

    }
    if (id) {



      $('ul#custom-tabs-three-tab li:last-child').after('<li class="nav-item" id="li' + (nbrLiElem + 1) + '"><a class="nav-link" href="#tab' + (nbrLiElem + 1) + '" role="tab" data-toggle="pill" role="tab" aria-controls="tab' + (nbrLiElem + 1) + '" aria-selected="true" data-toggle="tab">' + (topic_name) + ' <button type="button" class="btn btn-xs" onclick="removeTab(' + (nbrLiElem + 1) + ');"><i class="fas fa-times"></i></button></a>');
      $('div.tab-content div.tab-pane:last-child').after(`<div class="tab-pane fade" role="tabpanel" id="tab` + (nbrLiElem + 1) + `" aria-labelledby="tab` + (nbrLiElem + 1) + `"><div><div>
    <button id="prev` + (nbrLiElem + 1) + `">Previous</button>
    <button id="next` + (nbrLiElem + 1) + `">Next</button>&nbsp; &nbsp;<span>Page: <span id="page_num` + (nbrLiElem + 1) + `"></span> / <span id="page_count` + (nbrLiElem + 1) + `"></span></span>
    </div><div style="overflow:auto;height:550px;"><canvas id="the-canvas` + (nbrLiElem + 1) + `"></canvas></div></div></div>`);

      var url = 'https://drive.google.com/file/d/1HgfdCVXK8b5DwwuTV4AFi3DXAajdOfk2/preview';
      var pdfjsLib = window['pdfjs-dist/build/pdf'];
      pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';
      var pdfDoc = null,
        pageNum = 1,
        pageRendering = false,
        pageNumPending = null,
        scale = 1.8,
        canvas = document.getElementById('the-canvas' + (nbrLiElem + 1)),
        ctx = canvas.getContext('2d');

      function renderPage(num) {
        pageRendering = true;
        // Using promise to fetch the page
        pdfDoc.getPage(num).then(function(page) {
          var viewport = page.getViewport({
            scale: scale
          });
          canvas.height = 1700;
          canvas.width = viewport.width;

          // Render PDF page into canvas context
          var renderContext = {
            canvasContext: ctx,
            viewport: viewport
          };
          var renderTask = page.render(renderContext);

          // Wait for rendering to finish
          renderTask.promise.then(function() {
            pageRendering = false;
            if (pageNumPending !== null) {
              // New page rendering is pending
              renderPage(pageNumPending);
              pageNumPending = null;
            }
          });
        });

        // Update page counters
        document.getElementById('page_num' + (nbrLiElem)).textContent = num;
      }

      function queueRenderPage(num) {
        if (pageRendering) {
          pageNumPending = num;
        } else {
          renderPage(num);
        }
      }

      /**
       * Displays previous page.
       */
      function onPrevPage() {
        if (pageNum <= 1) {
          return;
        }
        pageNum--;
        queueRenderPage(pageNum);
      }
      document.getElementById('prev' + (nbrLiElem + 1)).addEventListener('click', onPrevPage);

      /**
       * Displays next page.
       */
      function onNextPage() {
        if (pageNum >= pdfDoc.numPages) {
          return;
        }
        pageNum++;
        queueRenderPage(pageNum);
      }
      document.getElementById('next' + (nbrLiElem + 1)).addEventListener('click', onNextPage);
      pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
        pdfDoc = pdfDoc_;
        document.getElementById('page_count' + (nbrLiElem)).textContent = pdfDoc.numPages;

        // Initial/first page rendering
        renderPage(pageNum);
      });
      nbrLiElem = nbrLiElem + 1;
    }

  });
</script>
<!-- ./Lecture Extra Content -->
@endsection