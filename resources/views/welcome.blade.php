{{--Extending the master page--}}
@extends('layouts.master')
{{--Section for individual title for a page--}}
@section('title')Index Page @endsection
{{--Title end--}}
{{--Place for css links--}}
<link rel="stylesheet" href="{{url('css/index_style.css')}}">
{{--End css--}}

{{--Section for Meta Tags SEO Purposes yield('metatags')--}}
    {{--Put tags here--}}
{{--End section for meta tags--}}

{{--Section start for content--}}
@section('content')
    {{--Outer Layout --}}

    @include('layouts.nav');



    {{--place for scripts--}}

    {{--put scripts here--}}

    {{--end scripts--}}
@endsection