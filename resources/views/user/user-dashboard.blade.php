<!DOCTYPE html>
    <html lang="en">
        <head>
            <!-- Required meta tags -->
            @include("user/user-css")
        </head>

        <body>
            <!-- required sidebar -->
            @include("user/user-sidebar")

            <div class="content">


                @include("user/user-topnav")


                <!-- required inner -->
                @include("user/user-body")

            </div>
            <!-- plugins:js -->
            @include("user/user-script")
        </body>
    </html>

