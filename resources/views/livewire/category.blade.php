<div>
    <div class="row">
        <input class="form-control my-3" placeholder="Search by title" wire:model="search" />
    </div>
    <div class="row">
        <table class="table table-bordered table-dark text-white table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Slug</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                    <td>
                        @if($category->image==="no_image")

                        <img src="{{asset('home')}}/img/category_placeholder.jpg" width="100"  alt="" />
                        @else
                            <img src="{{Storage::url($category->image)}}" width="100"  alt="" />
                        @endif
                    </td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->status }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>
                        <a href="{{route('admin.category.show',['id' => $category->id])}}" class="btn btn-primary">  <i class="fas fa-eye"></i></a>
                        <a href="{{route('admin.category.edit',['id' => $category->id])}}" class="btn btn-info"> <i class="fas fa-edit"></i> </a>
                        <form action="{{ route('admin.category.destroy', ['id' => $category->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                                <i class="nav-icon fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center">
            {{ $categories->links() }}
        </div>
    </div>
</div>
