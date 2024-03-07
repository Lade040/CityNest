{{-- nav --}}
@include('partials/nav')

{{-- form section --}}
<div class="row reg-form justify-content-center">
    <div class="col-6 form-section text-center">
        <h2 class="bold-purple mb-5">Register As <br/> Agent, Landlord or Developer</h2>
        <div class="row">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{Session::get('error')}}</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{ route('lad_register') }}" method="post">
                @csrf
                <div class="col mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Fullname">
                </div>
                <div class="col mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>

                    <input type="hidden" name="usertype" id="usertype" value="2" class="form-control" />

                <div class="col mb-3">
                    <input type="password" name="password" id="pass" class="form-control" placeholder="Password">
                </div>
                <div class="col mb-3">
                    <input type="password" name=" b" id="confirm_pass" class="form-control" placeholder="Confirm Password">
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
                    <p class="bold-purple mt-3">Already registered ? <a href="" class="link">Sign In</a></p>
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
