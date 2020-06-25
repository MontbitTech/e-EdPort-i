<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/plugins/ionicons-2.0.1/css/ionicons.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('assets/plugins/toastr/toastr.min.css')}}">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
  <!-- jQuery -->
  <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jquery-validation -->
  <script src="{{asset('assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('assets/plugins/jquery-validation/additional-methods.min.js')}}"></script>
  <script>

  </script>
  
  <!-- Google Font: Source Sans Pro -->
  <link href="{{asset('assets/css/fonts/source_sans_pro.css')}}" rel="stylesheet">

  </head>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
<div class="wrapper">

    <style>
        .logout a:hover {
            color: red;
            background-color: white;
            border: solid 1px red;
        }

        .main {
            position: fixed !important;
            width: -webkit-fill-available !important;

        }
    </style>
</head>

        <nav class="main-header navbar main logout navbar-expand navbar-white navbar-light ">
            <!-- Left navbar links -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->

                <li class="nav-item mr-5 logout">
                    <a href="" class="btn btn-danger btn-rounded btn-sm"> <i class="fas fa-sign-out-alt mr-2"></i>logout</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('assets/img/user2-160x160.jpg')}}" class="img-circle elevation-2 " alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Student Name</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                        <li class="nav-item ">
                            <a href="" class="nav-link">
                                <i class="fas fa-book-reader mr-2"></i>


                                <p>
                                    Class

                                </p>
                            </a>
                        </li>
                        <li class="nav-item " data-toggle="modal" data-target="#timetable">
                            <a href="#" class="nav-link">
                                <i class="far fa-clock mr-2"></i>
                                <p>
                                    Timetable

                                </p>
                            </a>
                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
            <section class="content ">
                <!-- Main content -->
                @yield('content')
            </section>
</div>
  <footer class="main-footer">
  <strong>Copyright &copy; 2019-2020</strong>
    All rights reserved.
  </footer>

<!-- ./wrapper -->


<!-- SweetAlert2 -->
<script src="{{asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
	  "ordering": false,
    });
  });
</script>
@if ( Session::has('flash_message') )
<script type="text/javascript">
   const Toast = Swal.mixin({
      toast: true,
	  position: 'top-end',
	  timer: 3000,
	  padding: '1em',
	  showConfirmButton: false,
	  timerProgressBar: true,
	  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
     }
    });


      Toast.fire({
        icon: "{{ Session::get('flash_type') }}",
        title: "<h6><b>{{ Session::get('flash_message') }}</b></h6>"
      })
</script>
@endif

@if ($errors->any())
@foreach ($errors->all() as $error)
<script type="text/javascript">
   toastr.error('{{$error}}')
</script>
@endforeach
@endif
</body>
</html>