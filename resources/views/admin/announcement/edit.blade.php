@extends("layouts.admin")
@section("content")
    <form action="{{route('admin.announcement.update',['id' => 1])}}" method="POST">
        @csrf

        <button type="submit">Update Announcement</button>
    </form>
@endsection
