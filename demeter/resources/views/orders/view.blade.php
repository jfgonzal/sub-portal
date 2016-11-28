@extends('layouts.app')
@section('content')
    @dump($ordersFulfilled)
    @dump($ordersPending)
    @dump($message)
    @if($message != null)
        <p class="alert alert-info">{{ $message }}</p>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Pending Orders - Oldest on the top</div>
                    @if($ordersPending != null && count($ordersPending) > 0)

                    <table class="table pending-orders" width="100%" border="0" cellspacing="0" cellpadding="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Order Info</th>
                            <th>Order Sandwich</th>
                            <th>Order Sides</th>
                            <th>Comments</th>
                            <th>Time Placed</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($ordersPending as $orderPending)
                                <tr>
                                    <td></td>
                                    <td>
                                        <ul>
                                            <li>{{ $orderPending->name }}</li>
                                            <li>{{ $orderPending->email }}</li>
                                            <li>{{ $orderPending->location }}</li>
                                    <td width="50%">
                                        <ul>
                                            <li><b>Bread</b>: {{ $orderPending->bread }}</li>
                                            <li><b>Condiments</b>: {{ $orderPending->condiment }}</li>
                                            <li><b>Cheese</b>: {{ $orderPending->cheese }}</li>
                                            <li><b>Meats</b>: {{ $orderPending->meat }}</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li><b>Soup</b>: {{ $orderPending->soup }}</li>
                                            <li><b>Chip/Cookie</b>: {{ $orderPending->chip_cookie }}</li>
                                            <li><b>Drink</b>: {{ $orderPending->drink }}</li>
                                        </ul>
                                    </td>
                                    <td>{{ $orderPending->comments }}</td>
                                    <td>{{ $orderPending->updated_at->format('h:m') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                        @else
                        <h3>No Pending Orders yet</h3>
                    @endif
                </div>
            </div>



            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Completed Orders - Newest on the Top</div>
                    @if($ordersFulfilled != null && count($ordersFulfilled) > 0)
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Order Info</th>
                            <th>Order Sandwich</th>
                            <th>Order Sides</th>
                            <th>Comments</th>
                            <th>Time Fulfilled</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($ordersFulfilled as $orderFulfilled)
                                <tr>
                                    <td>
                                        <ul>
                                            <li>{{ $orderFulfilled->name }}</li>
                                            <li>{{ $orderFulfilled->email }}</li>
                                            <li>{{ $orderFulfilled->location }}</li>
                                    <td width="50%">
                                        <ul>
                                            <li><b>Bread</b>: {{ $orderFulfilled->bread }}</li>
                                            <li><b>Condiments</b>: {{ $orderFulfilled->condiment }}</li>
                                            <li><b>Cheese</b>: {{ $orderFulfilled->cheese }}</li>
                                            <li><b>Meats</b>: {{ $orderFulfilled->meat }}</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li><b>Soup</b>: {{ $orderFulfilled->soup }}</li>
                                            <li><b>Chip/Cookie</b>: {{ $orderFulfilled->chip_cookie }}</li>
                                            <li><b>Drink</b>: {{ $orderFulfilled->drink }}</li>
                                        </ul>
                                    </td>
                                    <td>{{ $orderFulfilled->comments }}</td>
                                    <td>{{ $orderFulfilled->updated_at->format('h:m') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3>No Order Has been Completed Yet!</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
