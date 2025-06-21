@extends('layouts.master')
@section('dashboard')
<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Admin Dashboard</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div><!--end col-->  
                    </div><!--end row-->  
                    <form action="" method="post">
                        @csrf
                        <div class="row mx-3 ">  
                                          
                        </div>                  
                        <div class="row">   
                            <div class="col-md-4">
                                <label for="" class="m-2 fw-bold">Bus No. <span style="font-size: 14px;font-weight: 600;color: #ee1201;">*</span></label><br>
                                <input name="bus_no" type="text" class="form-control" placeholder="Enter Bus No." required="">
                            </div>
                            <div class="col-md-4">
                                <label for="" class="m-2 fw-bold">Tickets</label><br>
                                <input type="number" class="form-control" name="ticket" id="" placeholder="Enter Ticket Quantity" required>
                            </div> 
                            <div class="col-md-4">
                                <label for="" class="m-2 fw-bold">Bus Route <span style="font-size: 14px;font-weight: 600;color: #ee1201;">*</span></label><br>
                                <input name="bus_route" type="text" class="form-control" placeholder="Enter Bus Route" required="">          
                            </div>
                        </div>    
                        <div class="row">   
                            <div class="col-md-4">  
                                <label for="" class="m-2 fw-bold">Bus Color <span style="font-size: 14px;font-weight: 600;color: #ee1201;">*</span></label><br>
                                <select id="" name="bus_color" class="form-control" style="background-color:white;" required="">
                                    <option value="">Select Bus Color</option>
                                    <option value="#9CCC65">Green</option>
                                    <option value="#EF5350">Red</option>
                                    <option value="#FF7043">Orange</option>
                                    <option value="blue">Blue</option>
                                </select>  
                            </div>  
                            <div class="col-md-4">
                                <label for="" class="m-2 fw-bold">Starting Stop </label><br>
                                <input type="text" class="form-control" name="start" id="" placeholder="Enter Starting Stop" required>
                            </div>       
                            <div class="col-md-4">
                                <label for="" class="m-2 fw-bold">Ending Stop</label><br>
                                <input type="text" class="form-control" name="end" id="" placeholder="Enter Ending Stop" required>
                            </div>               
                            <div class="col-md-4">
                                <label for="" class="m-2 fw-bold">Fare</label><br>
                                <input type="number" class="form-control" name="fare" id="" placeholder="Enter Fare" required>
                            </div>  
                        </div><br>
                        
                    
                        <div class="row">        
                        <button type="submit" id="submit" class="text-light btn btn-success mx-auto btn-icon-text">
                                    <i class="fa fa-arrow-circle-right fa-lg"></i>
                                    &nbsp;Submit
                            </button>
                    </form>                                                            
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->

    </div><!-- container -->



@endsection