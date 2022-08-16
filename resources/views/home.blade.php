@extends('layouts.header')
    
@section('container')
@auth

    @include('../master')
@else
    <h1>Halaman Home</h1>
@endauth
@endsection
        