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
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="index.html">Products</a></li>
            <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
        </ul>
        <!--------------------
           END - Breadcrumbs
           -------------------->
        {{--<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>--}}
        <div class="content-i">
            <div class="content-box">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="element-wrapper">
                            <div class="element-actions">
                            </div>
                            <h6 class="element-header">Sales Dashboard</h6>
                            <div class="element-content">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <a class="element-box el-tablo" href="#">
                                            <div class="label">Products Sold</div>
                                            <div class="value">57</div>
                                            <div class="trending trending-up-basic"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a class="element-box el-tablo" href="#">
                                            <div class="label">Gross Profit</div>
                                            <div class="value">$457</div>
                                            <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-down"></i></div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a class="element-box el-tablo" href="#">
                                            <div class="label">New Customers</div>
                                            <div class="value">125</div>
                                            <div class="trending trending-down-basic"><span>9%</span><i class="os-icon os-icon-arrow-down"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--------------------
                   START - Color Scheme Toggler
                   -------------------->
                {{--<div class="floated-colors-btn second-floated-btn">--}}
                    {{--<div class="os-toggler-w">--}}
                        {{--<div class="os-toggler-i">--}}
                            {{--<div class="os-toggler-pill"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<span>Dark </span><span>Colors</span>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    {{--<script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>--}}
@stop