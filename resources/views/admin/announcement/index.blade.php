@extends("layouts.admin")
@section("content")
    <div class="row">
        <div class="col-md-1 m-3">
            <a href="{{route('admin.announcement.create')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm">Create announcement</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered table-dark text-white table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($announcements as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td style="width:600px;">{{ $item->body}}</td>
                    <td>
                        <form action="{{ route('admin.announcement.destroy', ['id' => $item->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this announcement?')">
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
            {{ $announcements->links() }}
        </div>
    </div>

@endsection
