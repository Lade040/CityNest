<!DOCTYPE html>
<html lang="en">
<head>
    <title>CityNest</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
    <body class="padding-top login-body">
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
                                        <a class="nav-link" href="shop.php">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="shop.php">Sign Up</a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                  </nav>


        </div>
        {{-- sign in form --}}
        <div class=" row login justify-content-center">
            <div class="col-5 login-side text-center">
                <h1>Welcome Back</h1>
            </div>
            <div class="col-5 form-section">
                <div class="row text-center login-text">
                    <div class="col">
                        <h1 class="white">User Log In</h1>
                    </div>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('error')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="row login-input ">
                    <form action="{{ route('user-dashboard') }}" method="post">
                    @csrf
                    <div class="col">
                        <input type="text" name="email" class="form-control mb-3" placeholder="Email">

                        <input type="password" name="password" class="form-control mb-3" placeholder="Password">
                        <div class="text-end mb-3">
                            <p><a href="#" class=" white link">Forgot Password?</a></p>
                        </div>


                        <div class="d-grid gap-2 col mx-auto">
                            <input type="submit" name="login_btn" id="login" value="Login" class="btn btn-large custom-btn">
                        </div>


                    </div>
                </form>
            </div>

        </div>


    </div>
    {{-- bottom nav --}}
        @include('partials/bottom_nav')

    {{-- footer --}}
        @include('partials/footer')

    </body>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</html>
