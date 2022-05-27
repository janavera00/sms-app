@extends('layout.app')

@section('content')
<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
style="background: #0d1b28;">
{{-- Navbar content {Profile,Dashboard ETC} --}}
<div class="container-fluid d-flex flex-column p-0"><a
        class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="/dashboard">
        <div class="sidebar-brand-text mx-3"><span style="font-family: Nunito, sans-serif;"></span><img
                src="/assets/img/logo.png?h=4a63346ef60a08c71196c9dab2a4a0c6"
                style="width: 82px;margin-top: 17px;"></div>
    </a>
    <hr class="sidebar-divider my-0">
    <ul class="navbar-nav text-light" id="accordionSidebar">
        <li class="nav-item"><a class="nav-link" href="/dashboard"><i
                    class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
        <li class="nav-item"><a class="nav-link active" href="/profile"><i
                    class="fas fa-user"></i><span>Profile</span></a></li>
        <li class="nav-item"><a class="nav-link" href="/section"><i
                    class="fa fa-sticky-note"></i><span>Section</span></a></li>
        <li class="nav-item"><a class="nav-link"><i class="fa fa-bookmark"></i><span>Class
                    Record</span></a></li>
        <li class="nav-item"><a class="nav-link" href="/masterlist"><i
                    class="fa fa-list"></i><span>Master List</span></a></li>
        <li class="nav-item"></li>
        <li class="nav-item"><a class="nav-link" href="/noticeboard"><i
                    class="fas fa-table"></i><span>Notice Board</span></a></li>
        <li class="nav-item"></li>
        <li class="nav-item"></li>
    </ul>
    <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
            id="sidebarToggle" type="button"></button></div>
</div>
</nav>
<div class="d-flex flex-column" id="content-wrapper">
<div id="content">
   {{-- TOP NAVIGATION BAR --}}
    <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
        <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav flex-nowrap ms-auto">
                <li class="nav-item dropdown no-arrow mx-1">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                            aria-expanded="false" data-bs-toggle="dropdown" href="/noticeboard"><span
                                class="badge bg-danger badge-counter">3+</span><i
                                class="fas fa-bell fa-fw"></i></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                            <h6 class="dropdown-header">alerts center</h6><a
                                class="dropdown-item d-flex align-items-center" href="#">
                                <div class="me-3">
                                    <div class="bg-primary icon-circle"><i
                                            class="fas fa-file-alt text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">December 12, 2019</span>
                                    <p>A new monthly report is ready to download!</p>
                                </div>
                            </a><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="me-3">
                                    <div class="bg-success icon-circle"><i
                                            class="fas fa-donate text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">December 7, 2019</span>
                                    <p>$290.29 has been deposited into your account!</p>
                                </div>
                            </a><a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="me-3">
                                    <div class="bg-warning icon-circle"><i
                                            class="fas fa-exclamation-triangle text-white"></i></div>
                                </div>
                                <div><span class="small text-gray-500">December 2, 2019</span>
                                    <p>Spending Alert: We've noticed unusually high spending for your
                                        account.</p>
                                </div>
                            </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                Alerts</a>
                        </div>
                    </div>
                </li>
                <div class="d-none d-sm-block topbar-divider"></div>
                <li class="nav-item dropdown no-arrow">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                            aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                class="d-none d-lg-inline me-2 text-gray-600 small">Cyrel
                                Pellosis</span><img class="border rounded-circle img-profile"
                                src="/assets/img/avatars/avatar1.jpeg?h=0ecc82101fb9a10ca459432faa8c0656"></a>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a
                                class="dropdown-item" href="/profile"><i
                                    class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="/"><i
                                    class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
            </div>
            </nav>
                {{--  --}}
                
           