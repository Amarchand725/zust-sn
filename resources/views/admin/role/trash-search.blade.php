@foreach ($models as $key=>$model)
    <tr id="id-{{ $model->id }}">
        <td>{{  $models->firstItem()+$key }}.</td>
        <td>{{  $model->name }}</td>
        <td>{{  $model->guard_name }}</td>
        <td>
            @if($model->status)
                <span class="badge badge-success">Active</span>
            @else
                <span class="badge badge-danger">In-Active</span>
            @endif
        </td>
        <td>{{  date('d, M-Y', strtotime($model->created_at)) }}</td>
        <td>
            <a href="{{route('admin.role.restore', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit user" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i> Restore</a>
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
