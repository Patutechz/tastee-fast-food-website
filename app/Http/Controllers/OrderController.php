<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_number' => 'required|max:255',
            'product' => 'required|max:255',
            'customer_address' => 'required|max:255',
        ]);

        Order::create(
            $request->all()               
        );

        return redirect()->back()->with('message','your order has been sent been successfully.');
    }
}