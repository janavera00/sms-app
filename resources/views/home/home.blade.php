@extends('layout.app')
@section('content')

    <body style="background: url(&quot;assets/img/BG/bg.jpg&quot;) center / cover;">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: #0d1b28;">
            <div class="container-fluid"><a class="navbar-brand" href="/" style="color: rgb(255,255,255);">Bula Central
                    School</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span
                        class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login"
                            style="color: rgb(255,255,255);margin-right: 16px; cursor: pointer;" data-bs-target="#modal-1" data-bs-toggle="modal" >Log In</a>
                            <<button class="btn btn-primary action-button" type="button" style="background: var(--bs-blue);color: rgba(255,255,255,0.9);" 
                            data-bs-target="#modal-2" data-bs-toggle="modal">Sign Up</button></span>
                </div>
@include('modal.login')                
@include('modal.signup')  
            </div>
        </nav>
        <div class="text-center about-me" style="margin-top: 139px;">
            <div class="d-lg-flex justify-content-lg-center intro-lead-in"><span
                    style="color: rgb(0,0,0);font-size: 40px;font-weight: bold;">Back To School!</span></div>
            <div class="d-lg-flex justify-content-lg-center intro-heading text-uppercase" style="margin-bottom: 15px;"><span
                    style="color: rgb(0,0,0);">It's Nice To Meet You</span></div><a class="btn btn-outline-primary"
                role="button" href="registration_form"
                style="color: rgb(255,255,255);background: #0d1b28;width: 373px;height: 50px;text-align: center;font-size: 25px;">Register
                Now!</a>
        </div>
        <div class="d-lg-flex justify-content-lg-center intro-heading text-uppercase"
            style="padding-bottom: 15px;margin-top: 20px;"><span
                style="color: rgb(0,0,0);border-radius: 20px;border-width: 2.66667px;border-style: solid;border-bottom-width: 2.66667px;border-bottom-style: solid;padding: 10px;">Registration
                starts: March 25 to april 3o</span></div>
        </div>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/Button-modal-ecommerce.js"></script>
        <script src="assets/js/listgridview.js"></script>
        <script src="assets/js/theme.js"></script>
    </body>
@endsection
