@extends('admin/layouts/default')

@section('pageTitle', 'Update Pin')

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
            <li class="breadcrumb-item"><span>Update Pin</span></li>
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
                            <h6 class="element-header">Update Pin</h6>
                            <div class="element-content">
                                <div class="row">

                                    <div class="col-lg-8">
                                        <div class="element-wrapper">
                                            <div class="element-box">
                                                <form action="{{ route('post.pin.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                                    {{ csrf_field() }}
                                                    {{--<input value="{{$user->id}}" name="id"  type="hidden">--}}
                                                    <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for=""> Pin 4 digits</label>
                                                        <div class="col-sm-8">
                                                            <input required name="pin" value="{{$user->pin}}" minlength="4" maxlength="4" pattern="[0-9]*" class="form-control" placeholder="Choose a Pin i.e 1234" type="password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-form-label col-sm-4" for="">Pin Reintroduce</label>
                                                        <div class="col-sm-8">
                                                            <input required name="pin_confirmation" value="{{$user->pin}}" minlength="4" pattern="[0-9]*" maxlength="4" class="form-control" placeholder="Choose a same Pin i.e 1234" type="password">
                                                        </div>
                                                    </div>

                                                    <div class="form-buttons-w">
                                                        <button class="btn btn-primary" type="submit" > Update</button>
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


@stop