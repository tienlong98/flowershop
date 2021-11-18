<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Transaction;
use App\Models\Shipping;
use Illuminate\Support\Facades\Auth;
use Cart;
class CheckoutComponent extends Component
{
    public $ship_to_different;
    public $firsname;
    public $lastname;
    public $email;
    public $mobile;
    public $address;
    public $zipcode;
    public $tinnhan;
    public $d_firsname;
    public $d_lastname;
    public $d_email;
    public $d_mobile;
    public $d_address;
    public $d_zipcode;
    public $d_tinnhan;
    public $paymentmode;
    public $thankyou;
    public function placeOrder(){
        $order = new Order();
        $order->user_id = Auth::user()->id; 
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->discount = session()->get('checkout')['discount'];
        $order->tax = session()->get('checkout')['tax'];
        $order->total = session()->get('checkout')['total'];
        $order->firsname = $this->firsname;
        $order->lastname = $this->lastname;
        $order->email = $this->email;
        $order->mobile = $this->mobile;
        $order->address = $this->address;
        $order->zipcode = $this->zipcode;
        $order->tinnhan = $this->tinnhan;
        $order->status = 'ordered';
        $order->is_shipping_different=$this->ship_to_different ? 1:0;
        $order->save();

        foreach (Cart::content() as $item) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }
        if ($this->ship_to_different) {
            $shipping = new Shipping();
            $shipping->order_id = $order->id;
            $shipping->firsname = $this->d_firsname;
            $shipping->lastname = $this->d_lastname;
            $shipping->email = $this->d_email;
            $shipping->mobile = $this->d_mobile;
            $shipping->address = $this->d_address;
            $shipping->zipcode = $this->d_zipcode;
            $shipping->tinnhan = $this->d_tinnhan;
            $shipping->save();
        }
        else{
            $shipping = new Shipping();
            $shipping->order_id = $order->id;
            $shipping->firsname = $this->firsname;
            $shipping->lastname = $this->lastname;
            $shipping->email = $this->email;
            $shipping->mobile = $this->mobile;
            $shipping->address = $this->address;
            $shipping->zipcode = $this->zipcode;
            $shipping->tinnhan = $this->tinnhan;
            $shipping->save();
        }
        if ($this->paymentmode == 'cod') {
            $transaction = new Transaction();
            $transaction->user_id = Auth::user()->id; 
            $transaction->order_id = $order->id;
            $transaction->mode ='cod';
            $transaction->status = 'pending';
            $transaction->save();
        }
        $this->thankyou=1;
        Cart::destroy();
        session()->forget('checkout');
    }
    public function veryforCheckout(){
        if (!Auth::check()) {
            return redirect()->route('login');
         }
         else if ($this->thankyou){
             return redirect()->route('thankyou');
         }
         else if(!session()->get('checkout')){
            return redirect()->route('product.cart');
         }
    }
    public function render()
    {
        // $sp_order = Order::find($this->order_id);
        $this->veryforCheckout();
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
