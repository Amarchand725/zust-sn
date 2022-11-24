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
                    <a href="{{ route('menu.index') }}" title="All Menus" class="btn btn-primary btn-sm">View All</a>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="" class="collapse show">
                <!--begin::Form-->
                <form action="{{ route('menu.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf

                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Menu of</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="menu_of" class="selectpicker" data-live-search="true">
                                    <option value="general">General</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <br />
                                <span style="color: red">{{ $errors->first('menu_of') }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label fw-bold fs-6">Parent Menu</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <select name="parent_id" class="selectpicker" data-live-search="true">
                                    <option value="" selected>Select parent</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                                <br />
                                <span style="color: red">{{ $errors->first('parent_id') }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Icon</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="icon" value="{{ old('icon') }}" class="form-control form-control-lg form-control-solid" placeholder="Copy font awesome tag from library and paste here e.g <i class='fa fa-user' aria-hidden='true'></i>"/>
                                <a href="https://fontawesome.com/v4/icons/" style="margin-top: 5px" target="_blank" class="btn btn-success">Choose Icon</a><br />
                                <br />
                                <span style="color: red">{{ $errors->first('icon') }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Label</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="label" value="{{ old('label') }}" class="form-control form-control-lg form-control-solid" placeholder="Enter label e.g All Users"/>
                                <br />
                                <span style="color: red">{{ $errors->first('label') }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Menu</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="menu" value="{{ old('menu') }}" class="form-control form-control-lg form-control-solid" placeholder="Enter Menu e.g user"/>
                                <br />
                                <span style="color: red">{{ $errors->first('menu') }}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label required fw-bold fs-6">Columns</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <table class="table" id="columns">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Default</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" name="column_names[]" value="" placeholder="Enter column name">
                                                <span style="color: red">{{ $errors->first('column_names.*') }}</span>
                                            </td>
                                            <td style="width:250px">
                                                <select name="types[]" id="" class="form-control js-example-basic-single">
                                                    <option value="integer" selected>INT</option>
                                                    <option value="string">VARCHAR</option>
                                                    <option value="boolean">BOOLEAN</option>
                                                    <option value="date">DATE</option>
                                                    <option value="time">TIME</option>
                                                    <option value="datetime">DATETIME</option>
                                                    <option value="text">TEXT</option>
                                                    <option value="bigInteger">BIGINT</option>
                                                    <option value="decimal">DECIMAL</option>
                                                    <option value="float">FLOAT</option>
                                                    <option value="double">DOUBLE</option>
                                                    <option value="binary">BLOB (Image or other attachments)</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="default_types[]" id="" class="form-control default_selection js-example-basic-single">
                                                    <option value="none" selected>None</option>
                                                    <option value="nullable">Null</option>
                                                    <option value="default">Default</option>
                                                </select>
                                                <span class="default-field"></span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm add-more-btn"><i class="fa fa-plus"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->

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

<script>
    $(document).ready(function(){
        $('.default_selection').parents('td').find('.default-field').html('<input type="hidden" name="defaults[]" value="1" class="form-control" style="margin-top:5px" placeholder="Enter default value">');
    });
    $(document).on('change', '.default_selection', function(){
        var default_val = $(this).val();
        if(default_val=='default'){
            $(this).parents('td').find('.default-field').html('<input type="text" name="defaults[]" class="form-control" style="margin-top:5px" placeholder="Enter default value">');
        }else{
            $(this).parents('td').find('.default-field').html('<input type="hidden" name="defaults[]" value="1" class="form-control" style="margin-top:5px" placeholder="Enter default value">');
        }
    });
    $(document).on('click', '.add-more-btn', function(){
        var html = '<tr>'+
                        '<td>'+
                            '<input type="text" class="form-control" name="column_names[]" value="" placeholder="Enter Menu e.g user">'+
                        '</td>'+
                        '<td>'+
                            '<select name="types[]" id="" class="form-control js-example-basic-single">'+
                                '<option value="integer">INT</option>'+
                                '<option value="string">VARCHAR</option>'+
                                '<option value="boolean">BOOLEAN</option>'+
                                '<option value="date">DATE</option>'+
                                '<option value="text">TEXT</option>'+
                                '<option value="bigInteger">BIGINT</option>'+
                                '<option value="float">FLOAT</option>'+
                                '<option value="binary">BLOB (Image or other attachments)</option>'+
                            '</select>'+
                        '</td>'+
                        '<td>'+
                            '<select name="default_types[]" id="" class="form-control default_selection js-example-basic-single">'+
                                '<option value="none" selected>None</option>'+
                                '<option value="nullable">Null</option>'+
                                '<option value="default">Default</option>'+
                            '</select>'+
                            '<span class="default-field"></span>'+
                        '</td>'+
                        '<td>'+
                            '<button type="button" class="btn btn-danger btn-sm remove-btn"><i class="fa fa-times"></i></button>'+
                        '</td>'+
                    '</tr>';
        $("#columns > tbody").append(html);
    });

    $(document).on('click', '.remove-btn', function(){
        $(this).parents('tr').remove();
    });
</script>
@endpush
