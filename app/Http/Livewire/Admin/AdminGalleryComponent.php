<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Gallery;

class AdminGalleryComponent extends Component
{
    public function deleteGallery($gallery_id){
        $posts = Gallery::find($gallery_id);
        $posts->delete();
        session()->flash('message', '削除されました。');

    }
    public function render()
    {
        $posts = Gallery::all();
        return view('livewire.admin.admin-gallery-component',['posts'=>$posts])->layout('layouts.base');
    }
}
