@extends('layout.app')
@section('content')
<body class="bg-gradient-primary" style="background: #0d1b28;">
    @include('sweetalert::alert');
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Welcome Back!</h4>
                            </div>
                            <form class="user">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col"><label class="form-label">Login
                                                as</label><select class="form-select"
                                                style="padding: 16px;height: 52px;font-size: 13.8px;border-radius: 150px;">
                                                <option value="Principal">Principal</option>
                                                <option value="teacher">Teacher</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email"
                                        id="exampleInputEmail-1" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address..." name="email"></div>
                                <div class="mb-3"><input class="form-control form-control-user"
                                        type="password" id="exampleInputPassword" placeholder="Password"
                                        name="password"></div>
                                <div class="mb-3">
                                    <div class="custom-control custom-checkbox small">
                                        <div class="form-check"><input class="form-check-input custom-control-input"
                                                type="checkbox" id="formCheck-1"><label
                                                class="form-check-label custom-control-label" for="formCheck-1">Remember
                                                Me</label></div>
                                    </div>
                                </div>
                                 <div class="btn btn-primary d-block btn-user w-100" style="background #0d1b28;"><a
                                        class="btn btn-primary d-block d-lg-flex justify-content-lg-center w-100"
                                                role="button" href="/dashboard">Login</a></div>
                                    <hr>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="/forget-password">Forgot
                                    Password?</a></div>
                            <div class="text-center"><a class="small" href="/signup">Create an
                                    Account!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js?h=1b8a310afe780e04ab2f4e009f640869"></script>
</body>
@endsection