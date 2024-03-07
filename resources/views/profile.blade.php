@extends("layouts/other_dashboard")

@section("page_title")
    CityNest: Profile
@endsection

@section("dash_side")
    <div class="row greeting-section justify-content-around">
        <div class="col-3 customised-active">
            <a href="{{route('profile')}}" class="" >Profile</a>
        </div>
        <div class="col-3 customised">
            <a href="{{route('team_members')}}" class="">Team Members</a>
        </div>
        <div class="col-3 customised">
            <a href="{{route('edit_profile')}}" class="">Edit Profile</a>
        </div>
    </div>
    <div class="row profile-details">
        <div class="col-10 mb-3">
            <h4 class="bold-purple">Personal Details</h4>
        </div>
        <div class="col-2 mb-3 text-end">
            <i class="fa-regular fa-pen-to-square bold-purple"></i>
        </div>
        <div class="col-md-9">
            <p><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Utah Iman</p>
            <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;Location</p>
            <p><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;Number</p>
            <p><i class="fa-brands fa-square-whatsapp"></i>&nbsp;&nbsp;WhatsApp</p>
            <p><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;Email</p>
        </div>
        <div class="col-md-3">
            <div class="col-5">
                <img src="{{asset("assets/images/dp.png")}}" alt="dp" class="img-fluid rounded-circle">
            </div>
            <div class="mt-2">
                <p><i class="fa-solid fa-circle-plus bold-purple"></i>&nbsp;&nbsp;Change Logo</p>
            </div>
        </div>
    </div>
    <div class="row profile-details">
        <div class="col-10 mb-3 ">
            <h4 class="bold-purple">Business Information</h4>
        </div>
        <div class="col-10">
            <p>Business Name</p>
            <p>Business Address</p>
        </div>
        <div class="col-10">
            <h4 class="bold-orange">Business Information</h4>
        </div>
        <div class="col-2">
            <i class="fa-regular fa-pen-to-square bold-purple"></i>
        </div>
    </div>

@endsection()