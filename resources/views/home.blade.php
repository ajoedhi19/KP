
@extends('layouts.header')
    
@section('container')
@auth

    @include('../master')
@else
<link rel="stylesheet" href="css/home.css">
<header class="masthead">
    
        <div class="masthead-subheading">Welcome To Our Telkom Akses Surabaya</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="/login">Please Regist</a>
    
</header>
@endauth
@endsection
        