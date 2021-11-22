<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class AdminCategoryComponent extends Component
{
    
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        session()->flash('Tin_nhan_thanh_cong', '削除しました。');

    }
    public function render()
    {
        $categories=Category::paginate(6);
        return view('livewire.admin.admin-category-component', ['categories'=>$categories])->layout('layouts.base');
    }
}
