@extends('dashboard.layout.master')
@section('content')
    <div id="dashboard">
        <div class="container-fluid px-0">
            <div class="d-flex" style="min-height: 100vh">

                <div id="sidebar-maximize-dash" class="border-end">

                    <div id="logo-dash" class="px-4 py-5">
                        <a href="/">
                            <span class="text-d-blue fs-3 fw-normal ls-2">ProGu</span>
                        </a>
                    </div>

                    <div id="sidebar-search-dash" class="px-4 pb-3">

                        <div class="rounded-pill border border-dark border-opacity-25 py-2 px-3 fs-7" style="margin-left: -15px;">
                            <span class="bg-white pe-2 text-muted" id="addon-wrapping"><i class="fa-solid fa-magnifying-glass fa-fw"></i></span>
                            <input type="text" class="p-0 border-0" placeholder="Search" aria-label="Search" aria-describedby="addon-wrapping">
                        </div>

                    </div>

                    <div id="sidebar-1-dash" class="px-4">

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1 pe-2"><i class="fa-solid fa-cubes fa-fw"></i></span>
                            <span class="fs-6 text-muted fw-normal">Dashboard</span>
                        </a>

                        <a href="" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1 pe-2"><i class="fa-solid fa-briefcase fa-fw"></i></span>
                            <span class="fs-6 text-muted fw-normal">Jobs</span>
                        </a>

                        <a href="" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1 pe-2"><i class="fa-solid fa-clipboard-user fa-fw"></i></span>
                            <span class="fs-6 text-muted fw-normal">Candidates</span>
                        </a>

                        <a href="" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1 pe-2"><i class="fa-solid fa-calendar-day fa-fw"></i></span>
                            <span class="fs-6 text-muted fw-normal">Calendar</span>
                        </a>

                    </div>

                    <div id="sidebar-2-dash" class="px-4 border-top">

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1 pe-2"><i class="fa-solid fa-circle-user fa-fw"></i></span>
                            <span class="fs-6 text-muted fw-normal">Account</span>
                        </a>

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1 pe-2"><i class="fa-solid fa-newspaper fa-fw"></i></span>
                            <span class="fs-6 text-muted fw-normal">Billing</span>
                        </a>

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1 pe-2"><i class="fa-solid fa-gear fa-fw"></i></span>
                            <span class="fs-6 text-muted fw-normal">Setting</span>
                        </a>

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1 pe-2"><i class="fa-solid fa-headset fa-fw"></i></span>
                            <span class="fs-6 text-muted fw-normal">Support</span>
                        </a>

                    </div>

                    <div id="sidebar-3-dash" class="px-4 border-top">

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1 pe-2"><i class="fa-solid fa-user-shield fa-fw"></i></span>
                            <span class="fs-6 text-muted fw-normal">Admin</span>
                        </a>

                    </div>

                </div>

                <div id="sidebar-minimize-dash" class="border-end d-none text-center">

                    <div id="sidebar-1-dash" class="px-4">

                        <a href="dashboard.html" class="d-block mt-3 py-3">
                            <span class="text-d-blue fs-7 fw-normal ls-2">ProGu</span>
                        </a>

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1"><i class="fa-solid fa-magnifying-glass fa-fw"></i></span>
                        </a>

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1"><i class="fa-solid fa-cubes fa-fw"></i></span>
                            <!-- <span class="fs-6 text-muted fw-normal">Dashboard</span> -->
                        </a>

                        <a href="" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1"><i class="fa-solid fa-briefcase fa-fw"></i></span>
                            <!-- <span class="fs-6 text-muted fw-normal">Jobs</span> -->
                        </a>

                        <a href="" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1"><i class="fa-solid fa-clipboard-user fa-fw"></i></span>
                            <!-- <span class="fs-6 text-muted fw-normal">Candidates</span> -->
                        </a>

                        <a href="" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1"><i class="fa-solid fa-calendar-day fa-fw"></i></span>
                            <!-- <span class="fs-6 text-muted fw-normal">Calendar</span> -->
                        </a>

                    </div>

                    <div id="sidebar-2-dash" class="px-4 border-top">

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1"><i class="fa-solid fa-circle-user fa-fw"></i></span>
                            <!-- <span class="fs-6 text-muted fw-normal">Account</span> -->
                        </a>

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1"><i class="fa-solid fa-newspaper fa-fw"></i></span>
                            <!-- <span class="fs-6 text-muted fw-normal">Billing</span> -->
                        </a>

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1"><i class="fa-solid fa-gear fa-fw"></i></span>
                            <!-- <span class="fs-6 text-muted fw-normal">Setting</span> -->
                        </a>

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1"><i class="fa-solid fa-headset fa-fw"></i></span>
                            <!-- <span class="fs-6 text-muted fw-normal">Support</span> -->
                        </a>

                    </div>

                    <div id="sidebar-3-dash" class="px-4 border-top">

                        <a href="dashboard.html" class="d-block py-3">
                            <span class="fs-6 text-muted ls-1"><i class="fa-solid fa-user-shield fa-fw"></i></span>
                            <!-- <span class="fs-6 text-muted fw-normal">Admin</span> -->
                        </a>

                    </div>

                </div>

                <div id="table-dash" class="flex-fill">

                    <div id="logo-dash" class="px-4 py-4 border-bottom d-flex align-items-center">
                        <a id="minimize-sidebar" class="text-muted me-auto">
                            {{-- <span class="fw-light me-2" style="font-size: 13px;"><i class="fa-solid fa-chevron-left fa-fw"></i></span><span class="text-d-blue fs-6">Back</span> --}}
                        </a>
                        <a id="dropdown-dash" class="d-flex align-items-center text-d-blue">
                            <div id="name-dash" class="text-end">
                                <span class="fs-6 text-muted me-2 d-block">Ahmad Giofadhil</span>
                                <span class="fs-7 text-muted me-2">giofadhil.ahmad@gmail.com</span>
                            </div>
                            <span><img src="pub/images/avatar.jpg" class="rounded-circle" width="40" height="40" alt=""></span>
                            <span class="ms-2" style="font-size: 13px;"><i class="fa-solid fa-chevron-down"></i></span>
                        </a>
                    </div>

                    <div id="header-dash" class="px-4 py-4">
                        <h1 class="fs-3 my-0 text-d-blue ls-2 fw-normal">Candidates</h1>
                    </div>

                    <div id="content-dash" class="px-4 pb-3 d-flex border-bottom align-items-center">
                        <div class="py-2 me-2">
                            <span href="" class="rounded-pill border border-dark border-opacity-25 py-2 px-4 fs-7">
                                <span class="bg-white me-2 text-muted"><i class="fa-solid fa-magnifying-glass fa-fw"></i></span>
                                <input id="table-search-dash" type="text" class="border-0" placeholder="Search" step="height: 10px !important;">
                            </span>
                        </div>
                        <div class="py-2 me-2">
                            <a href="" class="rounded-pill border border-dark border-opacity-25 py-2 px-4 text-muted fs-7 btn-white-io">Add Candidates</a>
                        </div>
                        <div class="py-2 me-2">
                            <a href="" class="rounded-pill border border-dark border-opacity-25 py-2 px-4 text-muted fs-7 btn-white-io">Delete Candidates</a>
                        </div>
                    </div>

                    <div id="table-content-dash" class="px-4 py-3">
                        <div class="table-responsive">
                            <table id="candidates">
                                <tr class="bg-light rounded-pill">
                                    <th class="py-2 px-4 fw-normal" style="width: 50px;">
                                        <input class="form-check-input" type="checkbox" value="all">
                                    </th>
                                    <th class="py-2 fw-normal fs-7" style="width: 55px;"></th>
                                    <th class="py-2 pe-4 fw-normal fs-7">Name</th>
                                    <th class="py-2 px-4 fw-normal fs-7">Position</th>
                                    <th class="py-2 px-4 fw-normal fs-7">Phone</th>
                                    <th class="py-2 px-4 fw-normal fs-7">Action</th>
                                </tr>
                                <tbody id="candidate-body">
                                    <tr>
                                        <td class="py-2 px-4"><input class="form-check-input" type="checkbox" value=""></td>
                                        <td class="py-3">
                                            <img src="pub/images/gio.jpeg" class="rounded-circle" width="40" height="40" alt="">
                                        </td>
                                        <td class="py-2 pe-4">
                                            <span class="fs-7 d-block fw-normal">Ahmad Giofadhil</span>
                                        </td>
                                        <td class="py-2 px-4">
                                            <span class="fs-7 text-muted ls-1">Web Developer</span>
                                        </td>
                                        <td class="py-2 px-4 fs-7 ls-1">+62 0123456789</td>
                                        <td class="py-2 px-4 fs-7 ls-1">
                                            <a class="py-1 px-2 bg-light text-d-blue btn-d-blue border rounded"><i class="fa-solid fa-pen-to-square fa-fw"></i></a>
                                            <a class="py-1 px-2 bg-light text-d-blue btn-d-blue border rounded"><i class="fa-solid fa-trash-can fa-fw"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-4"><input class="form-check-input" type="checkbox" value=""></td>
                                        <td class="py-3">
                                            <img src="pub/images/avatar.jpg" class="rounded-circle" width="40" height="40" alt="">
                                        </td>
                                        <td class="py-2 pe-4">
                                            <span class="fs-7 d-block fw-normal">Godam R.</span>
                                        </td>
                                        <td class="py-2 px-4">
                                            <span class="fs-7 text-muted ls-1">Web Developer</span>
                                        </td>
                                        <td class="py-2 px-4 fs-7 ls-1">+62 987654321</td>
                                        <td class="py-2 px-4 fs-7 ls-1">
                                            <a class="py-1 px-2 bg-light text-d-blue text-white btn-d-blue border rounded"><i class="fa-solid fa-pen-to-square fa-fw"></i></a>
                                            <a class="py-1 px-2 bg-light text-d-blue text-white btn-d-blue border rounded"><i class="fa-solid fa-trash-can fa-fw"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
