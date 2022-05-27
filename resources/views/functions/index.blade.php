@extends('layout.app')
@section('content')
<body style="background: url(&quot;assets/img/BG/bg.jpg&quot;) center / cover;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: #0d1b28;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Bula Central School</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href="login.html" style="color: rgb(255,255,255);margin-right: 16px;">Log In</a><a class="btn btn-light action-button" role="button" href="signup.html" style="background: var(--bs-blue);color: rgba(255,255,255,0.9);">Sign Up</a></span>
            </div>
        </div>
    </nav>
    <div class="text-center about-me" style="margin-top: 139px;">
        <div class="d-lg-flex justify-content-lg-center intro-lead-in"><span style="color: rgb(0,0,0);font-size: 40px;font-weight: bold;">Back To School!</span></div>
        <div class="d-lg-flex justify-content-lg-center intro-heading text-uppercase" style="margin-bottom: 15px;"><span style="color: rgb(0,0,0);">It's Nice To Meet You</span></div><a class="btn btn-outline-primary" role="button" href="registration_form.html" style="color: rgb(255,255,255);background: #0d1b28;width: 373px;height: 50px;text-align: center;font-size: 25px;" data-bs-target="#modal-1" data-bs-toggle="modal">Register Now!</a>
        <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>Registration Form</strong><br></h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="height: 440px;">
                        <div>
                            <section class="clean-hero">
                                <div style="background-position: center;background-size: cover;background-repeat: no-repeat;">
                                    <div class="d-flex justify-content-center align-items-center" style="height: inherit;min-height: initial;position: absolute;left: 0;width: 100%;">
                                        <div class="container bg-white" style="padding-bottom: 40px;margin-right: 12px;margin-left: 12px;padding-left: 6px;padding-right: 6px;">
                                            <div class="row">
                                                <div class="col-10 col-sm-10 col-md-10 offset-1 offset-sm-1 offset-md-1 text-start align-content-md-center">
                                                    <form method="post">
                                                        <div>
                                                            <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;font-size: 24px;font-weight: bold;"><strong>Grade Level and School Information</strong><br></label></div>
                                                            <div class="row">
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>School Type</strong><br></label>
                                                                    <div class="row" style="width: 212px;">
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-9" value="Public"><label class="form-check-label" for="formCheck-1">Public</label></div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-10" name="schoolType" value="Private"><label class="form-check-label" for="formCheck-1">Private</label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Previous Grade Level</strong><br></label><select class="form-select" style="margin-bottom: 20px;">
                                                                        <option value="Kindergarten" selected="">Kindergarten</option>
                                                                        <option value="Grade 1">Grade 1</option>
                                                                        <option value="Grade 2">Grade 2</option>
                                                                        <option value="Grade 3">Grade 3</option>
                                                                        <option value="Grade 4">Grade 4</option>
                                                                        <option value="Grade 5">Grade 5</option>
                                                                        <option value="Grade 6">Grade 6</option>
                                                                    </select></div>
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Previous Section</strong><br></label><input class="form-control" type="text" style="margin-bottom: 20px;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>School</strong>&nbsp;ID<br></label><input class="form-control" type="text" style="margin-bottom: 20px;"></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>School Name</strong><br></label><input class="form-control" type="text" style="margin-bottom: 20px;"></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>School Year</strong><br></label><input class="form-control" type="text" style="margin-bottom: 20px;"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>School Address</strong><br></label><input class="form-control" type="email"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="height: 4px;color: rgb(0,0,0);">
                                                        <div>
                                                            <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;font-size: 24px;font-weight: bold;"><strong>Student Information</strong><br></label></div>
                                                            <div class="form-group mb-3">
                                                                <div class="row">
                                                                    <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Learner Type</strong><br></label>
                                                                        <div class="row" style="width: 240px;">
                                                                            <div class="col">
                                                                                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="learnertype" value="Enrollee" required=""><label class="form-check-label" for="formCheck-1">Enrollee</label></div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="learnertype" value="Transferee" required=""><label class="form-check-label" for="formCheck-1">Transferee</label></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Enrolling Grade Level</strong><br></label><select class="form-select" style="margin-bottom: 20px;">
                                                                            <option value="Kindergarten" selected="">Kindergarten</option>
                                                                            <option value="Grade 1">Grade 1</option>
                                                                            <option value="Grade 2">Grade 2</option>
                                                                            <option value="Grade 3">Grade 3</option>
                                                                            <option value="Grade 4">Grade 4</option>
                                                                            <option value="Grade 5">Grade 5</option>
                                                                            <option value="Grade 6">Grade 6</option>
                                                                        </select></div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>First Name</strong></label><input class="form-control" type="text" style="margin-bottom: 20px;" maxlength="30" required="" name="firstName"></div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Middle Name</strong></label><input class="form-control" type="text" style="margin-bottom: 20px;" maxlength="20" name="middleName"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Last Name</strong></label><input class="form-control" type="text" style="margin-bottom: 20px;" maxlength="30" required="" name="lastName"></div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Extension Name</strong></label><input class="form-control" type="text" style="margin-bottom: 20px;" name="extensionName"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <div class="row">
                                                                    <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Address</strong><br></label><input class="form-control" type="text" style="margin-bottom: 20px;" required="" name="address"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>With LRN</strong><br></label>
                                                                    <div class="row" style="width: 212px;">
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-7" name="withLRN" value="true" required=""><label class="form-check-label" for="formCheck-1">Yes</label></div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-8" name="withLRN" value="false" required=""><label class="form-check-label" for="formCheck-1">No</label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>LRN number</strong><br></label><input class="form-control" type="text" style="margin-bottom: 20px;" maxlength="12" name="LRN" pattern="[0-9]"></div>
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Birth Date</strong><br></label><input class="form-control" type="date" name="birthDate"></div>
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Mother Tongue</strong><br></label><input class="form-control" type="text" style="margin-bottom: 20px;" name="motherTongue" required=""></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Gender</strong><br></label>
                                                                    <div class="row" style="width: 212px;">
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="gender" value="Male" required=""><label class="form-check-label" for="formCheck-1">Male</label></div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4" name="gender" value="Female" required=""><label class="form-check-label" for="formCheck-1">Female</label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Nationality</strong><br></label><input class="form-control" type="text" style="margin-bottom: 20px;" required="" maxlength="20"></div>
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Relgion</strong><br></label><select class="form-select" required="" style="margin-bottom: 20px;">
                                                                        <option value="11" selected="">Roman Catholic</option>
                                                                        <option value="12">Iglesia ni Cristo</option>
                                                                        <option value="13">Muslim</option>
                                                                        <option value="14">Others</option>
                                                                    </select></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Contact Number</strong><br></label><input class="form-control" type="text" style="margin-bottom: 20px;" placeholder="09" pattern="+[0-9]" minlength="11" maxlength="13"></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Email Address</strong><br></label><input class="form-control" type="text" style="margin-bottom: 20px;" placeholder="example@email.com" required=""></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Does the learner have any disability or condition?</strong><br></label>
                                                                    <div class="row" style="width: 212px;">
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-5" name="isPWD" required="" value="true"><label class="form-check-label" for="formCheck-1">Yes</label></div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-6" name="isPWD" value="false" required=""><label class="form-check-label" for="formCheck-1">No</label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Please Specify</strong><br></label><textarea class="form-control" name="typePWD"></textarea></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="height: 4px;color: rgb(0,0,0);">
                                                        <div>
                                                            <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;font-size: 24px;font-weight: bold;"><strong>Parent Information</strong><br></label></div>
                                                            <div class="row">
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Have you enrolled a student in this school?</strong><br></label>
                                                                    <div class="row" style="width: 212px;">
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-13" name="studentEnrolled" required=""><label class="form-check-label" for="formCheck-1">Yes</label></div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-14" name="studentEnrolled" required=""><label class="form-check-label" for="formCheck-1">No</label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Reference No.</strong><br></label><input class="form-control" type="text" style="margin-bottom: 20px;" required=""></div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Parent or Guardian</strong></label>
                                                                    <div class="row" style="width: 212px;">
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-11" name="parent" required=""><label class="form-check-label" for="formCheck-1">Parent</label></div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-12" name="parent" required=""><label class="form-check-label" for="formCheck-1">Guardian</label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Gender</strong><br></label>
                                                                    <div class="row" style="width: 212px;">
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-17" name="gender" required=""><label class="form-check-label" for="formCheck-1">Male</label></div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-18" name="gender" required=""><label class="form-check-label" for="formCheck-1">Female</label></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>First Name</strong></label><input class="form-control" type="text" style="margin-bottom: 20px;" required=""></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Middle Name</strong></label><input class="form-control" type="text" style="margin-bottom: 20px;"></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Last Name</strong></label><input class="form-control" type="text" style="margin-bottom: 20px;" required=""></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Contact Number</strong><br></label></div><input class="form-control" type="tel" style="margin: 0px;margin-top: -16px;">
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Email Address</strong><br></label><input class="form-control" type="email"></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group mb-3"><label class="form-label" style="margin-bottom: 10px;color: #505E6C;"><strong>Educational Attainment</strong><br></label><input class="form-control" type="email"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr style="height: 4px;color: rgb(0,0,0);">
                                                        <div class="row">
                                                            <div class="col-md-6" style="margin-top: 20px;"><a class="btn btn-secondary d-block d-lg-flex justify-content-lg-center w-100" role="button" href="#" data-bs-target="#modal-1" data-bs-toggle="modal">Cancel</a>
                                                                <div class="modal fade" role="dialog" tabindex="-1" id="modal-4">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Are you sure</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Are you sure you want to cancel your registration</p>
                                                                            </div>
                                                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">No</button><a class="btn btn-primary" role="button" href="index.html">Yes</a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-top: 20px;"><button class="btn btn-primary d-block d-lg-flex justify-content-lg-center w-100" id="submitButton" type="submit" data-bs-target="#modal-2" data-bs-toggle="modal">Submit</button>
                                                                <div class="modal fade" role="dialog" tabindex="-1" id="modal-3">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Reference Number</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Save this information:&nbsp;</p>
                                                                            </div>
                                                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
                                                                    <div class="modal-dialog modal-fullscreen-xl-down" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Preview</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Content Here</p>
                                                                            </div>
                                                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button" data-bs-target="#modal-3" data-bs-toggle="modal">Submit</button></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-lg-flex justify-content-lg-center intro-heading text-uppercase" style="padding-bottom: 15px;margin-top: 20px;"><span style="color: rgb(0,0,0);border-radius: 20px;border-width: 2.66667px;border-style: solid;border-bottom-width: 2.66667px;border-bottom-style: solid;padding: 10px;">Registration starts: March 25 to april 3o</span></div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Button-modal-ecommerce.js"></script>
    <script src="assets/js/listgridview.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

@endsection