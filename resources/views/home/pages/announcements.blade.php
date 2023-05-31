@extends("layouts.home")
@section("content")
    <div class="row">
        @foreach($announcements as $announcement)
        <div class=" col-md-4 p-5">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-text">{{$announcement->body}}</p>
                    <a href="{{route('home.properties')}}" class="btn btn-warning">Discover</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
