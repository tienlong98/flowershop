<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminAddCouponsComponent extends Component
{
    public $code;
    public $type;
    public $cart_value;
    public $value;

    // public function updated($field){
    //     $this->validateOnly($field,[
    //         'code'=>'required|unique:coupons',
    //         'type'=>'required',
    //         'value'=>'required|numeric',
    //         'cart_value'=>'required|numeric'
    //     ]);
    // }
    public function storeCoupon(){
        // $this->validate([
        //     'code'=>'required|unique:coupons',
        //     'type'=>'required',
        //     'value'=>'required|numeric',
        //     'cart_value'=>'required|numeric'
        // ]);
        $coupon = new Coupon();
        $coupon->code = $this->code;
        $coupon->type = $this->type;

        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;

        $coupon->save();
        session()->flash('Tin_nhan_thanh_cong', 'Da Them Coupon');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-coupons-component')->layout('layouts.base');
    }
}
