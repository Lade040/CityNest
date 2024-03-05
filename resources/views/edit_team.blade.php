@extends("layouts/other_dashboard")

@section("page_title")
    CityNest: Profile
@endsection

@section("dash_side")

<div class="row greeting-section justify-content-around">
    <div class="col-3 customised">
        <a href="{{route('profile')}}" class="" >Profile</a>
    </div>
    <div class="col-3 customised">
        <a href="{{route('team_members')}}" class="">Team Members</a>
    </div>
    <div class="col-3 customised-active">
        <a href="{{route('edit_team')}}" class="">Edit Profile</a>
    </div>
</div>
<div class="row profile-details">
    
</div>
@endsection