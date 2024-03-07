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
        <a href="{{route('edit_profile')}}" class="">Edit Profile</a>
    </div>
</div>
<div class="row profile-details">
    <div class="col-12 mb-2">
        <h6 class="bold-purple">My Profile</h6>
    </div>
    <div class="col-md-4">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" name="" id="" placeholder="Userfname" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="fname" class="form-label">Last Name</label>
        <input type="text" name="" id="" placeholder="Userlname" class="form-control">
    </div>
    <div class="col-md-4">
        <label for="fname" class="form-label">Business Name</label>
        <input type="text" name="" id="" placeholder="Userbname" class="form-control">
    </div>
   
    <div class="col-md-6 mt-4">
            <label for="" class="form-label">Upload file</label>
            <input type="file" name="" id="" class="form-control" >
    </div>
    
    
</div>
<div class="row profile-details">
    <div class="col-12 mb-2">
        <h6 class="bold-orange">Enter password if only you want to change it</h6>
    </div>
    <div class="col-md-6">
        <label for="pass" class="form-label">Password</label>
        <input type="password" name="" id=""  class="form-control">
    </div>
    <div class="col-md-6">
        
        <label for="cpass" class="form-label">Confirm Password</label>
        <input type="password" name="" id=""  class="form-control">
    </div>
</div>
<div class="row profile-details">
    <div class="col-12 mb-2">
        <h6 class="bold-purple">Contact</h6>
    </div>
    <div class="col-12 mb-4">
        <label for="pass" class="form-label">Phone Number</label>
        <input type="text" name="" id=""  class="form-control">
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">WhatsApp Country Code</label>
        <select name="" id="" class="form-control">
            <option value="select">--select--</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">WhatsApp Number</label>
        <input type="text" name="" id=""  class="form-control">
    </div>
    <div class="col-12 mt-4">
        <label for="" class="form-label">Email</label>
        <input type="text" name="" id="" placeholder="myemail@gmail.com"  class="form-control">
    </div>
</div>
<div class="row profile-details">
    <div class="col-12 mb-2">
        <h6 class="bold-purple">My Address</h6>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">My State</label>
        <select name="" id="" class="form-control">
            <option value="">--select--</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="" class="form-label">My LGA</label>
        <select name="" id="" class="form-control">
            <option value="">--select--</option>
        </select>
    </div>
</div>
<div class="row profile-details">
    <div class="col-12 mb-2">
        <h6 class="bold-purple">About your business</h6>
    </div>
    <div class="col-12">
       <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Describe your business"></textarea>
    </div>
    <div class="col-12">
        <h6>Services your business provides</h6>
    </div>
    <div class="col-12">
        <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder=""></textarea>
     </div>
</div>
@endsection