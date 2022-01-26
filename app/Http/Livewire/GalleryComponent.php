<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gallery;

class GalleryComponent extends Component
{
    public function render()
    {
        $posts = Gallery::all();
        return view('livewire.gallery-component',['posts'=>$posts])->layout('layouts.base');
    }
}
