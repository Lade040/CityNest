@extends("layouts/other_dashboard")

@section("page_title")
    City Nest: Landlord Dashboard
@endsection()

@section("dash_side")
    <div class="row">
        <div class="greeting-section">
            <h3><button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </button>Hello username</h3>
        </div>
    </div>
    

    <div class="row">
        <div class="d-grid gap-2 col-11 mx-auto">
            <a href="#" class="btn post-btn">Post a Property</a>
        </div>
    </div>
    <div class="row dash-content justify-content-around">
        <div class="col-md-5 col-sm-10 dash-listings custom-col-1">
            <div class="row listings-section">
                <div class="col-3 list-link text-center">
                    <a href="">
                        <i class="fa-solid fa-house"></i>
                        <p>Listings</p>
                    </a>
                </div>
                <div class="col-5 listings-info">
                    <p>Total Listings:</p>
                    <p>Visible Listings</p>
                    <p>Expired Listings</p>
                </div>
                <div class="col-3 listing-view text-center">
                    <a href="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <p>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-10 dash-listings custom-col-1">
            <div class="row">
                <div class="col-5 list-link text-center">
                    <a href="">
                        <i class="fa-regular fa-credit-card ps-3"></i>
                        <p>Subscription</p>
                    </a>
                    
                </div>
                <div class="col-6 listings-info">
                    <p class="pt-5">Plan:</p>
                </div>

            </div>
        </div>
    </div>
    <div class="row dash-content justify-content-around ">
        <div class="col-md-5 col-sm-10 dash-listings">
            <div class="row listings-section">
                <div class="col-3 list-link text-center">
                    <a href="">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <p class="">Request</p>
                    </a>
                </div>
                <div class="col-5 listings-info">
                    <p>Request for :</p>
                    <p>Callback Leads</p>
                    <p>Client Leads</p>
                </div>
                <div class="col-3 listing-view text-center">
                    <a href="">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <p>View</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-5 list-link dash-listings custom-col text-center">
            <a href="">
                <i class="fa-solid fa-envelope"></i>
                <p>Messages</p>
            </a>
        </div>
        <div class="col-md-2 col-sm-5 list-link dash-listings custom-col text-center">
            <a href="">
                <i class="fa-regular fa-user"></i>
                <p>Profile</p>
            </a>
        </div>
    </div>
@endsection()