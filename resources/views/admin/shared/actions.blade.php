<a class="btn btn-sm btn-default" href="{{ route('admin.user.show', [ 'user' => $model->id ]) }}"> <i class="fa fa-eye"></i> Show</a>
<a class="btn btn-sm btn-secondary" href="{{ route('admin.user.edit', [ 'user' => $model->id ]) }}"> <i class="fa fa-edit"></i> Edit</a>
<a class="btn btn-sm btn-danger"
   onclick="event.preventDefault();document.getElementById('delete-form-{{ $model->id }}').submit();"
   href="{{ route('admin.user.destroy', ['user' => $model->id ]) }}"><i class="fa fa-trash"></i> Delete</a>
<form action="{{ route('admin.user.destroy', [ 'user' => $model->id ]) }}" id="delete-form-{{ $model->id }}" method="POST">
    @method('DELETE')
    @csrf
</form>
