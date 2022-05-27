@extends('layout.app')
@section('content')
<body style="background: url(&quot;/assets/img/BG/bg.jpg?h=64c7e1592ada5a0f9bb3a3f936a3bbb2&quot;) center / cover;">
    <!-- Start: Navigation with Button -->
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-button" style="background: #0d1b28;">
        <div class="container">
            <a class="navbar-brand" href="/" style="color: rgb(255,255,255);">Bula Central School</a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                </ul>
                <span class="navbar-text actions">
                    <a class="login" href="/login" style="color: rgb(255,255,255);margin-right: 16px;">Log In</a>
                    <a class="btn btn-light action-button" role="button" href="/signup"
                        style="background: var(--bs-blue);color: rgba(255,255,255,0.9);">Sign Up</a>
                </span>
            </div>
        </div>
    </nav><!-- End: Navigation with Button -->
    <div class="text-center about-me" style="margin-top: 139px;">
        <div class="d-lg-flex justify-content-lg-center intro-lead-in"><span
                style="color: rgb(0,0,0);font-size: 40px;font-weight: bold;">Back To School!</span></div>
        <div class="d-lg-flex justify-content-lg-center intro-heading text-uppercase" style="margin-bottom: 15px;"><span
                style="color: rgb(0,0,0);">It's Nice To Meet You</span></div><a class="btn btn-outline-primary"
            role="button" href="/registration"
            style="color: rgb(255,255,255);background: #0d1b28;width: 373px;height: 50px;text-align: center;font-size: 25px;">Registration
            Form</a>
        <div class="d-lg-flex justify-content-lg-center intro-heading text-uppercase" style="margin-bottom: 15px;"><span
                style="margin-top: 23px;color: rgb(0,0,0);">Registration starts: March 25 to april 3o</span></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js?h=1b8a310afe780e04ab2f4e009f640869"></script>
</body>
@endsection