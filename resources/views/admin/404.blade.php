@extends('admin/layouts/default')

@section('pageTitle', 'DashBoard')

@section('header_styles')

    {{--<link rel="stylesheet" href="{{ asset('assets/css/pages/only_dashboard.css') }}"/>--}}
    {{--<meta name="_token" content="{{ csrf_token() }}">--}}
@stop

{{-- Page content --}}
@section('content')
    <div class="content-w">
        <!--------------------
           START - Breadcrumbs
           -------------------->
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
        </ul>
        <!--------------------
           END - Breadcrumbs
           -------------------->
        <div class="content-i">
            <div class="content-box">
                <div class="big-error-w">
                    <h1>404</h1>
                    <h5>Page not Found</h5>
                    <h4>Oops, Something went missing...</h4>
                    <form>
                        <div class="input-group">
                            <input class="form-control" placeholder="Enter your search query here" type="text">
                            <div class="input-group-btn"><button class="btn btn-primary">Search</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    {{--<script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>--}}
@stop