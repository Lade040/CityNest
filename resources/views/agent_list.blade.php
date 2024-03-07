<<<<<<< HEAD
@extends('layouts/nav_footer_layouts')


        
@section('main_section')
    <div class="container-fluid">
=======
@include('partials/nav')


>>>>>>> CityNest/vic_CityNest
        {{-- Search section --}}
        <div class="row search-section-agent justify-content-center">

                <div class="col-10 search-bar">
                    <form class="search-form" role="search" action="" method="">
                        @csrf
                    <div class="row">
                        <div class="col-md-12 search-title text-center ">
                            <h1>Real Estate Agent</h1>
                        </div>
                    </div>

                        <div class="row g-1 justify-content-center">
                            <div class="col-md-5 ">
                                <input class="form-control search-option" type="search" placeholder="Search by name or location" aria-label="Search"> 
                            </div>
                            <div class="col-md-2">
                                <select name="type" id="" class="form-control search-option">
                                    <option value="type">Lagos</option>
                                </select>
                            </div>
                            <div class="col-md-2 ">
                                <button class="btn btn-outline-success btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i> &nbsp; Search</button>
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
        </div>

        <div class="row justify-content-center agent-section">
            <div class="col-10">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset('assets/images/hero4.jpg') }}" alt="properties" class="img-fluid">
                        <div>
                            <a href="" class="btn ">View agent</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <h3>Agent Name</h3>
                        <p> Agent's address</p>
                        <p>Date registered</p>
                    </div>

                </div>
            </div>
            
        </div>

<<<<<<< HEAD

    </div>
@endsection
=======
        {{-- footer --}}
        @include('partials/footer')
    </body>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</html>
>>>>>>> CityNest/vic_CityNest
