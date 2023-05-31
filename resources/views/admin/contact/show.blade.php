@extends("layouts.admin")
@section("content")
    <div class="row">
        <a href="{{route('admin.contact.index')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm w-25 my-3">Back To Contact Messages</a>
    </div>
    <table class="table table-bordered table-dark text-white table-hover">
        <tbody>
        <tr>
            <th>ID</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>Subject</th>
            <td>{{ $message->subject }}</td>
        </tr>
        <tr>
            <th>Ip</th>
            <td>
                {{ $message->ip }}
            </td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>
                {{ $message->phone }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $message->email }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td >
                <form class="d-flex" action="{{ route('admin.contact.update', ['id' => $message->id]) }}" method="post">
                    @csrf
                    <select class="form-control w-25 mx-1" name="status">
                        <option @if($message->status==="CHECKED") selected @endif>CHECKED</option>
                        <option @if($message->status==="NEW") selected @endif>NEW</option>
                    </select>
                    <button type="submit" class="btn btn-info">
                        <i class="fas fa-edit">UPDATE</i>
                    </button>
                </form>
               </td>
        </tr>

        <tr>
            <th>Actions</th>
            <td>

                <form action="{{ route('admin.contact.destroy', ['id' => $message->id]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this message?')">
                        <i class="nav-icon fas fa-trash"></i>
                    </button>
                </form>

            </td>
        </tr>
        </tbody>
    </table>

@endsection
