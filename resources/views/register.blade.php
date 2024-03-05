<<<<<<< HEAD
    {{-- nav --}}
    @include('partials/nav')

=======
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LoafYou</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
    <body class="reg-body">
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

              
>>>>>>> dev
        </div>
    <div class="container-fluid">
        {{-- sign up --}}
        <div class=" row signup">

            <div class="col text-center inner-div">
                <h1 class="white ">Sign up as...</h1>
            </div>


        </div>
        {{-- <div class="row">
            <div class="col  mt-5">

            </div>
        </div> --}}
        <div class="row justify-content-around role-section">
            <div class="col-lg-2 col-md-5 col-sm-8 role-box">
                <div class="text-center">
                    <img src="{{ asset('assets/images/user.jpg') }}" alt="" class="img-fluid">
                    <p class="bold-purple">User</p>
                    <a href="{{route('user')}}" class="btn custom-btn">Get started</a>
                </div>

            </div>
            <div class="col-lg-2 col-md-5 col-sm-8 role-box">
                <div class="text-center">
                    <img src="{{ asset('assets/images/landlord.jpg') }}" alt="landlord" class="img-fluid role-image">
                    <p class="bold-purple">Landlord</p>
<<<<<<< HEAD
                    <a href="{{ route('show_lad_register') }}" class="btn custom-btn">Get started</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 role-box">
                <div class="text-center">
                    <img src="{{ asset('assets/images/agent.jpg') }}" alt="agent" class="img-fluid">
                    <p class="bold-purple">Agents</p>
                    <a href="{{ route('show_lad_register') }}" class="btn custom-btn">Get started</a>
=======
                    <a href="{{route('user')}}" class="btn custom-btn">Get started</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 col-sm-8 role-box">
                <div class="text-center"> 
                    <img src="{{ asset('assets/images/agent.jpg') }}" alt="agent" class="img-fluid">
                    <p class="bold-purple">Agents</p>
                    <a href="{{route('user')}}" class="btn custom-btn">Get started</a>
>>>>>>> dev
                </div>
            </div>
            <div class="col-lg-2 col-md-5 col-sm-8 role-box">
                <div class="text-center">
                    <img src="{{ asset('assets/images/developer.jpg') }}" alt="developer" class="img-fluid">
                    <p class="bold-purple">Developer</p>
<<<<<<< HEAD
                    <a href="{{ route('show_lad_register') }}" class="btn custom-btn">Get started</a>
                </div>
=======
                    <a href="{{route('user')}}" class="btn custom-btn">Get started</a>
                </div>  
>>>>>>> dev
            </div>
        </div>

        {{-- bottom nav --}}
            @include('partials/bottom_nav')

        {{-- footer --}}
            @include('partials/footer')
<<<<<<< HEAD

=======
        
        </div> 
>>>>>>> dev

    </body>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</html>
