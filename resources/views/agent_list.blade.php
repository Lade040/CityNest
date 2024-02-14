 @include('partials/nav')

        

    <div class="container-fluid">
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
            <div class="col-10 agent-div">
                <div class="row">
                    <div class="col-5">
                        <img src="{{ asset('assets/images/hero4.jpg') }}" alt="properties" class="img-fluid">
                        <div class="d-grid gap-2 col mx-auto mt-3">
                            <a href="" class="btn custom-btn">View agent</a>
                        </div>
                    </div>
                    <div class="col-5">
                        <h3 class="bold">Agent's Name</h3>
                        <p> Agent's address</p>
                        <p>Date registered</p>
                        <p>Agent's contact</p>
                    </div>

                </div>
            </div>
            <div class="col-10 agent-div">
                <div class="row">
                    <div class="col-5">
                        <img src="{{ asset('assets/images/hero4.jpg') }}" alt="properties" class="img-fluid">
                        <div class="d-grid gap-2 col mx-auto mt-3">
                            <a href="" class="btn custom-btn">View agent</a>
                        </div>
                    </div>
                    <div class="col-5">
                        <h3 class="bold">Agent's Name</h3>
                        <p> Agent's address</p>
                        <p>Date registered</p>
                        <p>Agent's contact</p>
                    </div>

                </div>
            </div>

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