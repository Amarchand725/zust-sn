@extends('admin.layouts.app')
@section('title', $page_title)
@push('css')
@endpush
@section('content')
<div id="kt_app_content" class="app-content" style="margin-top:5px">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container ">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" >
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">{{ $page_title }}</h3>
                </div>
                <div class="content-header-right mt-3">
                    <a href="{{ route('category.index') }}" title="All General.categories" class="btn btn-primary btn-sm">View All</a>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="" class="collapse show">
                <!--begin::Form-->
                <form action="{{ route("category.store") }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf

                    <div class="card-body border-top p-9">
                         <div class="row mb-6">
<label for="name" class="col-lg-2 col-form-label required fw-bold fs-6">Name</label><div class="col-lg-8 fv-row"><input type="text" class="form-control form-control-lg form-control-solid" name="name" value="{{ old("name") }}" placeholder="Enter name">
<span style="color: red">{{ $errors->first("name") }}</span></div></div> <div class="row mb-6">
<label for="description" class="col-lg-2 col-form-label required fw-bold fs-6">Description</label><div class="col-lg-8 fv-row"><textarea class="form-control ckeditor form-control-lg form-control-solid" id="description" name="description" placeholder="Enter description">{{ old("description") }}</textarea>
<span style="color: red">{{ $errors->first("description") }}</span></div></div> <div class="row mb-6">
<label for="status" class="col-lg-2 col-form-label required fw-bold fs-6">Status</label><div class="col-lg-8 fv-row"><select class="selectpicker" name="status" data-live-search="true"><option value="1" {{ old("status")==1?"selected":"" }}>Active</option><option value="0" {{ old("status")==0?"selected":"" }}>In Active</option></select><span style="color: red">{{ $errors->first("status") }}</span></div></div>
                    </div>
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-white btn-active-light-primary me-2">Discard</button>

                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                            <!--begin::Indicator-->
                            <span class="indicator-label">
                                Save Changes
                            </span>
                            <span class="indicator-progress">
                                Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            <!--end::Indicator-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
