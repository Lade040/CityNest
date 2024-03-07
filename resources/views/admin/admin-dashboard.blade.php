{{-- <x-app-layout> --}}

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- Required meta tags -->
            @include("admin/admincss")
        </head>
        <body class="dashboard dashboard_1">
            <div class="full_container">
               <div class="inner_container">

                    <!-- required sidebar -->
                    @include("admin/adminsidebar")
                <div id="content">

                    <!-- required topbar -->
                    @include("admin/admintopbar")

                    <!-- required inner -->
                    {{-- @include("admin/adminbody") --}}
                </div>


                </div>
            </div>
            <!-- plugins:js -->
            @include("admin/adminscript")
            <!-- End custom js for this page -->
        </body>
    </html>

    {{-- </x-app-layout> --}}
