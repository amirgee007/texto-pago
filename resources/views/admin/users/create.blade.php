@extends('admin/layouts/default')

@section('pageTitle', 'Create User')

@section('header_styles')

@stop

@section('content')
    <section class="content-header">
        <h1>Add New User</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#"> Users</a></li>
            <li class="active">Add New User</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff"
                               data-loop="true"></i>
                            Add New User
                        </h3>
                        <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i> </span>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                            <h2 class="hidden">&nbsp;</h2>
                            <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                <label for="first_name" class="col-sm-2 control-label">First Name *</label>
                                <div class="col-sm-10">
                                    <input id="first_name" name="first_name" type="text"
                                           placeholder="First Name" class="form-control required"
                                           value="{!! old('first_name') !!}"/>

                                    {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                                <label for="last_name" class="col-sm-2 control-label">Last Name *</label>
                                <div class="col-sm-10">
                                    <input id="last_name" name="last_name" type="text" placeholder="Last Name"
                                           class="form-control required" value="{!! old('last_name') !!}"/>

                                    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                <label for="email" class="col-sm-2 control-label">Email *</label>
                                <div class="col-sm-10">
                                    <input id="email" name="email" placeholder="E-mail" type="text"
                                           class="form-control required email" value="{!! old('email') !!}"/>
                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('password', 'has-error') }}">
                                <label for="password" class="col-sm-2 control-label">Password *</label>
                                <div class="col-sm-10">
                                    <input id="password" name="password" type="password" placeholder="Password"
                                           class="form-control required" value="{!! old('password') !!}"/>
                                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                                <label for="password_confirm" class="col-sm-2 control-label">Confirm Password *</label>
                                <div class="col-sm-10">
                                    <input id="password_confirm" name="password_confirm" type="password"
                                           placeholder="Confirm Password " class="form-control required"
                                           value="{!! old('password_confirm') !!}"/>
                                    {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->first('role', 'has-error') }}">
                                <label for="group" class="col-md-2 control-label">Role</label>
                                <div class="col-md-10">
                                    <select class="form-control required" title="Select Role" name="role" required>
                                        <option value="">Select Role</option>
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}" @if($role->id == old('role')) selected="selected" @endif>{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    {!! $errors->first('role', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-responsive btn-warning btn-md">cancel</button>
                                <button type="submit" class="btn btn-responsive btn-primary btn-md">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
{{--    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>--}}
    <script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>
{{--    <script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>--}}
    <script src="{{ asset('assets/vendors/bootstrapwizard/jquery.bootstrap.wizard.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/adduser.js') }}"></script>
<script src="{{asset('assets/select2/select2.full.min.js')}}" type="text/javascript"></script>

@stop
