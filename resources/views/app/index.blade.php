@extends('layout.master')

@section('content')
    <div id="body-index">

        <!-- NAVBAR START -->
        <div id="navbar" class="bg-transparent py-3 position-fixed w-100" style="z-index: 1;top: 0;">
            <div class="container px-3">
                <div class="d-flex">
                    <div id="nav-left" class="me-auto align-self-center">
                        <a href="">
                            <span class="fs-3 text-d-blue ls-2">ProGu</span>
                        </a>
                    </div>
                    <div id="nav-right" class="align-self-center ls-2">
                        <div id="home-wrapper" class="d-inline me-5 align-middle">
                            <a href="">
                                <span class="text-white fs-7 text-uppercase">home</span>
                            </a>
                        </div>
                        <div id="about-wrapper" class="d-inline me-5 align-middle">
                            <a href="">
                                <span class="text-white fs-7 text-uppercase">about</span>
                            </a>
                        </div>
                        <div id="project-wrapper" class="d-inline me-5 align-middle">
                            <a href="">
                                <span class="text-white fs-7 text-uppercase">project</span>
                            </a>
                        </div>
                        <div id="contact-wrapper" class="d-inline me-5 align-middle">
                            <a href="">
                                <span class="text-white fs-7 text-uppercase">contact</span>
                            </a>
                        </div>
                        @if ((Auth::check() && Auth::user()->username == 'admin') || (Auth::check() && Auth::user()->username == 'ioiofadhil'))
                            <div id="contact-wrapper" class="d-inline bg-primary align-middle">
                                <a id="nav-button" href="{{ route('dashboard.index') }}" class="btn btn-light ls-2 rounded-0 border border-dark px-3 pb-2 pt-1 text-d-blue">
                                    <span class="fs-7 text-uppercase">Dashboard</span>
                                </a>
                            </div>
                        @elseif (Auth::check())
                            <div id="contact-wrapper" class="d-inline bg-primary align-middle">
                                <a id="nav-button" href="" class="btn btn-light ls-2 rounded-0 border border-dark px-3 pb-2 pt-1 text-d-blue">
                                    <span class="fs-7 text-uppercase">Profile</span>
                                </a>
                            </div>
                        @else
                            <div id="contact-wrapper" class="d-inline bg-primary align-middle">
                                <a id="nav-button" href="{{ route('auth.indexLogin') }}" class="btn btn-light ls-2 rounded-0 border border-dark px-3 pb-2 pt-1 text-d-blue">
                                    <span class="fs-7 text-uppercase">login</span>
                                </a>
                            </div>
                        @endauth
                </div>
            </div>
        </div>
    </div>
    <!-- NAVBAR END -->

    <!-- CONTENT START -->
    <div id="landing">
        <div class="container px-3">
            <div class="row px-2">
                <div id="landing-left" class="col-6 position-relative" style="height: 100vh;">
                    <div id="lading-left-content" class="position-absolute top-50 start-0 translate-middle-y" style="margin-right: 100px">

                        <div id="title-wrapper">
                            <h1 class="my-0">
                                <span class="text-d-blue fw-bold ls-1" style="font-size: 48px;">Bringing process automation to the workplace</span>
                            </h1>
                        </div>
                        <div id="description-wrapper" class="my-5">
                            <h5 class="my-0">
                                <span class="text-muted fs-7 ls-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea omnis repudiandae quis deleniti. Mollitia pariatur illo cum asperiores aliquid quo.</span>
                            </h5>
                        </div>
                        <div id="button-wrapper">
                            <a href="" class="btn bg-d-blue text-white rounded-0 py-3 px-4">
                                <span class="fs-6 me-3 text-uppercase">get your website</span>
                                <span class="fs-6"><i class="bi bi-box-arrow-up-right"></i></span>
                            </a>
                        </div>
                        <div id="landing-footer-wrapper" class="pt-5">
                            <div id="short-text-wrapper" class="fs-7 text-muted">
                                <span>Lorem ipsum dolor sit amet.</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="landing-right" class="col-6 position-relative" style="height: 100vh;">
                    <div id="lading-right-content" class="position-absolute top-50 end-0 translate-middle-y bg-white-special p-5 rounded" style="margin-left: 100px">

                        <div id="paragraph-top">
                            <span class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde corporis molestias sed ut commodi eius nihil nesciunt adipisci! Cumque saepe nobis culpa iusto iste provident debitis adipisci assumenda, ea nihil fugit dignissimos, voluptates perferendis?</span>
                        </div>
                        <div id="paragraph-botom" class="py-4">
                            <span class="fs-5 fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus beatae eius consectetur asperiores nisi quia saepe iusto reiciendis, rerum perferendis!</span>
                        </div>
                        <div id="right-content-footer">
                            <div class="d-flex">
                                <div id="avatar-wrapper">
                                    <img src="pub/images/gio.jpeg" width="60" height="55" class="rounded-circle" alt="">
                                </div>
                                <div id="avatar-desc-wrapper" class="ms-3">
                                    <span class="fs-6 text-d-blue fw-bold d-block">Ahmad Giofadhil</span>
                                    <span class="text-muted fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit..</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT END -->

</div>
@endsection
