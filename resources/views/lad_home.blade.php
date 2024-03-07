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

                <!-- required inner -->
                @include("body")
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
