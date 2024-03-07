{{-- <x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        @include("lad/ladcss")
    </head>
    <body class="dashboard dashboard_1">
        <div class="full_container">
           <div class="inner_container">
        {{-- <div class="container-scroller"> --}}

                <!-- required sidebar -->
                @include("lad/sidebar")
            <div id="content">

                <!-- required topbar -->
                @include("lad/topbar")
                
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
                <!-- required inner -->
                @include("lad/body")
            </div>


        {{-- </div> --}}
            </div>
        </div>
        <!-- plugins:js -->
        @include("lad/script")
        <!-- End custom js for this page -->
    </body>
</html>

{{-- </x-app-layout> --}}
