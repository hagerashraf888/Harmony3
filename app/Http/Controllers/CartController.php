<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Cart;
use App\Models\Project;
use App\Models\Receipt;
use App\Models\Order;




class CartController extends Controller
{
    public function index()
    {
        return view('pages/cart');
    }

    public function cart()
    {
        $userID = Auth::id();
        $carts = Cart::where('user_id',$userID)->get();
        $total = 0;
        foreach($carts as $cart){
        $total+= $cart->quantity*$cart->project->price;
        }
        //dd($carts,$total);
        return view('cart',compact('carts','total'));
    }

    public function update_cart(Request $request, $project_id)
    {

        $userID = Auth::id();
        $cart = Cart::where('user_id',$userID)->where('product_id',$project_id)->first();
        $cart->quantity= $request->get('quantity');
        $cart->save();
        return back();
    }

    public function delete_cart($cart_id)
    {

        $cart = Cart::find($cart_id);
        $cart->delete();

        return back();
    }


    public function check_out()
    {
        $userID = Auth::id();
        $carts = Cart::where('user_id',$userID)->get();
        if(count($carts)==0)
        {
        return redirect()->route('check_out_page');
        }
        $total = 0;
        foreach($carts as $cart){
        $total+= $cart->quantity*$cart->project->price;
        }
        $receipt = new Receipt();
        $receipt->user_id = $userID;
        $receipt->total_price = $total;
        $receipt->save();

        foreach($carts as $cart){
        $order = new Order();
        $order->receipt_id= $receipt->id;
        $order->quantity = $cart->quantity;
        $order->project_id = $cart->project_id;
        $order->save();
        }

        Cart::where('user_id',$userID)->delete();

        return redirect()->route('check_out_page');
    }

    public function check_out_page()
    {
        $userID = Auth::id();
        $receipt_total = Receipt::where('user_id',$userID)->get();
        return view('checkout',compact('receipt_total'));
    }

    public function add_cart($project_id)
    {
        $userID = Auth::id();
        $existsproject = Cart::where('user_id',$userID)->where('project_id',$project_id)->first();

        if(empty($existsproject))//new user (user didn't have cart)
        {
        $cart = new Cart();
        $cart->user_id = $userID;
        $cart->project_id = $project_id;
        $cart->quantity = 1;
        $cart->save();

        }
        else //project exists in cart
        {
        $existsproject->quantity+=1;
        $existsproject->save();
        }
        return back();

    }

}
