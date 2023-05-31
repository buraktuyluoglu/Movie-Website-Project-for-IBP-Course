<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin._head')
<body class="antialiased">
@section('header')
    @include("admin._navbar")
    @include("admin._sidebar")
@show
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper img-fluid"
     style="
            background-image: url('{{asset('assets_admin')}}/bg.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            ">
 <div class="content-wrapper" style="background:rgba(0,0,0,0.8); margin:0;" >
   <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            @section("head")
            @show
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @section('content')
            @show
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
</div>
@section('footer')
@show
@include('admin._scripts')
@section("bottom-scripts")
@show
@livewireScripts
</body>
</html>
