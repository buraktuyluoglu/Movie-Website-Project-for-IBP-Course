@extends("layouts.admin")
@section("content")
    <div class="row">
        <a href="{{route('admin.movie.index')}}" type="button" class="btn btn-primary btn-sm w-100 my-3">Movies</a>
    </div>
    <table class="table table-bordered table-danger  table-hover">
        <tbody>
        <tr>
            <th>ID</th>
            <td>{{ $movie->id }}</td>
        </tr>
        <tr>
            <th>ID</th>
            <td>{{ $movie->category->title }}</td>
        </tr>
        <tr>
            <th>Movie Name</th>
            <td>{{ $movie->name }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>
               {{$movie->descriptions}}
            </td>
        </tr>
        <tr>
            <th>Image</th>
            <td>
                @if($movie->image==="no_img")
                    <img src="{{asset('home')}}/img/movie_placeholder.jpg" width="100"  alt="" />
                @else
                    <img src="{{Storage::url($movie->image)}}" width="100"  alt="" />
                @endif
            </td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $movie->status }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $movie->created_at }}</td>
        </tr>
        <tr>
            <th>Actions</th>
            <td>
                <a href="{{ route('admin.movie.edit', ['id' => $movie->id]) }}" class="btn btn-info">
                    <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('admin.movie.destroy', ['id' => $movie->id]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this movie?')">
                        <i class="nav-icon fas fa-trash"></i>
                    </button>
                </form>

            </td>
        </tr>
        </tbody>
    </table>

@endsection
