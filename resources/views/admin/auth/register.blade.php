<!DOCTYPE html>
<html>
<head>
    <title>Register | Texto Pago</title>
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

    <style>
        input[type="radio"].readonly {
            opacity: 0.5; /* not necessary */
            pointer-events: none;
        }
    </style>

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
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="steps-w">
                                    <div class="step-triggers">
                                        <a class="step-trigger active" href="#stepContent1" id="first_step">First Step</a>
                                        <a class="step-trigger" href="#stepContent2" id="second_step">Second Step</a>
                                    </div>
                                    <div id="choose_account">
                                    Choose An Account
                                    <label class="radio-inline" style="padding-left: 5%; "><input type="radio" required name="type" value="personal" checked>Personal</label>
                                    <label class="radio-inline" style="float: right"><input type="radio" required name="type" value="commercial">Commercial</label>
                                    <hr>
                                    </div>
                                    @if (session('message'))
                                        <div class="alert alert-danger alert-dismissable margin5">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Error:</strong>  {{ session('message') }}
                                        </div>
                                    @endif
                                    <div class="step-contents">

                                        <div class="step-content active" id="stepContent1">

                                            {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                                                {{--<label for="name" class="col-md-4 control-label">Name</label>--}}

                                                {{--<div class="col-md-6">--}}
                                                    {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

                                                    {{--@if ($errors->has('name'))--}}
                                                        {{--<span class="help-block">--}}
                                                            {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                                        {{--</span>--}}
                                                    {{--@endif--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input required class="form-control" name="first_name" placeholder="Name" type="text">
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""> Last Name</label>
                                                        <input required class="form-control" name="last_name" placeholder="Last Name" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">ID</label>
                                                        <input required class="form-control" name="user_id" placeholder="ID" type="number">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""> Cell phone #</label>
                                                        <input required class="form-control" name="phone" placeholder="Cell Phone" type="number">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">User</label>
                                                        <input required class="form-control" name="user_name" placeholder="User Name" type="text">
                                                    </div>
                                                </div>
                                            </div>

                                        <div id="commercial_fields" style="display: none">
                                            <div class="form-group">
                                                <label for="">Commercial Name</label>
                                                <input class="form-control commercialInput" name="commercial_name" placeholder="Commercial Name" type="text">
                                            </div><div class="form-group">
                                                <label for="">Company Name</label>
                                                <input class="form-control commercialInput" name="company_name" placeholder="Company Name" type="text">
                                            </div><div class="form-group">
                                                <label for="">Tax ID</label>
                                                <input class="form-control commercialInput" name="tax_id" placeholder="Tax Id" type="number">
                                            </div>
                                        </div>

                                            <div class="form-buttons-w text-right">
                                                <a class="btn btn-primary step-trigger-btn" href="#stepContent2"> Continue</a>
                                                <a href="{{route('login')}}" class="btn btn-success" style="color: white; float: left">Sign In</a>
                                            </div>
                                        </div>


                                        <div class="step-content" id="stepContent2">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for=""> Choose a 4 digit PIN</label>
                                                        <input required name="pin" minlength="4" maxlength="4" class="form-control" placeholder="Pin" type="password">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Reintroduce a 4 digit PIN</label>
                                                        <input required name="pin_confirmation" minlength="4" maxlength="4" class="form-control" placeholder="Pin Confirmation" type="password">
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
    </div>
</div>
<script type="text/javascript" src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main0dc4.js?version=4.1.0') }}"></script>

<script src="{{ asset('assets/vendors/toastr/js/toastr.min.js') }}"></script>
<script src="{{ asset('assets/vendors/toastr/js/pages/ui-toastr.js') }}"></script>

<script>

    $(document).ready(function() {

        $('#first_step').click(function () {
            $("#choose_account").fadeIn('slow');
        });

        $('#second_step').click(function () {
            $("#choose_account").fadeOut('slow');
        });


        $('input[type=radio][name=type]').change(function() {
            if (this.value == 'commercial') {
                $('#commercial_fields').show('slow');
                $('.commercialInput').prop('required',false);
                $('.commercialInput').prop('disabled',false);
            }
            else if (this.value == 'personal') {
                $('#commercial_fields').hide('slow');
                $('.commercialInput').prop('required',true);
                $('.commercialInput').prop('disabled',true);
            }
        });
    });
</script>


</body>
</html>