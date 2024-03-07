<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
    <body class="padding-top">
        <div class="container-fluid nav-container">
            <!-- Navbar Section -->
            
                    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
                        <div class="container-fluid px-0">
                            <a class="navbar-brand ps-5" href="index.php"><i class="fa-solid fa-city"></i>&nbsp;CityNest</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end pe-4   custom-navbar" id="navbarSupportedContent">
                                <ul class="navbar-nav  mb-2 mb-lg-0 ">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">For Sale</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">For Rent</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="shop.php">Short Let</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="shop.php">Agents</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="shop.php">Post a Property</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login')}}">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register')}}">Sign Up</a>
                                    </li>
                            
                                </ul>
                        
                            </div>
                        </div>
                  </nav>

              
        </div>
        @yield("main_section")

        <div class="row footer justify-content-start">
            <div class="col-lg-3 col-md-6">
                <p class="bold footer-title">Featured Properties</p>
                <ul>
                    <li>Project 1</li>
                    <li>Project 1</li>
                    <li>Project 1</li>
                    <li>Project 1</li>
                    <li>Project 1</li>
                    <li>Project 1</li>
                    <li>Project 1</li>
                </ul>
            </div>
            <div class="col-lg-1 col-md-6">
                <p class="bold footer-title">Popular States</p>
                <ul>
                    <li>Lagos</li>
                    <li>Ibadan </li>
                    <li>Abuja </li>
                    <li>Ogun </li>
                    <li>Porthacourt </li>
                    <li>Abia </li>
                    <li>Kano </li>
                </ul>
            </div>
            <div class="col-lg-1 col-md-6">
                <p class="bold footer-title">Popular Cities</p>
                <ul>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                </ul>
            </div>
            <div class="col-lg-1 col-md-6">
                <p class="bold footer-title">Popular States</p>
                <ul>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                </ul>
            </div>
            <div class="col-lg-1 col-md-6">
                <p class="bold footer-title">Popular Shortlet Cities</p>
                <ul>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                </ul>
            </div>
            <div class="col-lg-1 col-md-6">
                <p class="bold footer-title">Popular Land</p>
                <ul>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                    <li>Project</li>
                </ul>
            </div>
        </div>
        
    </body>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</html>
