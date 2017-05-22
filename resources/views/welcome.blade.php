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
        <div class="mdl-layout mdl-layout__content" >
            <div class="index-image">
                <img src="{{url('public_images/2.jpg')}}" alt="">
            </div>
            <div class = "mdl-grid heading-panel">
                <div class = "mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--hide-phone logo" >
                    <img src="{{url('public_images/logo_swotah.png')}}">
                </div>


                <div class = "mdl-cell mdl-cell--6-col mdl-cell--2-col-tablet mdl-cell--hide-phone"></div>
                <a  id="account" href="" class =  "mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone icon">
                    <div class="mdl-tooltip mdl-tooltip--large" for="account">My Account</div>
                    <i class="material-icons">account_circle</i>
                </a>
                <a href="" id = "brochure" class =  "mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone icon">
                    <i class="material-icons">assignment</i>
                    <div class="mdl-tooltip mdl-tooltip--large" for="brochure">Brochure</div>
                </a>
                <a href="" id = "contact" class = "mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone icon">
                    <i class="material-icons">contact_phone</i>
                    <div class="mdl-tooltip mdl-tooltip--large" for="contact">(+977) 01-4404750</div>
                </a>
                <a href="" id = "bucketlist" class = "mdl-cell mdl-cell--1-col mdl-cell--1-col-tablet mdl-cell--1-col-phone icon">
                    <i class="material-icons">favorite_border</i>
                    <div class="mdl-tooltip mdl-tooltip--large" for="bucketlist">Bucket List</div>
                </a>
            </div>
        </div>



    {{--place for scripts--}}


    {{--end scripts--}}
@endsection