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
