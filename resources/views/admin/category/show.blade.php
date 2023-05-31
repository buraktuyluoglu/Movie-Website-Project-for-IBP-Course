@extends("layouts.admin")
@section("content")
    <div class="row">
        <a href="{{route('admin.category.index')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm w-25 my-3">Back To Categories</a>
    </div>
    <table class="table table-bordered table-dark text-white table-hover">
        <tbody>
        <tr>
            <th>ID</th>
            <td>{{ $category->id }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $category->title }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>
                <img src="{{Storage::url($category->image)}}" width="400"  alt="" />
            </td>
        </tr>
        <tr>
            <th>Image</th>
            <td>
                {{ $category->image }}</td>
        </tr>
        <tr>
            <th>Slug</th>
            <td>{{ $category->slug }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $category->status }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $category->created_at }}</td>
        </tr>
        <tr>
            <th>Actions</th>
            <td>
                <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-info">
                    <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('admin.category.destroy', ['id' => $category->id]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">
                        <i class="nav-icon fas fa-trash"></i>
                    </button>
                </form>

            </td>
        </tr>
        </tbody>
    </table>

@endsection
