@extends("layouts.admin")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <a href="{{route('admin.movie.index')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm w-25 my-3">Back To Movies</a>
        </div>
        <div class="row bg-dark p-4 rounded">
            <form class="w-100" action="{{route('admin.movie.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" >
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4" ></textarea>
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" id="tags" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="mov_img" id="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="ACTIVE" >Active</option>
                        <option value="PENDING" >Pending</option>
                        <option value="SUSPENDED">Suspended</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cloud_link">Cloud Link</label>
                    <input type="text" name="cloud_link" id="cloud_link" class="form-control" required>
                </div>
                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection
