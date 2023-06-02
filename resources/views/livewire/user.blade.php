<div>
    <div class="row">
        <input class="form-control my-3 w-50" placeholder="Search by name or email" wire:model="search" />
    </div>
    <table class="table table-hover bg-white">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>Hash: {{ $user->password }}</td>
                <td>
                    <form class="d-flex" method="post" action="{{route('admin.user.update',['id' => $user->id])}}">
                        @csrf
                        <select class="form-control mx-1" name="role">
                            <option @if($user->role==="ADMIN") selected @endif value="ADMIN">Admin</option>
                            <option @if($user->role==="USER") selected @endif value="USER">User</option>
                        </select>
                        <button type="submit" class="btn btn-warning">Save</button>
                    </form>
                </td>
                <td>
                    <a class="btn btn-warning" href="{{route('admin.user.show',['id' => $user->id])}}"><i class="fa fa-eye"></i></a>
                    <form action="{{ route('admin.user.destroy', ['id' => $user->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">
                            <i class="nav-icon fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
