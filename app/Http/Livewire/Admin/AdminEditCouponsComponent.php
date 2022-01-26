<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminEditCouponsComponent extends Component
{
    public $code;
    public $type;
    public $cart_value;
    public $value;
    public $coupon_id;
    public function mount($coupon_id){
        $coupon=Coupon::find($coupon_id);
        $this->code=$coupon->code;
        $this->type=$coupon->type;
        $this->value=$coupon->value;
        $this->cart_value=$coupon->cart_value;
        $this->coupon_id=$coupon->id;
    }
    // public function updated($field){
    //     $this->validateOnly($field,[
    //         'code'=>'required|unique:coupons',
    //         'type'=>'required',
    //         'value'=>'required|numeric',
    //         'cart_value'=>'required|numeric'
    //     ]);
    // }
    public function updateCoupon(){
        // $this->validate([
        //     'code'=>'required|unique:coupons',
        //     'type'=>'required',
        //     'value'=>'required|numeric',
        //     'cart_value'=>'required|numeric'
        // ]);
        $coupon = Coupon::find($this->coupon_id);
        $coupon->code = $this->code;
        $coupon->type = $this->type;

        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;

        $coupon->save();
        session()->flash('Tin_nhan_thanh_cong', '編集されました。');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-coupons-component')->layout('layouts.base');
    }
}
