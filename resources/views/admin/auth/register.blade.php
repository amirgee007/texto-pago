<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main0dc4.css?version=4.1.0') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('css/main0dc4.css?version=4.1.0') }}">


</head>
<body>
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w wider" style="max-width:700px">
        <div class="logo-w" style="padding: 5%">
            <a href="#">
                <img alt="" src="assets/img/logo-big.png">
            </a>
        </div>
        <h4 class="auth-header">Create new account</h4>

        <div class="content-w">
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form>
                                <div class="steps-w">
                                    <div class="step-triggers">
                                        <a class="step-trigger active" href="#stepContent1">First Step</a>
                                        <a class="step-trigger" href="#stepContent2">Second Step</a>
                                    </div>
{{--Name, Last Name, ID , cell phone #,User , Commercial Name,Company Name, Tax ID--}}
                                    <div class="step-contents">
                                        <div class="step-content active" id="stepContent1">
                                            

                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input class="form-control" placeholder="Name" type="text">
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""> Last Name</label>
                                                        <input class="form-control" placeholder="First Name" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">ID</label>
                                                        <input class="form-control" placeholder="Last Name" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""> Cell phone #</label>
                                                        <input class="form-control" placeholder="First Name" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">User</label>
                                                        <input class="form-control" placeholder="Last Name" type="number">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-buttons-w text-right">
                                                <a class="btn btn-primary step-trigger-btn" href="#stepContent2"> Continue</a>
                                            </div>
                                        </div>


                                        <div class="step-content" id="stepContent2">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""> Choose a 4 digit PIN</label>
                                                        <input class="form-control" placeholder="First Name" type="password">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Reintroduce a 4 digit PIN</label>
                                                        <input style="" class="form-control" placeholder="Last Name" type="password">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-buttons-w text-right">
                                                <button class="btn btn-primary">Register</button>
                                                <a href="{{route('login')}}" class="btn btn-success" style="color: white; float: right">Sign In</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>








        {{--<form action="#">--}}
            {{--<div class="form-group">--}}
                {{--<label for=""> Email address</label>--}}
                {{--<input class="form-control" placeholder="Enter email" type="email">--}}
                {{--<div class="pre-icon os-icon os-icon-email-2-at2"></div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-6">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for=""> Password</label>--}}
                        {{--<input class="form-control" placeholder="Password" type="password">--}}
                        {{--<div class="pre-icon os-icon os-icon-fingerprint"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-6">--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="">Confirm Password</label>--}}
                        {{--<input class="form-control" placeholder="Password" type="password"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="buttons-w">--}}
                {{--<button class="btn btn-primary">Register Now</button>--}}
                {{--<a href="{{route('login')}}" class="btn btn-success" style="color: white; float: right">Sign In</a>--}}
            {{--</div>--}}
        {{--</form>--}}
    </div>
</div>
<script type="text/javascript" src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main0dc4.js?version=4.1.0') }}"></script>

<script src="{{ asset('assets/vendors/toastr/js/toastr.min.js') }}"></script>
<script src="{{ asset('assets/vendors/toastr/js/pages/ui-toastr.js') }}"></script>

</body>
</html>