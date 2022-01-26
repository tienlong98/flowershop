<?php

namespace App\Http\Livewire\Admin;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\Gallery;
use Livewire\WithFileUploads;

class AdminEditGalleryComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $descripsitone;
    public $image;
    public $newimage;
    public $gallery_id;

    public function mount($gallery_id){
        $posts = Gallery::find($gallery_id);
        $this->title = $posts->title;
        $this->descripsitone = $posts->descripsitone;
        $this->image = $posts->image;
        $this->gallery_id = $posts->id;

    }
    public function updateGallery(){
        $posts = Gallery::find($this->gallery_id);
        $posts->title = $this->title;
        $posts->descripsitone = $this->descripsitone;
        $posts->image = $this->image;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('Gallerys',$imageName);
            $posts->image = $imageName;
        }
        $posts->save();
        session()->flash('message', '投稿が編集されました。');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-gallery-component')->layout('layouts.base');
    }
}
