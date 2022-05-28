@extends('layout.app')
@section('content')
<body class="bg-gradient-primary" style="background: #0d1b28;">
    <div class="container" style="width: 979px;">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row justify-content-center align-items-center">
                    <div class="col" style="width: 652px;">
                        <div class="justify-content-center align-items-center align-content-center p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            {{-- Go to the AccountController --}}
                            <form class="user" action="{{ url('account') }}" method="POST">
                                {!! csrf_field() !!}
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><select class="form-select" style="padding: 16px;height: 52px;font-size: 13.8px;border-radius: 150px;" required="">
                                            <optgroup label="">
                                                <option value="Principal">Principal</option>
                                                <option value="teacher">Teacher</option>
                                                <option value="teacher">Parent</option>
                                            </optgroup>
                                        </select></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="examplePasswordInput-2" placeholder="Position" name="position" required=""></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xxl-4 mb-3 mb-sm-0"><input class="form-control form-control-user" type="text" id="examplePasswordInput-5" placeholder="FIrst Name" name="firstName" required=""></div>
                                    <div class="col-sm-6 col-xxl-4"><input class="form-control form-control-user" type="text" id="examplePasswordInput-3" placeholder="Middle Name" name="middleName"></div>
                                    <div class="col-sm-6 col-xxl-4"><input class="form-control form-control-user" type="text" id="examplePasswordInput-4" placeholder="Last Name" name="lastName" required=""></div>
                                </div>
                                <div class="mb-3"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email" required=""></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="email" id="exampleInputEmail-1" aria-describedby="emailHelp" placeholder="Contact Number" name="contactNo" required="" pattern="[0-9]" minlength="11"></div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><select class="form-select" style="padding: 16px;height: 52px;font-size: 13.8px;border-radius: 150px;" required="">
                                            <optgroup label="Gender">
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </optgroup>
                                        </select></div>
                                    <div class="col-sm-6"><span>Birth Date<input class="form-control" type="date" style="border-radius: 160px;height: 50px;" required=""></span></div>
                                </div>
                            
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput-1" placeholder="Password" name="password" required=""></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput-1" placeholder="Repeat Password" name="password_repeat" required=""></div>
                                    </div><a class="btn btn-primary d-block btn-user w-100" role="button" style="background: #0d1b28;width: 500px;" href="/">Register Account</a>
                                <hr>
                            </form>



                            <div class="text-center"><a class="small" href="#">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="/functions.login">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Button-modal-ecommerce.js"></script>
    <script src="assets/js/listgridview.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
@endsection