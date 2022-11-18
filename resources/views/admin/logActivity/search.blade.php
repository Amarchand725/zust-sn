@foreach ($models as $key=>$model)
    <tr id="id-{{ $model->id }}">
        <td>{{  $models->firstItem()+$key }}.</td>
        <td>{{  $model->subject }}</td>
        <td>{{  $model->url }}</td>
        <td>{{  $model->method }}</td>
        <td>{{  $model->ip }}</td>
        <td>{{  $model->agent }}</td>
        <td>{{  $model->hasUser->name??'N/A' }}</td>
        <td>{{  date('d, M-Y', strtotime($model->created_at)) }}</td>
        <td>
            @can('logactivity-delete')
                <button class="btn btn-danger btn-sm delete" data-slug="{{ $model->id }}" data-del-url="{{ route('admin.logactivity.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
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
