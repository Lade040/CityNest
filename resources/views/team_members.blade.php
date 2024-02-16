@extends("layouts/other_dashboard")

@section("page_title")
    CityNest: Profile
@endsection

@section("dash_side")

<div class="row greeting-section justify-content-around">
    <div class="col-3 customised">
        <a href="{{route('profile')}}" class="" >Profile</a>
    </div>
    <div class="col-3 customised-active">
        <a href="{{route('team_members')}}" class="">Team Members</a>
    </div>
    <div class="col-3 customised">
        <a href="{{route('edit_team')}}" class="">Edit Profile</a>
    </div>
</div>
<div class="row profile-details">
    <div class="col-12 mb-3 team-members">
        <p>Team Members</p>
    </div>
    <div class="col-12 create-team">
        
        <button class="btn btn-sm custom-btn">Create Team Member</button>
    </div>
    <div class="col-4 custom-border">
        <p>Team Member Photo</p>
    </div>
    <div class="col-3 custom-border">
        <p>Team Member </p>
    </div>
    <div class="col-2 custom-border">
        <p>Location</p>
    </div>
    <div class="col-2 custom-border">
        <p>Action</p>
    </div>
</div>
@endsection