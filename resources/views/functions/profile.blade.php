@extends('layout.app')
@section('content')
<body id="page-top">
    <div id="wrapper">
    @include('components._navbar')
<div class="container-fluid">
<h3 class="text-dark mb-4">Profile</h3>
<div class="row mb-3">
<div class="col-lg-4">
    <div class="card mb-3">
        <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4"
                src="/assets/img/avatars/avatar1.jpeg?h=0ecc82101fb9a10ca459432faa8c0656"
                width="160" height="160">
            <div class="mb-3"><button class="btn btn-primary btn-sm" type="button"
                    style="background: #0d1b28;">Change Photo</button></div>
        </div>
    </div>
</div>
<div class="col-lg-8">
    <div class="row mb-3 d-none">
        <div class="col">
            <div class="card textwhite bg-primary text-white shadow">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <p class="m-0">Peformance</p>
                            <p class="m-0"><strong>65.2%</strong></p>
                        </div>
                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                    </div>
                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5%
                        since last month</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card textwhite bg-success text-white shadow">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <p class="m-0">Peformance</p>
                            <p class="m-0"><strong>65.2%</strong></p>
                        </div>
                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                    </div>
                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5%
                        since last month</p>
                </div>
            </div>
        </div>
    </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="username"><strong>Birth
                                                                    Date</strong><br></label><input
                                                                class="form-control" type="text" id="username"
                                                                placeholder="01/01/2000" name="username"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="email"><strong>Email Address</strong></label><input
                                                                class="form-control" type="email" id="email"
                                                                placeholder="user@example.com" name="email"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="first_name"><strong>First
                                                                    Name</strong></label><input class="form-control"
                                                                type="text" id="first_name" placeholder="John"
                                                                name="first_name"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="last_name"><strong>Middle
                                                                    Name</strong></label><input class="form-control"
                                                                type="text" id="last_name" placeholder="Ben"
                                                                name="middle_name"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label"
                                                                for="last_name"><strong>Last Name</strong></label><input
                                                                class="form-control" type="text" id="last_name-1"
                                                                placeholder="Doe" name="last_name"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm"
                                                        type="submit" style="background: #0d1b28;">Save
                                                        Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/script.min.js?h=1b8a310afe780e04ab2f4e009f640869"></script>
</body>
@endsection