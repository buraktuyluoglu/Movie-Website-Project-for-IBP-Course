@extends("layouts.admin")
@section("content")
        <div class="row">
            <div class="col-md-1 m-3">
                <a href="{{route('admin.movie.create')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm">Create Movie</a>
            </div>
        </div>
      @livewire('movie')

@endsection
