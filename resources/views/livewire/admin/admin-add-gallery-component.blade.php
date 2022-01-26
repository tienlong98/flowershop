<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <p>新規投稿の追加</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <a href="{{route('admin.gallerys')}}" class="btn btn-success pull-right">全投稿</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                        <form wire:submit.prevent="addPosts" >
                            <div class="form-group">
                                <label class="col-lg-4 " for=""><p>タイトル</p></label>
                                <div class="col-lg-4">
                                    <input type="text" name="" id="" placeholder="タイトル" class="form-control input-group-lg" wire:model="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 " for=""><p>内容</p></label>
                                <div class="col-lg-4">
                                    <textarea placeholder="内容" name="" id="" cols="50" rows="10" wire:model="descripsitone"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 " for=""><p>画像</p></label>
                                <div class="col-lg-4">
                                    <input type="file" name="" id=""  class="input-file" wire:model="image" >
                                    @if ($image)
                                        <img src="{{ $image->temporaryurl() }}" alt="" width="120">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 " for=""></label>
                                <div class="col-lg-4">
                                   <button type="submit" class="btn btn-primary">申し出る</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
