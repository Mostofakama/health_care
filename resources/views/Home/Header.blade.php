<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

    </title>
    <link rel="stylesheet" href="{{asset('assets/css/home/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home/owl.theme.default.min.css')}}">

    <style>
        /* banner  */
        .owl-carousel .owl-item {
            height: 550px;
        }

        @media (max-width:991px) {
            .owl-carousel .owl-item {
                height: auto;
            }
        }

        .owl-carousel .item img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .owl-prev,
        .owl-next {
            background-color: #ddd;
            padding: 10px;
            border-radius: 50%;
            color: #333;
            position: absolute;
            top: 40%;
            transform: translateY(-50%);
        }

        .owl-prev {
            left: -50px;
        }

        .owl-next {
            right: -50px;
        }

        .owl-dot span {
            background-color: #333;
            width: 12px;
            height: 12px;
            display: block;
            border-radius: 50%;
        }

        .owl-dot.active span {
            background-color: #999;
        }

        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel button.owl-dot {
            background: 0 0;
            color: inherit;
            border: none;
            padding: 0 !important;
            font: inherit;
            width: 40px;
            height: 70px;
            background: rgba(0, 0, 0, .1);
            font-size: 33px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        button.owl-dot {
            background-color: #fff !important;
        }
    </style>
</head>

<body>
    <!-- menu  -->
    <header class="header" id="header">
        <div class="main-menu container-custom d-flex justify-content-between align-items-center">
            <div class="logo d-flex align-items-center">
                <img src="{{asset('assets/images/img/logo.png')}}" alt="">
            </div>
            <div class="menu">
                <nav class="navbar navbar-expand-lg p-0">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}">HOME </a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Mission & Vision</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('gallery.list')}}">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('card.search')}}">Varify Card</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    </ul>
                </nav>

            </div>
            <div class="login">
                <nav class="navbar navbar-expand-lg p-0">
                    <ul class="navbar-nav">

                        <li class="nav-item mx-2"><a class="nav-link btn btn-success text-white" href="{{route('signup')}}">
                                Card</a></li>
                        <li class="nav-item mx-2"><a class="nav-link btn btn-danger text-white" href="#">Login</a></li>
                    </ul>
                </nav>

            </div>

            <!-- response menu  -->
            <div class="res-menu " id="menuBtn">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>MENU</span>
            </div>
        </div>
        <div class="res-menu-tow" id="menuRes">
            <nav class="navbar ">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">HOME </a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mission & Vision</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('gallery.list')}}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('card.search')}}">Varify Card</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>

                    <div class="d-flex justify-content-between">
                        <li class="nav-item mx-2"><a class="nav-link btn btn-success text-white" href="#">
                                Registration</a></li>
                        <li class="nav-item mx-2"><a class="nav-link btn btn-danger text-white" href="#">Login</a></li>
                    </div>
                </ul>
            </nav>
        </div>

    </header>

