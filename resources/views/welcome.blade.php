{{--Extending the master page--}}
@extends('layouts.master')
{{--Section for individual title for a page--}}
@section('title')Index Page @endsection
{{--Title end--}}
{{--Place for css links--}}
    {{--put links here--}}
{{--End css--}}

{{--Section for Meta Tags SEO Purposes yield('metatags')--}}
    {{--Put tags here--}}
{{--End section for meta tags--}}

{{--Section start for content--}}
@section('content')

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">HTML5 Tutorial</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Home</a>
                <a class="mdl-navigation__link" href="">About</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content" style="padding-left:100px;">Hello World!</div>
        </main>
    </div>

    {{--place for scripts--}}

    {{--put scripts here--}}

    {{--end scripts--}}
@endsection