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

    {{-- nav --}}
    @include('partials/nav')

        </div>
        {{-- sign up --}}
        <div class=" row signup">

            <div class="col text-center inner-div">
                <h1 class="white ">Sign up as...</h1>
            </div>
        </div>

        <div class="row justify-content-around role-section">
            <div class="col-lg-2 col-md-5 role-box">
                <div class="text-center">
                    <img src="{{ asset('assets/images/user.jpg') }}" alt="" class="img-fluid">
                    <p class="bold-purple">User</p>
                    <a href="{{route('show-user-reg-form')}}" class="btn custom-btn">Get started</a>
                </div>
            </div>

            <div class="col-lg-2 col-md-5 col-sm-8 role-box">
                <div class="text-center">
                    <img src="{{ asset('assets/images/developer.jpg') }}" alt="developer" class="img-fluid">
                    <p class="bold-purple">Landlord</p>
                    <a href="{{ route('show_lad_register') }}" class="btn custom-btn">Get started</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 role-box">
                <div class="text-center">
                    <img src="{{ asset('assets/images/agent.jpg') }}" alt="agent" class="img-fluid">
                    <p class="bold-purple">Agents</p>
                    <a href="{{ route('show_lad_register') }}" class="btn custom-btn">Get started</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-5 role-box">
                <div class="text-center">
                    <img src="{{ asset('assets/images/developer.jpg') }}" alt="developer" class="img-fluid">
                    <p class="bold-purple">Developer</p>
                    <a href="{{ route('show_lad_register') }}" class="btn custom-btn">Get started</a>
                </div>
            </div>
        </div>

        {{-- bottom nav --}}
            @include('partials/bottom_nav')

        {{-- footer --}}
            @include('partials/footer')


        </div>
    </body>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</html>
