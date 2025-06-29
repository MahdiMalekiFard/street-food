<form action="{{route('admin.menu-item.destroy',$row->id)}} " method="post">
    @method('delete')
    @csrf
    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
        <a role="button" class="btn btn-secondary btn-active-dark" href="{{route('admin.menu-item.edit',$row->id)}}"><i class="fa fa-pen"></i></a>
        <a role="button" class="btn btn-secondary btn-active-dark" href="{{route('admin.menu-item.toggle',$row->id)}}"><i class="fa fa-toggle-on"></i></a>
        <a role="button" class="btn btn-secondary btn-active-dark" href="{{route('admin.generate-translation',['model' => 'menuItem', 'id' => $row->id, 'locale' => 'en'])}}"><i class="fa fa-language"></i></a>
        <button type="submit" class="btn btn-secondary btn-active-danger sa-warning"><i class="fa fa-trash"></i></button>
    </div>
</form>
