@extends("layouts.admin")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <a href="{{route('admin.movie.index')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm w-25 my-3">Back To Movies</a>
        </div>
        <div class="row bg-dark p-4 rounded">
            <form class="w-100" action="{{route('admin.movie.update', $movie->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$movie->name}}">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4">{{$movie->descriptions}}</textarea>
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" id="tags" class="form-control" required value="{{$movie->tags}}">
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{$category->id == $movie->category_id ? 'selected' : ''}}>{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="mov_img" id="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="ACTIVE" {{$movie->status == 'ACTIVE' ? 'selected' : ''}}>Active</option>
                        <option value="PENDING" {{$movie->status == 'PENDING' ? 'selected' : ''}}>Pending</option>
                        <option value="SUSPENDED" {{$movie->status == 'SUSPENDED' ? 'selected' : ''}}>Suspended</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cloud_link">Cloud Link</label>
                    <input type="text" name="cloud_link" id="cloud_link" class="form-control" value="{{$movie->cloud_link}}" required>
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection
