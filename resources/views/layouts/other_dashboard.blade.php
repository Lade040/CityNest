<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("page_title")</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
   
</head>
    <body class="other-user-dash">

    {{-- dashboard section --}}
    <div class="container-fluid navbar-collapse">
        <div class="row dashboard ">
            <div class="col-md-3 other-dash-nav">
                <h3 class="ps-3"><a href="{{route('index')}}" class="bold-purple"><i class="fa-solid fa-city bold-purple brand"></i>&nbsp;CityNest</a></h3>
                        {{-- <i class="fa-solid fa-bars" data-toggle="collapse" data-target="#menu-content" hidden></i> --}}
                
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul id="menu-content">
                        <li><a href="#"><i class="fa-solid fa-table-columns"></i>&nbsp;&nbsp;Dashboard</a></li>
                        <li><a href="#"><i class="fa-solid fa-arrow-up-from-bracket"></i></i>&nbsp;&nbsp;Post a Property</a></li>
                        <li><a href="#"><i class="fa-solid fa-house"></i>&nbsp;&nbsp;My Listings</a></li>
                        <li><a href="#"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;Callback Request</a></li>
                        <li><a href="#"><i class="fa-solid fa-envelope-open-text"></i>&nbsp;&nbsp;Client Requests</a></li>
                        <li><a href="#"><i class="fa-regular fa-credit-card"></i>&nbsp;&nbsp;Subscription</a></li>
                        <li><a href="{{route('profile')}}"><i class="fa-regular fa-user"></i>&nbsp;&nbsp;Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-9 other-dash-side">
                <div class="row nav-banner">
                    <div class="col-5 text-center" >
                        <h3><a href="{{route('index')}}" class="bold-white"><i class="fa-solid fa-city bold-white brand"></i>&nbsp;CityNest</a></h3>
                    </div>
                    <div class="col-2">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
                @yield("dash_side")
            </div>
        </div>
    </div>
       
    </body>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</html>
