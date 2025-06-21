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

        <!-- App css -->
        <link href="{{ asset('/theme/default/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/theme/default/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/theme/default/assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/theme/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/theme/default/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css"  href="{{ asset('/theme/default/assets/a.css') }}" />

    </head>

    <body>
<!-- Left Sidenav -->
<div class="left-sidenav">
    <!-- LOGO -->
    <div class="brand">
        <a href="index.html" class="logo">
            <span>
                <img src="{{ asset('theme/default/assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src="{{ asset('theme/default/assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                <img src="{{ asset('theme/default/assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <ul class="metismenu left-sidenav-menu">
            <li class="menu-label mt-0">Main</li>
            <li>
                <a href="{{url('/dashboard')}}"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
            </li>
             <li>
                <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Property</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.property.index') }}"><i class="ti-control-record"></i>List</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);"><i data-feather="grid" class="align-self-center menu-icon"></i><span>Registration</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{url('/register-list-view')}}"><i class="ti-control-record"></i>List</a></li>
                </ul>
            </li>

            <hr class="hr-dashed hr-menu">          
        </ul>
    </div>
</div>
<!-- end left-sidenav-->