@extends('admin.layouts.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('permission.index') }}">
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar mt-5 py-3 py-lg-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <!--begin::Title-->
                            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{ $page_title }}</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Dashboards</li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                            <!--begin::Primary button-->
                            @can('permission-create')
                                <a href="{{ route('permission.create') }}" class="btn btn-sm fw-bold btn-primary">Add New Permission</a>
                            @endcan
                            <a href="{{ route('admin.permission.trash.records') }}" title="Permission All Trash Records" class="btn btn-sm fw-bold btn-primary">Restore</a>
                            <span id="trash-record-count">{{ count($onlySoftDeleted) }}</span> Records Deleted
                            <!--end::Primary button-->
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Content-->
                <div id="kt_app_content" class="app-content" >
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container ">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <div class="card-body pt-6">
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted" style=" width: 100%; ">
                                            <input type="text" id="search" class="form-control" placeholder="Search...">
                                            <input type="hidden" id="status" value="All">
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--begin::Table-->
                                <table  class="table align-middle table-row-dashed fs-6 gy-5" id="audit-log-table">
                                    <thead>
                                        <tr>
                                            <th  title="Log ID">SNo#</th>
                                            <th  title="Location">Name</th>
                                            <th  title="Description">Permission</th>
                                            <th  title="Created At">Created At</th>
                                            <th  title="Action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                        @foreach ($models as $key=>$model)
                                            <tr id="id-{{ $model->id }}">
                                                <td>{{  $models->firstItem()+$key }}.</td>
                                                @php $per = explode('-', $model->name) @endphp
                                                <td>{{  $per[0] }}</td>
                                                <td>{{  $per[1] }}</td>
                                                <td>{{  date('d, M-Y', strtotime($model->created_at)) }}</td>
                                                <td>
                                                    @can('permission-edit')
                                                        <a href="{{route('permission.edit', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit permission" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                    @endcan
                                                    @can('permission-delete')
                                                        <button class="btn btn-danger btn-sm delete" data-slug="{{ $model->id }}" data-del-url="{{ route('permission.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="6">
                                                Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
                                                <div class="d-flex justify-content-center">
                                                    {!! $models->links('pagination::bootstrap-4') !!}
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
        </div>
    </div>
</div>

@endsection
@push('js')
@endpush
