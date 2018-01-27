@extends('admin/layouts/default')

@section('pageTitle', 'Historical')

@section('header_styles')

    <link href="{{ asset("assets/plugins/datatables/dataTables.bootstrap.css") }}" rel="stylesheet" type="text/css" />

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

                                                    <table class="table table-bordered" id="table" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>Toggle</th>
                                                            <th>Order Id</th>
                                                            <th>User Id</th>
                                                            <th>Email</th>
                                                            <th>Method</th>
                                                            <th>Amount</th>
                                                            <th>Refund</th>
                                                            <th>Balance</th>
                                                            <th>Date</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
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
    <script src="{{ asset("assets/plugins/datatables/jquery.dataTables.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/plugins/datatables/dataTables.bootstrap.min.js") }}" type="text/javascript"></script>

    <script type="text/javascript">

        $(function () {
            var table = $('#table').DataTable( {
                iDisplayLength: 100,
                "ajax": "/admin/orders/data",
                "columns": [
                    {
                        "className":      'details-control',
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ''
                    },

                    {data: 'order_id', name: 'order_id'},
                    {data: 'user_id', name: 'user_id'},
                    {data: 'payer_email', name: 'payer_email'},
                    {data: 'method', name: 'method'},
                    {data: 'amount', name: 'amount'},
                    {data: 'refund', name: 'refund'},
                    {data: 'balance', name: 'balance'},
                    {data: 'date', name: 'date'},
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ],
                "order": [[1, 'desc']],
                "responsive":true
            });

            $('#table tbody').on('click', 'td.details-control', function () {
                var tr = $(this).closest('tr');
                var row = table.row( tr );

                if ( row.child.isShown() ) {
                    row.child.hide();
                    tr.removeClass('shown');
                }
                else {

                    $.ajax({
                        url: 'orders/expand-order/'+row.data().order_id_for_ajax,
                        headers: { 'X-XSRF-TOKEN' : '{{\Illuminate\Support\Facades\Crypt::encrypt(csrf_token())}}' },
                        error: function() {
                            console.log('error')
                        },
                        success: function(data) {
                            row.child( data ).show();
                            tr.addClass('shown');
                        },
                        type: 'GET'
                    });
                }
            } );


        });
    </script>@stop