<a class="btn btn-primary btn-sm mb-1" href="#">
    <i class="fas fa-folder"> </i> View
</a>
<a href="{{ route('dashboard.receptionists.edit', $id) }}" class="btn btn-info btn-sm mb-1">
    <i class="fas fa-pencil-alt"> </i> Edit
</a>

<form action="{{ route('dashboard.receptionists.destroy', $id) }}" method="post"
    style="display: inline-block;">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <button type="submit" class="btn btn-danger delete btn-sm" onclick="return confirm('Are you sure to delete this employee?')">
        <i class="fa fa-trash"></i> Delete
    </button>
</form><!-- end of form -->
