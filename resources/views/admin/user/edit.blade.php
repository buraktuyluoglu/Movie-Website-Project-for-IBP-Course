@extends("layouts.admin")
@section("content")
    <form action="{{route('admin.user.update',['id' => 1])}}" method="POST">
        @csrf

        <button type="submit">Update User</button>
    </form>
@endsection
