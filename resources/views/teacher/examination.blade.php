@extends('teacher.include.app')
@section('content')

<!-- Examination-Main-content -->

<div class="content-wrapper">

    <!-- Examination-Header-Content -->

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Examination</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('teacher.examination')}}">Teacher</a></li>
                        <li class="breadcrumb-item active">Examination</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- ./Examination-Header-Content -->

    <!-- Examination-Body-Content -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <!-- Examination-Exam-Form -->

                <div class="col-md-8">
                    <div class="card card-info collapsed-card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Add Exam</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>


                        <div class="card-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputQuestion">Enter Examination Name</label>
                                    <input type="text" class="form-control input-xs" id="exampleInputQuestion" placeholder="Exam name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputQuestion">Question 1</label>
                                    <input type="text" class="form-control input-xs" id="exampleInputQuestion" placeholder="Insert your question">
                                </div>


                                <table class="table table-borderless">
                                    <thead>
                                        <tr>

                                            <th scope="col" class="text-center">option </th>
                                            <th scope="col">Answer</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <td>
                                                <input class="form-control form-control-sm  " type="text" placeholder="option 1">

                                            </td>
                                            <td>
                                                <input type="checkbox" class="form-check-input form-control-sm  ml-4 ">
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <input class="form-control form-control-sm  " type="text" placeholder="option 2">

                                            </td>
                                            <td>
                                                <input type="checkbox" class="form-check-input form-control-sm  ml-4 ">
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <input class="form-control form-control-sm  " type="text" placeholder="option 3">

                                            </td>
                                            <td>
                                                <input type="checkbox" class="form-check-input form-control-sm  ml-4 ">
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <input class="form-control form-control-sm  " type="text" placeholder="option 4">

                                            </td>
                                            <td>
                                                <input type="checkbox" class="form-check-input form-control-sm  ml-4 ">
                                            </td>
                                        </tr>



                                    </tbody>

                                </table>
                                <div class="newquestion"></div>

                                <a class="btn btn-info addquestion w-100 mb-1"><i class="fas fa-plus text-white"></i></a>


                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>

                <!-- ./Examination-Exam-Form -->

                <!-- Examination-Exam-Details -->

                <div class="col-md-4">
                    <div class="card card-info collapsed-card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Examination</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-plus"></i>
                                </button>

                            </div>
                        </div>

                        <div class="card-body pt-2 pb-0">
                            <div class="col-md-12 mt-1">
                                <select class="form-control">
                                    <option value="">Examination</option>
                                    <option value="1">Summer</option>
                                    <option value="2">Winter</option>
                                    <option value="3">Unit</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-1">
                                <select class="form-control" name="select1" id="select1">
                                    <option value="">Class</option>
                                    <option value="1">X</option>
                                    <option value="2">XI</option>
                                    <option value="3">XII</option>
                                    <option value="4">V</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-1">
                                <select class="form-control" name="select2" id="select2">
                                    <option value="">Batch</option>
                                    <option value="1">Evening</option>
                                    <option value="1">Morning</option>
                                    <option value="1">Afternoon</option>
                                    <option value="2">Evening</option>
                                    <option value="2">Morning</option>
                                    <option value="3">Morning</option>
                                    <option value="3">Afternoon</option>
                                    <option value="4">Afternoon</option>
                                </select>
                            </div>


                        </div>
                        <div class="card-footer clearfix">
                            <a href="javascript:void(0)" class="btn btn-sm btn-info" style="width:100%;">Submit</a>
                        </div>
                    </div>

                </div>

                <!-- Examination-Exam-Details -->

            </div>
        </div>

    </section>

    <!-- ./Examination-Body-Content -->
</div>
<script>
    $(document).ready(function() {
        var max_fields = 100000; //maximum input boxes allowed
        var wrapper = $(".newquestion"); //Fields wrapper
        var add_button = $(".addquestion"); //Add button ID

        var x = 1; //initlal text box count
        $(add_button).click(function(e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append(`<hr>
                                    <div class="mt-1">
                                    <label for="exampleInputQuestion">Question ` + x + `</label>
                                    <a href="#" style="float:right;" class="remove_field"><i class="fas fa-times"></i></a>
                                   <div class="form-group">
                                      <input type="text" class="form-control input-xs" id="exampleInputQuestion" placeholder="Insert your question">
                                    </div>
                                   

                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>

                                                <th scope="col" class="text-center">option </th>
                                                <th scope="col">Answer</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>

                                                <td>
                                                    <input class="form-control form-control-sm  " type="text" placeholder="option 1">

                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-control-sm  ml-4 ">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <input class="form-control form-control-sm  " type="text" placeholder="option 2">

                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-control-sm  ml-4 ">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <input class="form-control form-control-sm  " type="text" placeholder="option 3">

                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-control-sm  ml-4 ">
                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <input class="form-control form-control-sm  " type="text" placeholder="option 4">

                                                </td>
                                                <td>
                                                    <input type="checkbox" class="form-check-input form-control-sm  ml-4 ">
                                                </td>
                                            </tr>

                            
                           
                                        </tbody>
                                   </table>
                                    
                                    </div>`); //add input box
            }
        });

        $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>
<script>
    var $select1 = $('#select1'),
        $select2 = $('#select2'),
        $options = $select2.find('option');


    $select1.on('change', function() {
        $select2.html($options.filter('[value="' + this.value + '"]'));
    }).trigger('change');
</script>
<!-- Examination-Main-content -->
@endsection