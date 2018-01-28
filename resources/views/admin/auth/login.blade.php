<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2018 15:53:08 GMT -->
<head><title>Texto-Pago | Login</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main0dc4.css?version=4.1.0') }}">
</head>
<body class="auth-wrapper">
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w">
            <a href="#">
                <img alt="" src="assets/img/logo-new.png" height="46" width="80%"></a>
        </div>
        <h4 class="auth-header">Login Form</h4>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            {{--@include('admin.notifications')--}}

            @if (session('message'))
                <div class="alert alert-danger alert-dismissable margin5">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Error:</strong>  {{ session('message') }}
                </div>
            @endif

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="">Phone</label>
                <input class="form-control" name="phone" autofocus placeholder="Enter your phone" type="number" value="{{ old('phone') }}">
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('pin') ? ' has-error' : '' }}">
                <label for="">PIN</label>
                <input class="form-control" name="pin" maxlength="4" minlength="4" placeholder="Enter your PIN" type="password" value="{{ old('pin') }}">
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
                @if ($errors->has('pin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pin') }}</strong>
                    </span>
                @endif
            </div>
            <div class="buttons-w">
                <button type="submit" class="btn btn-primary">Log me in</button>
                <a href="{{route('register')}}" class="btn btn-danger" style="color: white; float: right">Sign Up</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>
