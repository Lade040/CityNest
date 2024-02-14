@include('partials/nav')

    <div class="container-fluid">


        {{-- Search section --}}
        <div class="row search-section justify-content-center">

                <div class="col-9 search-bar">
                    <form class="search-form" role="search" action="" method="">
                        @csrf
                    <div class="row">
                        <div class="col-md-12 search-title text-center ">
                            <h1>Find your next abode</h1>
                        </div>
                    </div>

                    <div class="row gx-2 category-radio">
                        <div class="col-md-3  ">
                            <input type="radio" class="btn-check  " name="category" id="buy" autocomplete="off" value="Buy" checked>
                            <label class="btn  category-selection" for="buy">Buy</label>
                        </div>
                        <div class="col-md-3 ">
                            <input type="radio" class="btn-check " name="category" id="rent" value="Rent" autocomplete="off">
                            <label class="btn category-selection" for="rent">Rent</label>
                        </div>
                        <div class="col-md-3 ">
                            <input type="radio" class="btn-check " name="category" id="shortlet" value="Shortlet" autocomplete="off" >
                            <label class="btn category-selection" for="shortlet">Shortlet</label>
                        </div>
                        <div class="col-md-3 ">
                            <input type="radio" class="btn-check " name="category" id="land" value="Land" autocomplete="off">
                            <label class="btn category-selection" for="land">Land</label>
                        </div>
                    </div>
                    
                        <div class="row g-0">
                            <div class="col-md-4 ">
                            <input class="form-control search-option" type="search" placeholder="Where's your dream house" aria-label="Search"> 
                            </div>
                            <div class="col-md-2">
                                <select name="type" id="" class="form-control search-option">
                                    <option value="type">Type</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="bed" id="" class="form-control search-option">
                                    <option value="bed">Bed</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="minprice" id="" class="form-control search-option">
                                    <option value="Min Price">Min Price</option>
                                </select>
                            </div>
                            <div class="col-md-2 ">
                                <select name="maxprice" id="" class="form-control search-option">
                                    <option value="Max Price">Max Price</option>
                                </select>
                            </div>
                            <div class="col-md-4 search-btn ms-auto">
                                <button class="btn btn-outline-success btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i> &nbsp; Search</button>
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
        </div>

        <div class="row justify-content-center property-section">
            <div class="col-10">
                <h5 class="bold-purple mb-5 ps-5">Featured Properties</h5>
            </div>
            
            <div class="col-md-5 col-lg-3 featured">
                <img src="{{ asset('assets/images/hero4.jpg') }}" alt="properties" class="img-fluid">
            </div>
            <div class="col-md-5 col-lg-3 featured">
                <img src="{{ asset('assets/images/hero4.jpg') }}" alt="properties" class="img-fluid">
            </div>
            <div class="col-md-5 col-lg-3 featured">
                <img src="{{ asset('assets/images/hero4.jpg') }}" alt="properties" class="img-fluid">
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