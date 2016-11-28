@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Select Your Action</div>
                    <div class="panel-body">
                        <a href="/orders/place">
                            <div class="col-md-6 col-md-offset-4 control-label btn btn-info">Place an Order</div>
                        </a>
                        <div class="col-md-6 col-md-offset-4"></div>
                        <a href="/orders">
                            <div class="col-md-6 col-md-offset-4 control-label btn btn-info">Check Orders Queue</div>
                        </a>
                        <div class="col-md-6 col-md-offset-4"></div>
                        <a href="#">
                            <div class="col-md-6 col-md-offset-4 control-label btn btn-info">Request Relief</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection