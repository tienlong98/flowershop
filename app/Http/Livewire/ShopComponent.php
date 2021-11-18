<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use Livewire\WithPagination;
use App\Models\Product;
use Cart;
use App\Models\Category;
class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;
    // public $slug;
    
    public function mount(){
        $this->sorting="default";
        $this->pagesize=8;
        // $this->slug=$slug;
    }
    public function store($product_id, $product_name, $product_price){
        Cart::add($product_id, $product_name,1, $product_price)->associate('App\Models\Product');
        session()->flash('Tin_nhan_thanh_cong', 'Da_them_gio_Hang');
        return redirect()->route('product.cart');
    }
    // use WithPagination;
    public function render()
    {
        
        if ($this->sorting=='date') {
            $products = Product::orderBy('created_at', 'DESC')->paginate($this->pagesize);
        }
        elseif ($this->sorting=='price') {
            $products = Product::orderBy('regular_price', 'ASC')->paginate($this->pagesize);
        }
        elseif ($this->sorting=='featured') {
            $products = Product::orderBy('featured')->paginate($this->pagesize);
        }
        elseif ($this->sorting=='price-desc') {
            $products = Product::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
        }
        else{
            $products = Product::paginate($this->pagesize);

        }
        $categories=Category::all();
        // $product=Product::where('slug', $this->slug)->first();
        $popular_product=Product::inRandomOrder()->limit(4)->get();
        $related_product=Product::where('category_id')->inRandomOrder()->limit(5)->get();
        return view('livewire.shop-component', ['products'=>$products, 'categories'=>$categories, 'popular_product'=>$popular_product,'related_product'=>$related_product])->layout('layouts.base');
    }
}
