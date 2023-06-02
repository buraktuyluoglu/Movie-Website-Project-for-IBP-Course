<div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="row">
        <input class="form-control my-3 w-50" placeholder="Search title-description" wire:model="search" />
    </div>
    <div class="row">
        <table class="table table-bordered table-danger ">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->name }}</td>
                    <td width="450px;">{{ $movie->descriptions }}</td>
                    <td>
                        @if($movie->image==="no_img")
                            <img src="{{asset('home')}}/img/category_placeholder.jpg" width="100"  alt="" />
                        @else
                            <img src="{{Storage::url($movie->image)}}" width="100"  alt="" />
                        @endif
                    </td>
                    <td>{{ $movie->status }}</td>
                    <td>{{ $movie->created_at }}</td>
                    <td>
                        <a href="{{route('admin.movie.show',['id' => $movie->id])}}" class="btn btn-primary">  <i class="fas fa-eye"></i></a>
                        <a href="{{route('admin.movie.edit',['id' => $movie->id])}}" class="btn btn-info"> <i class="fas fa-edit"></i> </a>
                        <form action="{{ route('admin.movie.destroy', ['id' => $movie->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this movie?')">
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
            {{ $movies->links() }}
        </div>
    </div>
</div>
