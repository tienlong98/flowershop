<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;


class AdminProductComponent extends Component
{
    
    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        session()->flash('Tin_nhan_thanh_cong', 'Xoa San Pham Thanh Cong');

    }
    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.admin.admin-product-component', ['products'=>$products])->layout('layouts.base');
    }
}
