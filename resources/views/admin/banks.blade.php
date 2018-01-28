@extends('admin/layouts/default')

@section('pageTitle', 'Bank')

@section('header_styles')

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
            <li class="breadcrumb-item"><span>Banks</span></li>
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
                            <h6 class="element-header">Bank</h6>
                            <div class="element-content">
                                <div class="row">

                                    <div class="col-lg-8">
                                        <div class="element-wrapper">
                                            <div class="element-box">
                                                <form action="{{ route('post.bank.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                    {{ csrf_field() }}

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for=""> Bank</label>
                                                        <div class="col-sm-8">
                                                            <input required name="name" class="form-control" placeholder="Bank" type="text">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for=""> Account #</label>
                                                        <div class="col-sm-8">
                                                            <input required name="account_number" class="form-control" placeholder="Account #" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="form-buttons-w">
                                                        <button class="btn btn-primary" type="submit" > Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-lightborder">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Bank Id</th>
                                                <th>Name</th>
                                                <th>Account Number</th>
                                                <th>Avail Funds</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($banks as $bank)

                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$bank->bank_id}}</td>
                                                    <td>{{$bank->name}}</td>
                                                    <td>{{$bank->account_number}}</td>
                                                    <td>{{$bank->avail_funds}}</td>
                                                    <td>{{\Carbon\Carbon::parse($bank->created_at)->format('d F Y')}}</td>

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
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop