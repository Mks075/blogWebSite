<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header.blade.php</title>
    <!-- font awesome css -->
    <link rel="stylesheet" href="{{asset('Frontend\css\fcss\all.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('Frontend\css\fcss\fontawesome.min.css')}}"> --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('Frontend\css\bootstrap.css')}}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('Frontend/css/b5style.css')}}">
</head>

<body>
<!-- top -->
<div class="container-fluid icon-top py-2 px-3">
    <div class="row">
        <div class="col d-flex justify-content-between align-items-baseline">
            <div class="top-icons">
                <a href="#" class="mx-2">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" class="mx-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="mx-2">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="mx-2">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <h5 class="text-capitalize">all right reserved</h5>
        </div>
    </div>
</div>
<!-- end of top -->

<!-- header section -->
<header id="header">
    <!-- navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg">
        <a href="#" class="navbar-brand px-2 py-0">
            <img src="{{url('logoImg/'.$logo->image)}}" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-target="#myNavbar" data-toggle="collapse">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="{{URL::to('/')}}" class="nav-link m-2 text-capitalize {{'/' == request()->path() ? 'nactive' : '' }}">home</a>
                </li>
                <li class="nav-item">
                    {{-- <a href="#about" class="nav-link m-2 text-capitalize">about</a> --}}
                    <a href="{{route('about.us')}}" class="nav-link m-2 text-capitalize {{'about' == request()->path() ? 'nactive' : '' }}">about</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact.us')}}" class="nav-link m-2 text-capitalize {{'contact' == request()->path() ? 'nactive' : '' }}">Contact Us</a>
                </li>
            </ul>
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Here...">
                    <div class="input-group-append">
                        <button class="btn search-btn" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </nav>
    <!--end of navbar -->
