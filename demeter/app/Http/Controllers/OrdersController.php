<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use App\SandwichComponent;
use App\Side;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class OrdersController extends Controller
{
    public function index($message = null)
    {
        if (Session::has('message')) {
            $message =  Session::get('message');
            Session::forget('message');
        }

        $orders = new Order;
        $allPendingOrders = $orders->where('status', '=', 'pending')->orderBy('updated_at', 'ASC')->get();
        $allFulfilledOrders = $orders->where('status', '=', 'fulfilled')->orderBy('updated_at', 'DESC')->limit(15)->get();

        return view('orders.view')->with(
            [
                'ordersPending' => $allPendingOrders,
                'ordersFulfilled' => $allFulfilledOrders,
                'message' => $message,
            ]
        );
    }

    public function place($success = false)
    {
        $sandwichComponentsArray = null; $sideArray = null;

        $sandwichComponents = new SandwichComponent();
        $sandwichComponentsData = $sandwichComponents->get();
        $sides = new Side();
        $sidesData = $sides->get();

        foreach($sandwichComponentsData as $sandwichComponent){
            $sandwichComponentsArray[$sandwichComponent->type][] = $sandwichComponent;
        }

        foreach($sidesData as $side){
            $sideArray[$side->type][] = $side;
        }

        return view('orders.place')->with([
            'sandwichComponents' => $sandwichComponentsArray,
            'sides' => $sideArray,
            'success' => $success
        ]);
    }

    public function post(OrderRequest $orderRequest)
    {
        $order = new Order;

        if($order->where('email', '=', $orderRequest->request->get('email'))->where('status', '=', 'pending')->first() != null){
            return redirect('orders')->with(['message' => 'You have an order Already pending, please wait until it is completed before ordering again.']);
        }


        $meats = null;
        $cheese = $orderRequest->request->get('cheese');
        $condiment = $orderRequest->request->get('condiment');

        if($orderRequest->request->get('meat_boar') != null){
            foreach($orderRequest->request->get('meat_boar') as $boarsHead){
                $meats[] = $boarsHead . ' - BH ';
            }
        }
        if($orderRequest->request->get('meat_pub') != null) {
            foreach ($orderRequest->request->get('meat_pub') as $pubMeat) {
                $meats[] = $pubMeat . ' - P';
            }
        }

        if($meats != null && count($meats) > 1){
            $meats = implode(',', $meats);
        }

        if($orderRequest->request->get('cheese') != null && count($orderRequest->request->get('cheese')) > 1){
            $cheese = implode(',', $orderRequest->request->get('cheese'));
        }



        if($orderRequest->request->get('condiment') != null && count($orderRequest->request->get('condiment')) > 1){
            $condiment = implode(',', $orderRequest->request->get('condiment'));
        }


        $order->insert(
            [
                'name' => $orderRequest->request->get('name'),
                'email' => $orderRequest->request->get('email'),
                'location' => $orderRequest->request->get('location'),
                'bread' =>  $orderRequest->request->get('bread'),
                'condiment' => $condiment,
                'cheese' => $cheese,
                'meat' => $meats,
                'soup' => $orderRequest->request->get('soup'),
                'chip_cookie' => $orderRequest->request->get('chip_cookie'),
                'drink' => $orderRequest->request->get('drink'),
                'comments' => $orderRequest->request->get('comments'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        Session::put('message', 'Your Order Has been successfully placed');
        return redirect('orders');
    }
}
