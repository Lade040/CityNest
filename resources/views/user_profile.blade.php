@extends("layouts/dashboard")

@section("page_title")
    City nest: User Profile
@endsection()

@section("dash_side")
    <h3 class="bold-purple ">Profile</h3>
    <div class="row">
        <form action="" method>
            @csrf
            <div class="col mb-3">
                <input type="text" name="name" class="form-control" placeholder="Fullname">
            </div>
            <div class="col mb-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="col mb-3">
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
            </div>
            
            <div class="row">
                <div class="col-3">
                    <p class="purple">Country code</p>
                    <select name="country_code" id="country_code" class="form-control">
                        <option value="+234">+234</option>
                    </select>
                </div>
                <div class="col-9 mb-3">
                    <p class="purple">Format</p>
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
            </div>
            <div class="d-grid gap-2 col mx-auto">
                <input type="submit" name="edit" id="sign_up" value="Edit Profile" class="btn btn-large  custom-btn">
            </div>
        </form>
    </div>
@endsection()