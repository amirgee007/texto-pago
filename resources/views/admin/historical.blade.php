@extends('admin/layouts/default')

@section('pageTitle', 'Historical')

@section('header_styles')
{{--    <link href="{{ asset("assets/plugins/datatables/dataTables.bootstrap.css") }}" rel="stylesheet" type="text/css" />--}}

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

                                    <div class="col-lg-12">
                                        <div class="element-wrapper">
                                            <div class="element-box">

                                                <div class="table-responsive">
                                                    <table class="table table-lightborder">
                                                        <thead>
                                                        <tr>
                                                            <th>Customer Name</th>
                                                            <th>Orders</th>
                                                            <th>Location</th>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-right">Order Total</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>John Mayers</td>
                                                            <td>12</td>
                                                            <td><img alt="" src="img/flags-icons/us.png" width="25px"></td>
                                                            <td class="text-center">
                                                                <div class="status-pill green" data-title="Complete"
                                                                     data-toggle="tooltip"></div>
                                                            </td>
                                                            <td class="text-right">$354</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kelly Brans</td>
                                                            <td>45</td>
                                                            <td><img alt="" src="img/flags-icons/ca.png" width="25px"></td>
                                                            <td class="text-center">
                                                                <div class="status-pill red" data-title="Cancelled"
                                                                     data-toggle="tooltip"></div>
                                                            </td>
                                                            <td class="text-right">$94</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tim Howard</td>
                                                            <td>112</td>
                                                            <td><img alt="" src="img/flags-icons/uk.png" width="25px"></td>
                                                            <td class="text-center">
                                                                <div class="status-pill green" data-title="Complete"
                                                                     data-toggle="tooltip"></div>
                                                            </td>
                                                            <td class="text-right">$156</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Joe Trulli</td>
                                                            <td>1,256</td>
                                                            <td><img alt="" src="img/flags-icons/es.png" width="25px"></td>
                                                            <td class="text-center">
                                                                <div class="status-pill yellow" data-title="Pending"
                                                                     data-toggle="tooltip"></div>
                                                            </td>
                                                            <td class="text-right">$1,120</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fred Kolton</td>
                                                            <td>74</td>
                                                            <td><img alt="" src="img/flags-icons/fr.png" width="25px"></td>
                                                            <td class="text-center">
                                                                <div class="status-pill green" data-title="Complete"
                                                                     data-toggle="tooltip"></div>
                                                            </td>
                                                            <td class="text-right">$74</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
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
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    {{--<script src="{{ asset("assets/plugins/datatables/jquery.dataTables.min.js") }}" type="text/javascript"></script>--}}
    {{--<script src="{{ asset("assets/plugins/datatables/dataTables.bootstrap.min.js") }}" type="text/javascript"></script>--}}

    <script type="text/javascript">

    </script>@stop