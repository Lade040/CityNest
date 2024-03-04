    {{-- nav --}}
    @include('partials/nav')

        </div>
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
            <div class="col-lg-2 col-md-5 role-box">
                <div class="text-center">
                    <img src="{{ asset('assets/images/user.jpg') }}" alt="" class="img-fluid">
                    <p class="bold-purple">User</p>
                    <a href="{{route('user')}}" class="btn custom-btn">Get started</a>
                </div>

            </div>
            <div class="col-lg-2 col-md-5 role-box">
                <div class="text-center">
                    <img src="{{ asset('assets/images/landlord.jpg') }}" alt="landlord" class="img-fluid role-image">
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


    </body>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</html>
