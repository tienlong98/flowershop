<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                Add New Product
                            </div>
                            <div class="col-lg-6">
                                <a href=" {{ route('admin.product') }}" class="btn btn-primary pull-right">All
                                    Product</a>
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
                                <label for="" class="col-lg-4 control-label">Ten San Pham</label>
                                <div class="col-lg-4">
                                    <input type="text" name="" id="" placeholder="Ten San Pham"
                                        class="form-control input-lg" wire:model="name" wire:keyup='generateslug'>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Product Slug</label>
                                <div class="col-lg-4">
                                    <input type="text" name="" id="" placeholder="Product Slug"
                                        class="form-control input-lg" wire:model="slug">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Short Description</label>
                                <div class="col-lg-4" wire:ignore>
                                    <textarea id="short_descripsiton" placeholder="Short Description" cols="30"
                                        rows="10" wire:model="short_descripsiton"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Description</label>
                                <div class="col-lg-4" wire:ignore>
                                    <textarea id="descripsitone" class="form-control" placeholder="Description"
                                        cols="30" rows="10" wire:model="descripsitone"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Regular Price</label>
                                <div class="col-lg-4">
                                    <input type="number" name="" id="" placeholder="Regular Price"
                                        class="form-control input-lg" wire:model="regular_price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Sale Price</label>
                                <div class="col-lg-4">
                                    <input type="number" name="" id="" placeholder="Sale Price"
                                        class="form-control input-lg" wire:model="sale_price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Stock</label>
                                <div class="col-lg-4">
                                    <select name="" id="" class="form-control" wire:model="stock_status">
                                        <option value="instock">In Stock</option>
                                        <option value="outofstock">Out of Stock</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Featured</label>
                                <div class="col-lg-4">
                                    <select name="" id="" class="form-control" wire:model="featured">
                                        <option value="0">Yes</option>
                                        <option value="1">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Quantity</label>
                                <div class="col-lg-4">
                                    <input type="number" name="" id="" placeholder="Quantity"
                                        class="form-control input-lg" wire:model="quantity">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Product Image</label>
                                <div class="col-lg-4">
                                    <input type="file" name="" id="" class="input-file" wire:model="image">
                                    @if ($image)
                                        <img src="{{ $image->temporaryurl() }}" alt="" width="120">
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Category</label>
                                <div class="col-lg-4">
                                    <select name="" id="" class="form-control" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label"></label>
                                <div class="col-lg-4">
                                    <button type="submit" class="btn btn-primary">Them San Pham</button>
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
        // tinymce.init({
        //     selector: 'textarea#short_descripsiton',
        //     plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        //     toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
        //     toolbar_mode: 'floating',
        //     tinycomments_mode: 'embedded',
        //     tinycomments_author: 'Author name',
        // });
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
