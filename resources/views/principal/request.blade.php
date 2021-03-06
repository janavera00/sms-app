@extends('layout.app')
@section('content')

    <body id="page-top">
        <div id="wrapper">
            <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
                style="background: #0d1b28;">
                <div class="container-fluid d-flex flex-column p-0"><a
                        class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                        <div class="sidebar-brand-text mx-3"><span style="font-family: Nunito, sans-serif;"></span><img
                                src="assets/img/logo.png" style="width: 82px;margin-top: 17px;"></div>
                    </a>
                    <hr class="sidebar-divider my-0">
                    <ul class="navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item"><a class="nav-link" href="brigada.html"><i
                                    class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="profile.html"><i
                                    class="fas fa-user"></i><span>Profile</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="section.html"><i
                                    class="fa fa-sticky-note"></i><span>Section</span></a></li>
                        <li class="nav-item"><a class="nav-link"><i
                                    class="fa fa-bookmark"></i><span>Brigada</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="masterlist"><i
                                    class="fa fa-list"></i><span>Master List</span></a></li>
                        <li class="nav-item"><a class="nav-link" href=""><i
                                    class="fas fa-table"></i><span>Notice Board</span></a></li>
                        <li class="nav-item"><a class="nav-link" href=""><i
                                    class="fa fa-envelope-o"></i><span>Request</span></li>
                        <li class="nav-item"><a class="nav-link" href=""><i
                                    class="fa fa-sitemap"></i><span>Account Management</span></li>
                    </ul>
                    <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                            id="sidebarToggle" type="button"></button></div>
                </div>
            </nav>
            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                        <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                                id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                            <ul class="navbar-nav flex-nowrap ms-auto">
                                <li class="nav-item dropdown no-arrow mx-1">
                                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                            aria-expanded="false" data-bs-toggle="dropdown" href="/noticeboard.html"><span
                                                class="badge bg-danger badge-counter">3+</span><i
                                                class="fas fa-bell fa-fw"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                            <h6 class="dropdown-header">alerts center</h6><a
                                                class="dropdown-item d-flex align-items-center" href="#"></a>
                                        </div>
                                    </div>
                                </li>
                                <div class="d-none d-sm-block topbar-divider"></div>
                                <li class="nav-item dropdown no-arrow">
                                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                            aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                                class="d-none d-lg-inline me-2 text-gray-600 small">
                                                {{ $acc->id }}</span><img class="border rounded-circle img-profile"
                                                src="/assets/img/avatars/avatar1.jpeg?h=0ecc82101fb9a10ca459432faa8c0656"></a>
                                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                                class="dropdown-item" href="/profile"><i
                                                    class="fas fa-user   fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="/"><i
                                                    class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container-fluid">
                        <div class="d-sm-flex justify-content-between align-items-center mb-4">
                            <h3 class="text-dark mb-0">Request</h3>
                        </div>
                        <div class="d-sm-flex justify-content-between align-items-center mb-4">
                            <div class="card flex-grow-1">
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Postion</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Cyrel Pellosis</th>
                                                <td>Principal</td>
                                                <td>Teacher</td>
                                                <td><button type="button" class="btn btn-success">Activate</button>
                                                    <button type="button" class="btn btn-success">Deactivate</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <footer class="bg-white sticky-footer">
                            <div class="container my-auto">
                                <div class="text-center my-auto copyright"><span>Copyright ?? Brand 2022</span></div>
                            </div>
                        </footer>
                    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i
                            class="fas fa-angle-up"></i></a>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                <script src="/assets/js/script.min.js?h=1b8a310afe780e04ab2f4e009f640869"></script>
    </body>
@endsection
