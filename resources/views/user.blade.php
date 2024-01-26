{{-- nav --}}
@include('partials/nav')

{{-- form section --}}
<div class="row reg-form justify-content-center">
    <div class="col-6 form-section text-center">
        <h2 class="bold-purple mb-5">Register</h2>
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
                <div class="col mb-3">
                    <input type="password" name="confirm_pass" id="confirm_pass" class="form-control" placeholder="Confirm Password">
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
                <div class="row  role-radio gx-3 mb-5">
                    <div class="col-md-3  ">
                        <input type="radio" class="btn-check  " name="role" id="buy" autocomplete="off" value="User" checked>
                        <label class="btn  role-selection" for="buy">User</label>
                    </div>
                    <div class="col-md-3 ">
                        <input type="radio" class="btn-check " name="role" id="rent"  value="Landlord" autocomplete="off">
                        <label class="btn role-selection" for="rent">Landlord</label>
                    </div>
                    <div class="col-md-3 ">
                        <input type="radio" class="btn-check " name="role" id="shortlet" value="Agent" autocomplete="off" >
                        <label class="btn role-selection" for="shortlet">Agent</label>
                    </div>
                    <div class="col-md-3 ">
                        <input type="radio" class="btn-check " name="role" id="land" value="Developer" autocomplete="off">
                        <label class="btn role-selection" for="land">Developer</label>
                    </div>
                    <div class="col mt-5">
                        <p class="bold-purple">By clicking on "Sign Up" you confirm that you agree to our website <a href="" class="link">Terms of use</a></p>
                    </div>
                    
                </div>
                <div class="d-grid gap-2 col mx-auto">
                    <input type="submit" name="sign_up" id="sign_up" value="Sign Up" class="btn btn-large  custom-btn">
                </div>
                <div>
                    <p class="bold-purple mt-3">Already registered?, <a href="" class="link">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- bottom nav --}}
@include('partials/bottom_nav')

{{-- footer --}}
@include('partials/footer')

@push('styles')
    <link rel="stylesheet" href="/laravel/citynest/public/assets/css/custom.css">
@endpush
</body>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
</html>