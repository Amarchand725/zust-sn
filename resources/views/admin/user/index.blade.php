@extends('admin.layouts.app')
@section('title', $page_title)
@section('content')
<input type="hidden" id="page_url" value="{{ route('user.index') }}">
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
                            @can('user-create')
                                <a href="{{ route('user.create') }}" class="btn btn-sm fw-bold btn-primary">Add New User</a>
                            @endcan
                            <a href="{{ route('admin.user.trash.records') }}" title="User All Trash Records" class="btn btn-sm fw-bold btn-primary">Restore</a>
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
                                            <select name="status" id="status" class="form-control" style="margin-left: 5px">
                                                <option value="All" selected>Search by status</option>
                                                <option value="1">Active</option>
                                                <option value="0">InActive</option>
                                            </select>
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
                                            <th  title="Location">Avatar</th>
                                            <th  title="Location">Role</th>
                                            <th  title="Location">First Name</th>
                                            <th  title="Location">Last Name</th>
                                            <th  title="Location">Phone</th>
                                            <th  title="Location">Email</th>
                                            <th  title="Location">Status</th>
                                            <th  title="Created At">Created At</th>
                                            <th  title="Action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body">
                                        @foreach ($models as $key=>$model)
                                            @if($model->roles[0]->name != 'Admin')
                                                <tr id="id-{{ $model->id }}">
                                                    <td>{{  $models->firstItem()+$key }}.</td>
                                                    <td>
                                                        @if($model->hasProfile->avatar)
                                                            <img src="{{ asset('public/avatar') }}/{{ $model->hasProfile->avatar }}" class="rounded" width="50px" alt="">
                                                        @else
                                                            <img src="{{ asset('public/avatar/default.png') }}" width="50px" alt="">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            @foreach ($model->roles as $role)
                                                                <li>{{ $role->name }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        {{ isset($model->hasProfile)?$model->hasProfile->first_name:$model->name }}
                                                    </td>
                                                    <td>
                                                        {{ isset($model->hasProfile)?$model->hasProfile->last_name:'N/A' }}
                                                    </td>
                                                    <td>
                                                        {{ isset($model->hasProfile)?$model->hasProfile->phone:'N/A' }}
                                                    </td>
                                                    <td>
                                                        {{ $model->email }}
                                                    </td>
                                                    <td>
                                                        @if($model->status)
                                                            <span class="badge badge-success">Active</span>
                                                        @else
                                                            <span class="badge badge-danger">In-Active</span>
                                                        @endif
                                                    </td>
                                                    <td>{{  date('d, M-Y', strtotime($model->created_at)) }}</td>
                                                    <td>
                                                        <a href="{{route('admin.user.create-spacial-permission', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Assign Spacial Permissions" class="btn btn-warning btn-sm"><i class="fa fa-lock"></i></a>
                                                        @can('user-edit')
                                                            <a href="{{route('user.edit', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit user" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                                        @endcan
                                                        @can('user-delete')
                                                            <button class="btn btn-danger btn-sm delete" data-slug="{{ $model->id }}" data-del-url="{{ route('user.destroy', $model->id) }}"><i class="fa fa-trash"></i></button>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endif
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
