@extends('admin.auth.layouts.app')

@section('content')
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">
                        <!--begin::Signin Form kt_sign_in_form-->
                        <form class="form w-100 " novalidate="novalidate" id="" action="{{ route('admin.login') }}" method="POST">
                            @csrf

                            <input type="hidden" name="role" value="Admin">
                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
                                <!--end::Title-->
                            </div>
                            <!--begin::Separator-->
                            <div class="separator separator-content my-14">
                                <span class="w-325px text-gray-500 fw-semibold fs-7">Login with your credentials</span>
                            </div>
                            <!--end::Separator-->
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                <!--begin::Email-->
                                <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" value="demo@demo.com" required autofocus>
                                <!--end::Email-->
                            </div>
                            <!--end::Input group=-->
                            <div class="fv-row mb-3 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                <!--begin::Password-->
                                <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" value="demo">
                                <!--end::Password-->
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div></div>
                                <!--begin::Link-->
                                <a href="{{ route('admin.forgot_password') }}" class="link-primary">Forgot Password ?</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                    <!--begin::Indicator-->
                                    <span class="indicator-label">
                                        Continue
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                            <div></div>
                        </form>
                    </div>
                </div>
                <div class="d-flex flex-center flex-wrap px-5">
                    <div class="d-flex fw-semibold text-primary fs-base">
                        <a href="#" class="px-5">About</a>
                        <a href="#" class="px-5">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(http://metro/demo1/media/misc/auth-bg.png)">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center py-15 px-5 px-md-15 w-100">
                    <!--begin::Logo-->
                    <a href="/" class="mb-12">
                        <img alt="Logo" src="{{ asset('public/admin/media/logos/custom-1.png') }}" class="h-75px">
                    </a>
                    <!--end::Logo-->
                    <!--begin::Image-->
                    <img class="mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ asset('public/admin/media/misc/auth-screens.png') }}" alt="">
                    <!--end::Image-->
                    <!--begin::Title-->
                    <h1 class="text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and Productive</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="text-white fs-base text-center">In this kind of post,
                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person they’ve interviewed
                        <br>and provides some background information about
                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their
                        <br>work following this is a transcript of the interview.</div>
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
        </div>
    </div>
@endsection
