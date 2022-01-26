<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

use Cart;
use App\Models\Category;

class DetailComponent extends Component
{
    public $slug;
    public function mount($slug){
        $this->slug=$slug;
    }
    public function store($product_id, $product_name, $product_price){
        Cart::add($product_id, $product_name,1, $product_price)->associate('App\Models\Product');
        session()->flash('Tin_nhan_thanh_cong', 'カートに追加されました');
        return redirect()->route('product.cart');
    }
    public function render()
    {
        $categories=Category::all();
        
        $product=Product::where('slug', $this->slug)->first();
        // $orderItems = $product->orderItems->where('rstatus', 1);
        $popular_product=Product::inRandomOrder()->limit(4)->get();
        $related_product=Product::where('category_id', $product->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.detail-component',['product'=>$product, 'popular_product'=>$popular_product, 'categories'=>$categories, 'related_product'=>$related_product],)->layout('layouts.base');
    }
}
