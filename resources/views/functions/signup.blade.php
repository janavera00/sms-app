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
                            <form class="user">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col"><select class="form-select"
                                                style="padding: 16px;height: 52px;font-size: 13.8px;border-radius: 150px;">
                                                <optgroup label="">
                                                    <option value="principal">Principal</option>
                                                    <option value="teacher">Teacher</option>
                                                    <option value="parent">Parent</option>
                                                </optgroup>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="row mb-3"
                                    style="margin-right: 0px;margin-bottom: 0px;margin-left: 0px;">
                                    <div class="row d-lg-flex justify-content-center align-items-center"
                                        style="width: 840px;padding-left: 0px;padding-right: 0px;margin-left: 0px;">
                                        <div class="col mb-3 mb-sm-0" style="width: 297px;"><input
                                                class="form-control form-control-user" type="text" id="exampleFirstName"
                                                placeholder="First Name" name="first_name"></div>
                                        <div class="col mb-3 mb-sm-0" style="width: 297px;"><input
                                                class="form-control form-control-user" type="text"
                                                id="exampleFirstName-1" placeholder="Middle Name" name="middle_name">
                                        </div>
                                        <div class="col" style="width: 297px;"><input
                                                class="form-control form-control-user" type="text" id="exampleFirstName"
                                                placeholder="Last Name" name="last_name"></div>
                                    </div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email"
                                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address"
                                        name="email"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                            type="password" id="examplePasswordInput" placeholder="Password"
                                            name="password"></div>
                                    <div class="col-sm-6"><input class="form-control form-control-user"
                                            type="password" id="exampleRepeatPasswordInput"
                                            placeholder="Repeat Password" name="password_repeat"></div>
                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit"
                                    style="background: #0d1b28;width: 500px;">Register Account</button>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="/forget-password">Forgot
                                    Password?</a></div>
                            <div class="text-center"><a class="small" href="/login">Already have an
                                    account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js?h=1b8a310afe780e04ab2f4e009f640869"></script>
@endsection