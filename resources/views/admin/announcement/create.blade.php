@extends("layouts.admin")
@section("content")
    <form method="POST" action="{{route('admin.announcement.store')}}" class="bg-dark p-5">
        @csrf

        <div class="form-group">
            <label for="title">Başlık</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Başlık" required>
        </div>

        <div class="form-group">
            <label for="body">İçerik</label>
            <textarea name="body" id="body" class="form-control" placeholder="İçerik" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
@endsection
