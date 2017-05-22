@extends('layouts.master')
@section('title', 'View Trip')
@section('links')
    <link rel="stylesheet" href="{{url('css/trips_style.css')}}">
@stop
@section('metatags','')

    @section('content')
        @include('layouts.nav')
        <div class="cover-img">
            <img src="{{url('public_images/manaslu.jpg')}}" alt="manaslu">
        </div>
    @stop