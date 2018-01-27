@extends('admin/layouts/default')

@section('pageTitle', 'Withdraw')

@section('header_styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}">

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
            <li class="breadcrumb-item"><a href="#">texto-pago</a></li>
            <li class="breadcrumb-item"><span>withdraw</span></li>
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
                            <h6 class="element-header">Withdraw</h6>
                            <div class="element-content">
                                <div class="row">

                                    <div class="col-lg-8">
                                        <div class="element-wrapper">
                                            <div class="element-box">
                                                <form>
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for=""> Amount</label>
                                                        <div class="col-sm-8">
                                                            <input required name="amount" class="form-control" step="0.0001" placeholder="Enter Amount in BS" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for=""> Balance</label>
                                                        <div class="col-sm-8">
                                                            <input class="form-control" readonly type="number">
                                                        </div>
                                                    </div>

                                                    <div class="form-buttons-w">
                                                        <button class="btn btn-primary" type="submit" > Withdraw</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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
    <script type="text/javascript" src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $("#send_for").select2({
                'multiple': 'multiple',
                placeholder: "Select a user Name",
                width: '100%'
            });
        });
    </script>

    {{--<script type="text/javascript" src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>--}}
@stop