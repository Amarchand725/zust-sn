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
            <td>{{ $model->roles[0]->name }}</td>
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
                <a href="{{route('admin.user.restore', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit user" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i> Restore</a>
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
