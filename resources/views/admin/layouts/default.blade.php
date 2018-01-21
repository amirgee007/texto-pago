<!DOCTYPE html>
<html>

<head>

    <title>@yield('pageTitle') | Ethel Dashboard</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    {{--<link href="../fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet" type="text/css">--}}


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/dropzone/dist/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bower_components/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main0dc4.css?version=4.1.0') }}">

    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->


<body class=" with-content-panel">
<div class="all-wrapper menu-side with-side-panel">
    <div aria-hidden="true" class="onboarding-modal modal fade animated show-on-load" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
            <div class="modal-content text-center">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Skip Intro</span><span class="os-icon os-icon-close"></span></button>
                <div class="onboarding-slider-w">
                    <div class="onboarding-slide">
                        <div class="onboarding-media"><img alt="" src="img/bigicon2.png" width="200px"></div>
                        <div class="onboarding-content with-gradient">
                            <h4 class="onboarding-title">Example of onboarding screen!</h4>
                            <div class="onboarding-text">This is an example of a multistep onboarding screen, you can use it to introduce your customers to your app, or collect additional information from them before they start using your app.</div>
                        </div>
                    </div>
                    <div class="onboarding-slide">
                        <div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
                        <div class="onboarding-content with-gradient">
                            <h4 class="onboarding-title">Example Request Information</h4>
                            <div class="onboarding-text">In this example you can see a form where you can request some additional information from the customer when they land on the app page.</div>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"><label for="">Your Full Name</label><input class="form-control" placeholder="Enter your full name..." type="text" value=""></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Your Role</label>
                                            <select class="form-control">
                                                <option>Web Developer</option>
                                                <option>Business Owner</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="onboarding-slide">
                        <div class="onboarding-media"><img alt="" src="img/bigicon6.png" width="200px"></div>
                        <div class="onboarding-content with-gradient">
                            <h4 class="onboarding-title">Showcase App Features</h4>
                            <div class="onboarding-text">In this example you can showcase some of the features of your application, it is very handy to make new users aware of your hidden features. You can use boostrap columns to split them up.</div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="features-list">
                                        <li>Fully Responsive design</li>
                                        <li>Pre-built app layouts</li>
                                        <li>Incredible Flexibility</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="features-list">
                                        <li>Boxed & Full Layouts</li>
                                        <li>Based on Bootstrap 4</li>
                                        <li>Developer Friendly     </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-w">

        @include('admin.layouts._left_menu')
        @yield('content')

    </div>
    <div class="display-type"></div>
</div>

<script type="text/javascript" src="{{ asset('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/moment/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/chart.js/dist/Chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/dropzone/dist/dropzone.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/tether/dist/js/tether.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/dist/util.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/dist/alert.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/dist/button.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/dist/modal.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/dist/tab.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/bower_components/bootstrap/js/dist/popover.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main0dc4.js?version=4.1.0') }}"></script>


<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42863888-9', 'auto');
    ga('send', 'pageview');
</script>
</body>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jan 2018 15:52:42 GMT -->
</html>
