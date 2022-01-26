<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Category;

use Livewire\WithFileUploads;


class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_descripsiton;
    public $descripsitone;
    public $regular_price;
    public $sale_price;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    public $newimage;
    public $product_id;


    public function mount($product_slug){
        $product = Product::where('slug', $product_slug)->first();
        $this->name=$product->name;
        $this->slug=$product->slug;
        $this->short_descripsiton=$product->short_descripsiton;
        $this->descripsitone=$product->descripsitone;
        $this->regular_price=$product->regular_price;
        $this->sale_price=$product->sale_price;
        $this->stock_status=$product->stock_status;
        $this->featured=$product->featured;
        $this->quantity=$product->quantity;
        $this->image=$product->image;
        $this->category_id=$product->category_id;
        $this->newimage=$product->newimage;
        $this->product_id=$product->id;

    }

    public function generateslug(){
        $this->slug = Str::slug($this->name, '-');
    }

    public function updateProduct(){
        $product=Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_descripsiton = $this->short_descripsiton;
        $product->descripsitone = $this->descripsitone;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $product->category_id = $this->category_id;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('/',$imageName);
            $product->image = $imageName;
        }
        $product->save();
        session()->flash('Tin_nhan_thanh_cong', '編集されました。');

    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-product-component', ['categories'=>$categories])->layout('layouts.base');
    }
}
