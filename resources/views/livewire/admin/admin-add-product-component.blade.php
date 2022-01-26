<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                商品を追加する
                            </div>
                            <div class="col-lg-6">
                                <a href=" {{ route('admin.product') }}" class="btn btn-primary pull-right">
                                    全て商品</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('Tin_nhan_thanh_cong'))
                            <div class="alert alert-success">{{ Session::get('Tin_nhan_thanh_cong') }}</div>
                        @endif
                        <form action="" class="form-horizontal" enctype="multipart/form-data"
                            wire:submit.prevent="addProduct">
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
                                    <input type="text" name="" id="" placeholder="商品スラッグ"
                                        class="form-control input-lg" wire:model="slug" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">簡単な説明</label>
                                <div class="col-lg-4" wire:ignore>
                                    <textarea id="short_descripsiton" placeholder="簡単な説明" cols="30"
                                        rows="10" wire:model="short_descripsiton" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">説明</label>
                                <div class="col-lg-4" wire:ignore>
                                    <textarea id="descripsitone" class="form-control" placeholder="説明"
                                        cols="30" rows="10" wire:model="descripsitone" required></textarea>
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
                                        class="form-control input-lg" wire:model="sale_price" >
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
                                    <input type="file" name="" id="" class="input-file" wire:model="image">
                                    @if ($image)
                                        <img src="{{ $image->temporaryurl() }}" alt="" width="120">
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
                                    <button type="submit" class="btn btn-primary">追加する</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
       
        $(function() {
            tinymce.init({
                selector: 'textarea#short_descripsiton',
                setup: function(editor) {
                    editor.on('Change', function(e) {
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_descripsiton').val();
                        @this.set('short_descripsiton', sd_data);
                    });
                }
            });
            tinymce.init({
                selector: 'textarea#descripsitone',
                setup: function(editor) {
                    editor.on('Change', function(e) {
                        tinyMCE.triggerSave();
                        var d_data = $('#descripsitone').val();
                        @this.set('descripsitone', d_data);
                    });
                }
            });
        });
    </script>
@endpush
