<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>商品を編集する</h5>
                            </div>
                            <div class="col-lg-6">
                                <a href=" {{ route('admin.product') }}" class="btn btn-primary pull-right">全て商品</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('Tin_nhan_thanh_cong'))
                            <div class="alert alert-success">{{ Session::get('Tin_nhan_thanh_cong') }}</div>
                        @endif
                        <form action="" class="form-horizontal" enctype="multipart/form-data"
                            wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">商品名</label>
                                <div class="col-lg-4">
                                    <input type="text" name="" id="" placeholder="商品名"
                                        class="form-control input-lg" wire:model="name" wire:keyup='generateslug' required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">商品スラッグ</label>
                                <div class="col-lg-4">
                                    <input type="text" name="" id="" placeholder="Product Slug"
                                        class="form-control input-lg" wire:model="slug" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">簡単な説明</label>
                                <div class="col-lg-4">
                                    <textarea name="" placeholder="簡単な説明" id="" cols="30" rows="10"
                                        wire:model="short_descripsiton" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">説明</label>
                                <div class="col-lg-4">
                                    <textarea name="" class="form-control" placeholder="説明" id="" cols="30"
                                        rows="10" wire:model="descripsitone" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">通常価格</label>
                                <div class="col-lg-4">
                                    <input type="number" name="" id="" placeholder="通常価格"
                                        class="form-control input-lg" wire:model="regular_price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">販売価格</label>
                                <div class="col-lg-4">
                                    <input type="number" name="" id="" placeholder="販売価格"
                                        class="form-control input-lg" wire:model="sale_price" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">ストック</label>
                                <div class="col-lg-4">
                                    <select name="" id="" class="form-control" wire:model="stock_status" required>
                                        <option value="instock">在庫あり</option>
                                        <option value="outofstock">在庫切れ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">特徴</label>
                                <div class="col-lg-4">
                                    <select name="" id="" class="form-control" wire:model="featured" required>
                                        <option value="0">ある</option>
                                        <option value="1">なし</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">数量</label>
                                <div class="col-lg-4">
                                    <input type="number" name="" id="" placeholder="数量"
                                        class="form-control input-lg" wire:model="quantity" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">商品画像</label>
                                <div class="col-lg-4">
                                    <input type="file" name="" id="" class="input-file" wire:model="newimage">
                                    @if ($newimage)
                                        <img src="{{ $newimage->temporaryurl() }}" alt="" width="120">
                                    @else
                                        <img src="{{ asset('assets/images/products') }}/{{ $image }}" width="120"
                                            alt="">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">カテゴリ</label>
                                <div class="col-lg-4">
                                    <select name="" id="" class="form-control" wire:model="category_id">
                                        <option value="">カテゴリーを選ぶ</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label"></label>
                                <div class="col-lg-4">
                                    <button type="submit" class="btn btn-primary">編集する</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
