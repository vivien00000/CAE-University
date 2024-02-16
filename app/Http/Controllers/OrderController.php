<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Order;
use App\Models\OrdersProduct;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{

    public function index_product()
    {
        $product = Products::query()
            ->select('*')
            ->get();

        return view('user_merch', compact('product'));
    }
    // public function view_orders()
    // {
    //     $orders = Order::query()
    //         ->select('*')
    //         ->where('user_id', '=', Session::get('user_id'))
    //         ->orderBy('time_placed', 'DESC')
    //         ->get();

    //     return view('user_merch', compact('orders'));
    // }


}
