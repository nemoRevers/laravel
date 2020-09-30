<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Order;

class customerController extends Controller
{
    public function orderSubmit(OrderRequest $req){
        $order = new Order();
        $order->headline = $req->input('Headline');
        $order->description = $req->input('Description');
        $order->image = $req->input('Image');
        $order->city = $req->input('City');
        $order->date_of_completion = $req->input('Date_of_completion');
        $order->price = $req->input('Price');
        $order->name = $req->input('Name');

        $order->save();

        return redirect()->route('formOrder');
    }
}
