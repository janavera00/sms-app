@extends('layout.app')
@section('content')

<body class="bg-gradient-primary" style="background: #0d1b28;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card shadow-lg justify-content-center align-items-center o-hidden border-0 my-5">
                    <div class="card-body d-inline-flex p-0">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-2">Forgot Your Password?</h4>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                                    </div>
                                    <form class="user">
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email"></div><button class="btn btn-primary d-block btn-user w-100" type="submit">Reset Password</button>
                                    </form>
                                    <div class="text-center">
                                        <hr><a class="small" href="/signup">Create an Account!</a>
                                    </div>
                                    <div class="text-center"><a class="small" href="/login">Already have an account? Login!</a></div>
                                </div>
                            </div>
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