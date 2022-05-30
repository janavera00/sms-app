<div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Welcome Back!<br></h4><button type="button"
                    class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="p-5" style="margin-top: -50px;margin-bottom: -50px;">
                    <form class="user" action="{{url ('/login')  }}" >
                        <div class="mb-3">
                            <div class="row">
                                <div class="col"><label class="form-label">Login
                                    as</label><select class="form-select"
                                    style="padding: 16px;height: 52px;font-size: 13.8px;border-radius: 150px;" name="type">
                                    <option value="principal">Principal</option>
                                    <option value="teacher">Teacher</option>
                                </select></div>
                            </div>
                        </div>
                        <div class="mb-3"><input class="form-control form-control-user"
                                type="email" id="exampleInputEmail-1" aria-describedby="emailHelp"
                                placeholder="Enter Email Address..." name="email" required=""></div>
                        <div class="mb-3"><input class="form-control form-control-user"
                                type="password" id="exampleInputPassword" placeholder="Password"
                                name="pass" required=""></div>
                        <div class="mb-3">
                            <div class="custom-control custom-checkbox small">
                                <div class="form-check"><input
                                        class="form-check-input custom-control-input" type="checkbox"
                                        id="formCheck-1"><label
                                        class="form-check-label custom-control-label"
                                        for="formCheck-1">Remember Me</label></div>
                            </div>
                        </div> 
                        <input class = "btn btn-primary d-block btn-user w-100" role="button" 
                        type="submit" value="LOGIN" class="btn btn-primary d-block btn-user w-100"  style="background: #0d1b28;"><br>
                        <hr>
                    </form>
                    <div class="text-center"><a class="small" href="forgot-password.html">Forgot
                            Password?</a></div>
                    <div class="text-center"><a class="small" href="signup.html">Create an
                            Account!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>