@extends('student.include.app')
@section('content')


<div class="container ">
    <div class="row  ">
        <div class="col-md-4 mt-5">

            <!-- small box -->
            <div class="small-box bg-info mt-5">
                <div class="inner">
                    <h4>Subject Name</h4>

                    <p>Teacher</p>
                    <p>9:00Am To 10:00 Am</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <a href="#" class="small-box-footer">Live Class <i class="fas fa-arrow-circle-right ml-2"></i></a>

            </div>

        </div>
        <div class="col-md-8 mt-5">
            <div class="card card-primary mt-5">
                <div class="card-header">
                    <h3 class="card-title">Today Class</h3>


                </div>
                <div class="card-body">


                    <!-- /.card-header -->

                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Teacher Name</th>
                                <th>Time</th>
                                <th>link</th>
                                <!-- <th>Engine version</th>
                                        <th>CSS grade</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>vikram singh</td>
                                <td>9:00 AM TO 10:00 AM
                                </td>
                                <td>LINK</td>

                            </tr>

                        </tbody>

                    </table>

                    <!-- /.card-body -->

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

    </div>
</div>



@endsection