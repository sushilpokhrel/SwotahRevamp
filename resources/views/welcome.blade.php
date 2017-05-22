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
        <div class="mdl-layout mdl-layout__content">
            <div class = "mdl-grid heading-panel">
                <div class = "mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--hide-phone logo" >
                    <img src="{{url('public_images/logo_swotah.png')}}">
                </div>
                <div class = "mdl-cell mdl-cell--hide-desktop mdl-cell--hide-tablet mdl-cell--4-col-phone logo" style = "text-align:center;" >
                    <img src="{{url('public_images/logo_swotah.png')}}">
                </div>

                    <div class = "mdl-cell mdl-cell--6-col mdl-cell--2-col-tablet mdl-cell--hide-phone"></div>
                    <a href="" class =  "mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone icon">
                        <i class="material-icons">account_circle</i>
                    </a>
                    <a href="" class =  "mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone icon">
                        <i class="material-icons">assignment</i>
                    </a>
                    <a href="" class = "mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone icon">
                        <i class="material-icons">contact_phone</i>
                    </a>
                    <a href="" class = "mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone icon">
                        <i class="material-icons">shopping_basket</i>
                    </a>



            </div>
        </div>



    {{--place for scripts--}}

    {{--put scripts here--}}

    {{--end scripts--}}
@endsection