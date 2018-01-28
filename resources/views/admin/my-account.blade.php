@extends('admin/layouts/default')

@section('pageTitle', 'My Account')

@section('header_styles')
    <link href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
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
            <li class="breadcrumb-item"><span>My Account</span></li>
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
                            <h6 class="element-header">My Account</h6>
                            <div class="element-content">
                                <div class="row">

                                    <div class="col-lg-8">
                                        <div class="element-wrapper">
                                            <div class="element-box">
                                                <form action="{{ route('post.send.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">

                                                <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for=""> Profile Photo</label>
                                                        <div class="col-sm-8">
                                                            <input id="input-file-now" type="file" accept="image/x-png,image/gif,image/jpeg" @if(@$user->profile_pic) data-default-file="{{asset('uploads/users/'.@$user->profile_pic)}}" @endif name="profile_pic" class="dropify"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for=""> First Name</label>
                                                        <div class="col-sm-8">
                                                            <input required name="first_name" class="form-control" placeholder="Name" type="text">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for="">Last Name</label>
                                                        <div class="col-sm-8">
                                                            <input required class="form-control" name="last_name" placeholder="Last Name" type="text">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for="">ID</label>
                                                        <div class="col-sm-8">
                                                            <input required class="form-control" name="user_id" placeholder="ID" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for="">User</label>
                                                        <div class="col-sm-8">
                                                            <input required class="form-control" name="user_name" placeholder="User Name" type="text">
                                                        </div>
                                                    </div>

                                                    <div class="form-buttons-w">
                                                        <button class="btn btn-primary" type="submit"> Update</button>
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
            </div>
        </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/dropify/dist/js/dropify.min.js') }}"></script>
    <script>

        $(function () {
            $('.dropify').dropify();
        });
    </script>
@stop