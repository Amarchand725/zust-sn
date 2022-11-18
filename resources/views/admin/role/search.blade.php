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
            @can('role-edit')
                <a href="{{route('role.edit', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit role" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
            @endcan
            @can('role-delete')
                <button class="btn btn-danger btn-sm delete" data-slug="{{ $model->id }}" data-del-url="{{ route('role.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
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
