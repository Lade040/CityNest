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
    <body>

    {{-- dashboard section --}}
    <div class="container-fluid">
        <div class="row dashboard">
            <div class="col-md-3 dash-nav">
                <h3 ><a href="{{route('index')}}" class="bold-purple"><i class="fa-solid fa-city bold-purple"></i>&nbsp;CityNest</a></h3>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-table-columns"></i>&nbsp;&nbsp;Dashboard</a></li>
                    <li><a href="#"><i class="fa-regular fa-user"></i>&nbsp;&nbsp;Profile</a></li>
                    <li><a href="#"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;Log Out</a></li>
                </ul>
            </div>
            <div class="col-md-7 dash-side">
                @yield("dash_side")
            </div>
        </div>
    </div>
    
        
     
    </body>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</html>