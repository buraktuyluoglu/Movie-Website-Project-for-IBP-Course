<html>
<!--Head-->
@include("home._head")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap-grid.min.css" integrity="sha512-JQksK36WdRekVrvdxNyV3B0Q1huqbTkIQNbz1dlcFVgNynEMRl0F8OSqOGdVppLUDIvsOejhr/W5L3G/b3J+8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</html>
<body>

@section("header")
    @include('home._header')
@show
<!--Content-->
<div style="height:50px;"></div>
@section("content")
@show

@include('home.components.brands')
<!--Footer-->
@section("footer")
    @include("home._footer")
@show
<!--Scripts-->
@include("home._scripts")
@livewireScripts
</body>
