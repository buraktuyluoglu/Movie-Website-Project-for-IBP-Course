@extends('layouts.home')
@section('content')
<style>
    .nav-tabs{
        display:flex;
        background: #fff;
        height: 80px;
        justify-content: center;
        align-items: center;
    }
    .nav-tabs li a{
        font-size:24px;
        font-weight: 600;
    }
    input{
        background: #2d3748;
        height:36px;
        color:white;
        text-indent: 12px;
    }

    table{
        background-color:#fff;
        padding:25px;
        width:100%;
    }
</style>
    <div class="container my-5 py-5"  >
        <h2 class="font-semibold text-xl text-gray-800 leading-tight my-3">
                {{ __('Profile') }}
        </h2>
        <div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a class="btn btn-warning px-3 py-2 m-2" href="#profile" data-toggle="tab">Profile</a>
                        </li>
                        <li>
                            <a href="#order"  class="btn btn-warning px-3 py-2 m-2" data-toggle="tab">Comments</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active show" id="profile">
                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                        <div class="max-w-xl">
                                            @include('profile.partials.update-profile-information-form')
                                        </div>
                                    </div>

                                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                        <div class="max-w-xl">
                                            @include('profile.partials.update-password-form')
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade table-hover" id="order">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Movie</th>
                                    <th>Type</th>
                                    <th>Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach (\Illuminate\Support\Facades\Auth::user()->comments as $comment)
                                    <tr>
                                        <td>{{ $comment->id }}</td>
                                        <td><a href="{{route('home.movie_show',['id' => $comment->movie_id]) }}">{{$comment->movie->name}}</a></td>
                                        <td>{{ $comment->parent_id===0?"YORUM":"YANIT" }}</td>
                                        <td>{{ $comment->comment }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
