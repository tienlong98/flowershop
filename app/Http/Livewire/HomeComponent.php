<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;
class HomeComponent extends Component
{
    public function store($product_id, $product_name, $product_price){
        Cart::add($product_id, $product_name,1, $product_price)->associate('App\Models\Product');
        session()->flash('Tin_nhan_thanh_cong', 'カートに追加されました');
        return redirect()->route('product.cart');
    }
    public function render()
    {
        
        $bs_product = Product::orderBy('sale_price', 'ASC')->limit(3)->get();
        return view('livewire.home-component', ['bs_product'=>$bs_product])->layout('layouts.guest');
    }
}
