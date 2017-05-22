{{--Extending the master page--}}
@extends('layouts.master')
{{--Section for individual title for a page--}}
@section('title')Index Page @endsection
{{--Title end--}}
{{--Place for css links--}}
<link rel="stylesheet" href="{{url('css/indexpage.css')}}">
{{--End css--}}

{{--Section for Meta Tags SEO Purposes yield('metatags')--}}
    {{--Put tags here--}}
{{--End section for meta tags--}}

{{--Section start for content--}}
@section('content')
    {{--Outer Layout --}}
        <div class="mdl-layout mdl-layout__content" >
            <div class="cover-img">
                <img src="{{url('public_images/2.jpg')}}" alt="">
            </div>
            @include('layouts.nav')
        </div>





    {{--place for scripts--}}


    {{--end scripts--}}
@endsection