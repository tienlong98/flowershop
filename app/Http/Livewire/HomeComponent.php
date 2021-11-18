<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class HomeComponent extends Component
{
    
    public function render()
    {
        $bs_product = Product::orderBy('sale_price', 'ASC')->limit(3)->get();
        return view('livewire.home-component', ['bs_product'=>$bs_product])->layout('layouts.guest');
    }
}
