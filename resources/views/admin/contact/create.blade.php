@extends("layouts.admin")
@section("content")
    <form action="{{route('admin.category.store')}}" method="POST">
        @csrf

        <button type="submit">Create</button>
    </form>
@endsection
