<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public $couponCode;
    public $discount;
    public $subtotalafterdiscount;
    public $taxafterdiscount;
    public $totalafterdiscount;

    public function increaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty=$product->qty + 1;
        Cart::update($rowId, $qty);
    }
    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty=$product->qty - 1;
        Cart::update($rowId, $qty);
    }
    public function destroy($rowId){
        Cart::remove($rowId);
        session()->flash('Tin_nhan_thanh_cong', '削除されました');
    }
    public function applyCoupon(){
        $coupon=Coupon::where('code', $this->couponCode)->where('cart_value', '<=', Cart::subtotal())->first();
        if (!$coupon) {
            session()->flash('Tin_nhan_thanh_cong', 'クーポンを追加しました。');
            return;
        }
        session()->put('coupon', [
            'code'=>$coupon->code,
            'type'=>$coupon->type,
            'value'=>$coupon->value,
            'cart_value'=>$coupon->cart_value
        ]);
    }
    public function magiamgia(){
        if (session()->has('coupon')) {
            if (session()->get('coupon')['type']=='fixed') {
                $this->discount = session()->get('coupon')['value'];
            }
            else{
                $this->discount =(Cart::subtotal() * session()->get('coupon')['value'])/100;
            }
            $this->subtotalafterdiscount=Cart::subtotal()-$this->discount;
            $this->taxafterdiscount=($this->subtotalafterdiscount * config('cart.tax'))/100;
            $this->totalafterdiscount=$this->subtotalafterdiscount + $this->taxafterdiscount;
        }
    }
    public function checkout(){
        if (Auth::check()) {
           return redirect()->route('checkout');
        }
        else {
            return redirect()->route('login');
        }
    }
    public function setsoluongforcheckout(){
        if (!Cart::count()>0) {
           session()->forget('checkout');
           return;
        }
        if (session()->has('coupon')) {
            session()->put('checkout', [
                'discount'=>$this->discount,
                'subtotal'=>$this->subtotalafterdiscount,
                'tax'=>$this->taxafterdiscount,
                'total'=>$this->totalafterdiscount,
            ]);
        }
        else {
            session()->put('checkout', [
                'discount'=>0,
                'subtotal'=>Cart::subtotal(),
                'tax'=>Cart::tax(),
                'total'=>Cart::total(),
            ]);
        }
    }
    public function render()
    {
        if (session()->has('coupon')) {
            if (Cart::subtotal() < session()->get('coupon')['cart_value']) {
                session()->forget('coupon');
            }
            else {
                $this->magiamgia();
            }
        }
        $this->setsoluongforcheckout();
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
