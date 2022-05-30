<div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create an Account!<br></h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="justify-content-center align-items-center align-content-center p-5" style="margin-top: -51px;">
                    <div class="text-center"></div>
                    <form class="user" action="{{ url('/signup') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <select class="form-select" style="padding: 16px;height: 52px;font-size: 13.8px;border-radius: 150px;" required="" name="type">
                                    <option value="principal">Principal</option>
                                    <option value="teacher">Teacher</option>
                                </select></div>
                            <div class="col-sm-6"><input class="form-control form-control-user" type="text" id="examplePasswordInput-2" placeholder="Position" name="position" required=""></div>
                        </div>
                        <div id = "user">
                            <div class="row mb-3">
                                <div class="col-sm-6" style="width: 694px;">
                                    <input class="form-control form-control-user" type="text" id="examplePasswordInput-5" placeholder="FIrst Name" name="fname" required="" style="margin-bottom: 11px;width: 675px;">
                                    <input class="form-control form-control-user" type="text" id="examplePasswordInput-3" placeholder="Middle Name" name="mname" style="margin-bottom: 11px;width: 675px;">
                                    <input class="form-control form-control-user" type="text" id="examplePasswordInput-4" placeholder="Last Name" name="lname" required="" style="margin-bottom: 11px;width: 675px;"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email" required=""></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="number" id="exampleInputEmail-2" aria-describedby="emailHelp" placeholder="Contact Number" name="contactNo" required="" pattern="[0-9]"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><select class="form-select" style="padding: 16px;height: 52px;font-size: 13.8px;border-radius: 150px;" required="" name="gender">
                                        <optgroup label="Gender">
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        </optgroup>
                                    </select></div>
                                <div class="col-sm-6"><span>Birth Date<input class="form-control" type="date" style="border-radius: 160px;height: 50px;" required="" name="birthdate"></span></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput-1" placeholder="Password" name="pass" required=""></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput-1" placeholder="Repeat Password" name="pass_2" required=""></div>
                            </div>
                            <input type="submit" value="Register Account" class="btn btn-primary d-block btn-user w-100" style="background: #0d1b28;width: 500px;"><br>
                        </div>
                        <hr>
                        </form>
                        <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                        <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>