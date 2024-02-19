<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Product;
=======
use App\Models\Products;
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
use App\Models\Order;
use App\Models\OrdersProduct;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
<<<<<<< HEAD
    public function cancel_order(string $id)
    {
        $orders = Order::query()
            ->select('*')
            ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
            ->join('products', 'orders_products.product_id', '=', 'products.product_id')
            ->where('orders.order_id', '=', $id)
            ->get();

        if ($orders[0]->user_id == Session::get('user_id')) {
            $order = Order::where('order_id', '=', $id)
                ->update(
                    [
                        'status' => 'cancelled'
                    ]
                );

            return redirect('/orders/' . $id)->with('success', 'Order cancelled.');
        }
    }

    public function receive_order(string $id)
    {
        $orders = Order::query()
            ->select('*')
            ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
            ->join('products', 'orders_products.product_id', '=', 'products.product_id')
            ->where('orders.order_id', '=', $id)
            ->get();

        if ($orders[0]->user_id == Session::get('user_id')) {
            $order = Order::where('order_id', '=', $id)
                ->update(
                    [
                        'status' => 'finished'
                    ]
                );

            return redirect('/orders/' . $id)->with('success', 'Order finished. Please enjoy!');
        }
    }

    public function update_order_status(Request $r, string $id)
    {
        Order::where('order_id', '=', $id)
            ->update(
                [
                    'status' => $r->input("status")
                ]
            );

        $order = Order::query()
            ->select('status', 'user_id')
            ->where('order_id', '=', $id)
            ->get()
            ->first();

        $notif = new Notification;

        switch ($order->status) {
            case "accepted":
                $notif->content = "Your order has been accepted! Please wait for your order to be completed and delivered.";
                break;
            case "delivering":
                $notif->content = "Your order is on the way! Please be ready with your payment.";
                break;
            case "delivered":
                $notif->content = "Your order has been delivered, enjoy! Please mark the order as received.";
                break;
        }

        $notif->redirect = "/orders/" . $id;
        $notif->user_id = $order->user_id;
        $notif->save();

        return redirect('/admin/orders/' . $id)->with('success', 'Updated order status to ' . $r->input("status"));
    }

    public function accept_order(string $id)
    {
        $order = Order::where('order_id', '=', $id)
            ->update(
                [
                    'status' => 'accepted',
                ]
            );

        return redirect('/admin/orders/' . $id)->with('success', 'Updated order status to accepted.');
    }

    public function show_order(string $id)
    {
        $orders = Order::query()
            ->select('*')
            ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
            ->join('products', 'orders_products.product_id', '=', 'products.product_id')
            ->where('orders.order_id', '=', $id)
            ->get();

        $grand_total = Order::query()
            ->select(DB::raw('SUM(price * quantity) AS grand_total'))
            ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
            ->join('products', 'orders_products.product_id', '=', 'products.product_id')
            ->where('orders.order_id', '=', $id)
            ->get()
            ->first();

        $user_info = Order::query()
            ->select('users.last_name', 'users.first_name', 'image', 'province', 'mobile_number', 'status')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->join('students', 'students.student_id', '=', 'users.student_id')
            ->join('students_photos', 'students.student_id', '=', 'students_photos.student_id')
            ->where('orders.order_id', '=', $id)
            ->get()
            ->last();

        return view('order_admin_show', compact('orders', 'grand_total', 'user_info'));
    }

    public function show_all_orders()
    {
        $orders = Order::query()
            ->select('order_id', 'time_placed', 'status', 'orders.user_id', 'first_name', 'last_name')
            ->join('users', 'orders.user_id', '=', 'users.user_id')
            ->orderBy('time_placed', 'DESC')
            ->get();

        return view('order_admin', compact('orders'));
    }

    public function view_order(string $id)
    {
        $orders = Order::query()
            ->select('*')
            ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
            ->join('products', 'orders_products.product_id', '=', 'products.product_id')
            ->where('orders.order_id', '=', $id)
            ->get();

        if (Session::get('user_id') == $orders[0]->user_id) {
            $grand_total = Order::query()
                ->select(DB::raw('SUM(price * quantity) AS grand_total'))
                ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
                ->join('products', 'orders_products.product_id', '=', 'products.product_id')
                ->where('orders.order_id', '=', $id)
                ->get()
                ->first();

            $status = $orders[0]->status;
            $progress_percent = 0;

            switch ($status) {
                case "waiting":
                    $progress_percent = 10;
                    break;
                case "accepted":
                    $progress_percent = 25;
                    break;
                case "preparing":
                    $progress_percent = 50;
                    break;
                case "delivering":
                    $progress_percent = 70;
                    break;
                case "delivered":
                    $progress_percent = 90;
                    break;
                case "finished":
                    $progress_percent = 100;
                    break;
                case "cancelled":
                    $progress_percent = 0;
                    break;
            }

            return view('order_show', compact('orders', 'grand_total', 'progress_percent'));
        } else {
            return redirect('/orders')->with('fail', "Unauthorized access! Incorrect user logged in.");
        }
    }

    public function view_orders()
    {
        $orders = Order::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->orderBy('time_placed', 'DESC')
            ->get();

        return view('order', compact('orders'));
    }

    public function place_order(Request $r)
    {
        $order = new Order;
        $order->user_id = Session::get('user_id');
        $order->save();

        $menu = Product::query()
            ->select('*')
            ->where('stock', '>', '0')
            ->get();

        $order_products = [];
        for ($i = 0; $i < count($menu); $i++) {
            $num_ordered = $r->input('order_' . $menu[$i]->product_id);
            if ($num_ordered > 0) {
                $op = new OrdersProduct;
                $op->order_id = $order->order_id;
                $op->product_id = $menu[$i]->product_id;
                $op->quantity = $num_ordered;
                $op->save();
                array_push($order_products, $op);
            }
        }

        $receipt = Order::query()
            ->select('name', 'quantity', 'price')
            ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
            ->join('products', 'orders_products.product_id', '=', 'products.product_id')
            ->where('orders.order_id', '=', $order->order_id)
            ->get();

        return view('cafeteria_success', compact('order', 'order_products', 'receipt'));
    }

    public function index()
    {
        $menu = Product::query()
            ->select('*')
            ->get();

        $ongoing_orders = [];
        if (Session::get('user_id')) {
            $ongoing_orders = Order::query()
                ->select('*')
                ->where('status', '!=', 'cancelled')
                ->where('status', '!=', 'finished')
                ->where('user_id', '=', Session::get('user_id'))
                ->get();
        }

        return view('user_merch', compact('menu', 'ongoing_orders'));
    }
}


//     public function place_order(Request $r)
//     {
//         $order = new Order;
//         $order->user_id = Session::get('user_id');
//         $order->save();

//         $product = Products::query()
//             ->select('*')
//             ->where('stock', '>', '0')
//             ->get();

//         $order_products = [];
//         for ($i = 0; $i < count($product); $i++) {
//             $num_ordered = $r->input('order_' . $product[$i]->product_id);
//             if ($num_ordered > 0) {
//                 $op = new Orders_Product;
//                 $op->order_id = $order->order_id;
//                 $op->product_id = $product[$i]->product_id;
//                 $op->quantity = $num_ordered;
//                 $op->save();
//                 array_push($order_products, $op);
//             }
//         }
//         return view('merch_success', compact('order'));
//     }

//     public function index_product()
//     {

//         $product = Products::query()
//             ->select('*')
//             ->get();

//         return view('user_merch', compact('product'));
//     }
// }
=======

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
>>>>>>> b595f56fb1480697710a208ad54909626abd0c94
