{{-- @extends('layouts.master')
@section('dashboard') --}}

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/theme/default/assets/images/favicon.ico') }}">

        <!-- DataTables -->
        <link href="{{ asset('/theme/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/theme/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('/theme/default/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/theme/default/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/theme/default/assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/theme/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/theme/default/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css"  href="{{ asset('/theme/default/assets/a.css') }}" />

    </head>

    <body>
<!-- Page Content-->
<div class="page-content mx-auto">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h1 class="">User Registration Form</h1>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                            </a>
                        </div><!--end col-->  
                    </div><!--end row-->                                                              
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Registration Form</h4>
                    </div><!--end card-header-->
                    <div class="card-body">  
                        <div class="row">
                            <div class="col-lg-10 mx-auto">
                                @if (session('alert_success'))
                                    <h6 class="alert alert-success font-weight-bold">{{ session('alert_success') }}</h6>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger font-weight-bold">{{ $errors->first() }}</div>
                                @endif
                                <form action="{{route('reg_form')}}" method="post">
                                    @csrf
                                <div class="form-group row mb-2">
                                    <div class="col-sm-4">
                                        <label for="example-text-input" class="col-form-label font-weight-bold font-weight-bold">Name</label>
                                        <input class="form-control form-control-lg" type="text" name="name" value="Artisanal kale" placeholder="Enter Full Name" id="example-text-input">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="example-email-input" class="col-form-label font-weight-bold">Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email" value="" placeholder="Enter Email Address" id="example-email-input">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="example-tel-input" class="col-form-label font-weight-bold">Contact Number</label>
                                        <input class="form-control form-control-lg number_validation" maxlength="10" type="tel" name="contact_no" value="" placeholder="Enter Contact Number" id="example-tel-input">
                                    </div>
                                 
                                </div>
                                <div class="form-group row mb-2">
                                    <div class="col-sm-4">
                                        <label class="col-form-label font-weight-bold">Industries</label>
                                        <select class="form-control form-control-lg" name="industries">
                                            <option value="">Select Industry</option>
                                            @foreach($industries as $ind)
                                                <option value="{{ $ind->id }}">{{$ind->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label font-weight-bold">State</label>
                                        <select class="form-control form-control-lg" name="state" id="state">
                                            <option value="">Select State</option>
                                            @foreach($states as $state)
                                                <option value="{{ $state->id }}">{{$state->states_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label font-weight-bold">City</label>
                                        <select class="form-control form-control-lg" name="city" id="city_id">
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-2">
                                    <div class="col-sm-4">
                                        <label class="col-form-label font-weight-bold">Functional Role</label>
                                        <select class="form-control form-control-lg" name="func_role">
                                            <option value="">Select Role</option>
                                            @foreach($funcRole as $role)
                                                <option value="{{ $role->id }}">{{$role->subcategory_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label font-weight-bold">Service</label>
                                        <select class="form-control form-control-lg" name="service">
                                            <option value="">Select Service</option>
                                            @foreach($services as $serv)
                                                <option value="{{ $serv->id }}">{{$serv->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group row mb-2">
                                    <div class="col-sm-8">
                                        <label for="example-text-input" class="col-form-label font-weight-bold">Address</label>
                                        <textarea class="form-control form-control-lg" name="address" value="" placeholder="Enter Full Address" id="example-text-input"></textarea>
                                    </div> 
                                </div>
                                <div class="form-group row my-2 px-2">
                                    <button type="submit" class="btn btn-primary px-4 font-weight-bold">Submit</button>
                                </div>
                            </form>
                                                                   
                            </div>

                        </div>                                                                      
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div>

        <footer class="footer text-center text-sm-left">
            &copy; {{date('Y')}} <a href="">{{ env('APP_NAME') }}</a>
        </footer><!--end footer-->
    </div><!-- end page content -->


        <!-- jQuery  -->
        <script src="{{ asset('/theme/default/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/theme/default/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('/theme/default/assets/js/metismenu.min.js') }}"></script>
        <script src="{{ asset('/theme/default/assets/js/waves.js') }}"></script>
        <script src="{{ asset('/theme/default/assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('/theme/default/assets/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('/theme/default/assets/js/moment.js') }}"></script>
        <script src="{{ asset('/theme/plugins/daterangepicker/daterangepicker.js') }}"></script>

        <script src="{{ asset('/theme/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/theme/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('/theme/default/assets/js/app.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('.number_validation').on('keyup', function () {
                    if (/\D/g.test(this.value))
                    this.value = this.value.replace(/\D/g,'')
                });

                $('#state').on('change', function () {
                var idState = this.value;
                $("#city_id").html('');
                $.ajax({
                    url: "{{url('fetch_cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#city_id').html('<option value="">Select City</option>');
                        $.each(result, function (key, value) {
                            $("#city_id").append('<option value="' + value
                                .id + '">' + value.cities_name + '</option>');
                        });
                    }
                });
            });
            });
            $('#datatable').DataTable();       

        </script>
        
    </body>
</html>

{{-- @endsection --}}