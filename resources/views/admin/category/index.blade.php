@extends("layouts.admin")
@section("content")
        <div class="row">
            <div class="col-md-1 m-3">
                <a href="{{route('admin.category.create')}}" type="button" class="btn btn-block bg-gradient-primary btn-sm">Create Category</a>
            </div>
        </div>
      @livewire('category')

@endsection
