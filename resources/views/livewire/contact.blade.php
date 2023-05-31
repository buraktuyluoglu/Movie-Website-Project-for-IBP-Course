<div>
    <div class="row">
        <input class="form-control my-3" placeholder="Search by subject, content and email" wire:model="search" />
    </div>
    <div class="row">
        <table class="table table-bordered table-dark text-white table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Subject</th>
                <th>Email</th>
                <th>Phone</th>
                <th>IP</th>
                <th>Text</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contactMessages as $contact)
                <tr @if($contact->status==="CHECKED") class="text-green" @endif>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->ip }}</td>
                    <td style="width:400px;">{{ $contact->text }}</td>
                    <td>
                        <a href="{{ route('admin.contact.show', ['id' => $contact->id]) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('admin.contact.destroy', ['id' => $contact->id]) }}" method="POST" class="d-inline">
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
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center">
            {{ $contactMessages->links() }}
        </div>
    </div>
</div>
