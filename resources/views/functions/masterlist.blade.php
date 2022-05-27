@extends('layout.app')

@section('content')
<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
            style="background: #0d1b28;">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3"><span style="font-family: Nunito, sans-serif;"></span><img
                            src="/assets/img/logo.png?h=4a63346ef60a08c71196c9dab2a4a0c6"
                            style="width: 82px;margin-top: 17px;"></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="/dashboard"><i
                                class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/profile"><i
                                class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/section"><i
                                class="fa fa-sticky-note"></i><span>Section</span></a></li>
                    <li class="nav-item"><a class="nav-link"><i class="fa fa-bookmark"></i><span>Class
                                Record</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="/masterlist"><i
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
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                                class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Master List</h3>
                    <div class="card shadow">
                        <div class="card-header py-3" style="height: 58.4444px;">
                            <div class="row">
                                <div class="col text-start align-self-center">
                                    <p class="text-primary m-0 fw-bold">Student Info</p>
                                </div>
                                <div class="col text-end"><a class="btn btn-primary btn-sm d-none d-sm-inline-block"
                                        role="button" href="#" style="margin: 2px;padding: 7px 21px;"><i
                                            class="fas fa-download fa-sm text-white-50"></i>&nbsp;Import Excel Sheet</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                        <label class="form-label">Show&nbsp;<select
                                                class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label
                                            class="form-label"><input type="search"
                                                class="form-control form-control-sm" aria-controls="dataTable"
                                                placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid"
                                aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>LRN</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Grade Level</th>
                                            <th>Section</th>
                                            <th>Enroll Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>431110362501<br></td>
                                            <td>Airi Satou</td>
                                            <td>6</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2008/11/28</td>
                                        </tr>
                                        <tr>
                                            <td>232549531080<br></td>
                                            <td>Angelica Ramos</td>
                                            <td>7</td>
                                            <td>Grade 1<br></td>
                                            <td>Section A<br></td>
                                            <td>2009/10/09<br></td>
                                        </tr>
                                        <tr>
                                            <td>147042562804<br></td>
                                            <td>Ashton Cox</td>
                                            <td>6</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2009/01/12<br></td>
                                        </tr>
                                        <tr>
                                            <td>294805778381<br></td>
                                            <td>Bradley Greer</td>
                                            <td>6</td>
                                            <td>Grade 1<br></td>
                                            <td>Section A</td>
                                            <td>2012/10/13<br></td>
                                        </tr>
                                        <tr>
                                            <td>067952350662<br></td>
                                            <td>Brenden Wagner</td>
                                            <td>6</td>
                                            <td>Grade 1<br></td>
                                            <td>Section A</td>
                                            <td>2011/06/07<br></td>
                                        </tr>
                                        <tr>
                                            <td>Integration Specialist</td>
                                            <td>Brielle Williamson</td>
                                            <td>6</td>
                                            <td>Grade 1<br></td>
                                            <td>Section A</td>
                                            <td>2012/12/02<br></td>
                                        </tr>
                                        <tr>
                                            <td>475723347829<br></td>
                                            <td>Bruno Nash<br></td>
                                            <td>7</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2011/05/03<br></td>
                                        </tr>
                                        <tr>
                                            <td>Pre-Sales Support</td>
                                            <td>Caesar Vance</td>
                                            <td>6</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2011/12/12<br></td>
                                        </tr>
                                        <tr>
                                            <td>Sales Assistant</td>
                                            <td>Cara Stevens</td>
                                            <td>6</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2011/12/06<br></td>
                                        </tr>
                                        <tr>
                                            <td>Senior JavaScript Developer</td>
                                            <td>Cedric Kelly</td>
                                            <td>6</td>
                                            <td>Grade 1</td>
                                            <td>Section A</td>
                                            <td>2012/03/29<br></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>LRN</td>
                                            <td>Name</td>
                                            <td>Age</td>
                                            <td>Grade Level</td>
                                            <td>Section</td>
                                            <td>Enroll Date</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">
                                        Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav
                                        class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#"
                                                    aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#"
                                                    aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
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