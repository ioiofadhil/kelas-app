@extends('layout.master')

@section('content')
    <div id="body-login">

        <!-- NAVBAR START -->
        <div id="navbar" class="bg-transparent py-3 position-fixed w-100" style="z-index: 1;top: 0;">
            <div id="container-responsive" class="container px-3">
                <div class="d-flex">
                    <div id="nav-left" class="me-auto align-self-center">
                        <a href="/">
                            <span class="fs-3 text-d-blue ls-2">ProGu</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- NAVBAR END -->

        <!-- REGISTER START -->
        <form action="{{ route('auth.register') }}" method="POST">
            @csrf
            <div id="content-register">
                <div class="container-fluid">
                    <div class="row">
                        <div id="left-content-register" class="col-md-6 position-relative" style="height: 100vh;">

                            <div class="position-absolute top-50 start-50 translate-middle" style="min-width: 400px;">
                                <div id="title-register">
                                    <h1 class="fs-1 fw-light text-d-blue">REGISTER!</h1>
                                </div>

                                <div id="desc-register" class="mt-2 text-start">
                                    <p class="fs-7 text-muted my-0">
                                        <span>Please insert your username and password to register</span>
                                    </p>
                                </div>

                                <div id="credential-register" class="fs-7 mt-3">
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control rounded-0 border border-opacity-25" id="floatingInput" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="password" name="password" class="form-control rounded-0 border border-opacity-25" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>

                                <div id="bottom-credential-register" class="d-flex align-items-center mt-2">
                                    <div id="forgot-register">
                                        <span class="fs-7 text-muted">Have an account?</span>
                                        <a href="{{ route('auth.index_login') }}">
                                            <span class="fs-7">Login</span>
                                        </a>
                                    </div>
                                    <div id="check-box-register" class="ms-auto">
                                    </div>
                                </div>

                                <div id="button-register" class="mt-3">
                                    <button type="submit" class="py-2 bg-d-blue text-white fs-6 w-100 border border-opacity-25">
                                        <span class="fw-light fs-6 ls-1 pb-1">Sign Up</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="right-content-register" class="col-md-6 position-relative">
                            <div class="position-absolute top-50 start-50 translate-middle text-center" style="min-width: 400px;">
                                <img src="pub/images/progu.png" width="220" height="130" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- REGISTER END -->
    </div>
@endsection
