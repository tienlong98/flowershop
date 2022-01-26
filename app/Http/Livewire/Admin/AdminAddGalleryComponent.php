<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Gallery;
use Livewire\WithFileUploads;


class AdminAddGalleryComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $descripsitone;
    public $image;

    public function addPosts(){
        $post = new Gallery();
        $post->title = $this->title;
        $post->descripsitone = $this->descripsitone;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('Gallerys',$imageName);
        $post->image = $imageName;
        $post->save();
        session()->flash('message', '投稿が追加されました。');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-gallery-component')->layout('layouts.base');
    }
}
