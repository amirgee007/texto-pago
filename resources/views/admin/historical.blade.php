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
            <li class="breadcrumb-item"><span>Historical</span></li>
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
                            <h6 class="element-header">Historical</h6>
                            <div class="element-content">
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="element-wrapper">
                                            <div class="element-box">

                                                <div class="table-responsive">
                                                    <table class="table table-lightborder">
                                                        <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Sent By Name</th>
                                                            <th>Sent By user Name</th>
                                                            <th>Received By Name</th>
                                                            <th>Received By user Name</th>
                                                            <th>Type</th>
                                                            <th>Amount</th>
                                                            {{--<th>Status</th>--}}
                                                            <th>Date</th>
                                                            {{--<th class="text-right">Date</th>--}}
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($transactions as $transaction)
                                                            {{--recipientUser--}}
                                                            {{--payeeUser--}}
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$transaction->payeeUser->first_name}}</td>
                                                            <td>{{$transaction->payeeUser->user_name}}</td>
                                                            <td>{{$transaction->recipientUser->first_name}}</td>
                                                            <td>{{$transaction->recipientUser->user_name}}</td>
                                                            <td>{{$transaction->type}}</td>
                                                            @if($transaction->type=='withdraw' || $transaction->payee_user_id==auth()->id() )
                                                                <td style="color: red">-Bs {{$transaction->amount}}</td>
                                                            @else
                                                                <td style="color: limegreen">Bs {{$transaction->amount}}</td>
                                                            @endif
                                                            <td>{{\Carbon\Carbon::parse($transaction->created_at)->format('d F Y')}}</td>
                                                        </tr>
                                                        @endforeach
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