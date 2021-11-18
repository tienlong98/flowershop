<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Edit Product</h5>
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
                            wire:submit.prevent="updateProduct">
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
                                <div class="col-lg-4">
                                    <textarea name="" placeholder="Short Description" id="" cols="30" rows="10"
                                        wire:model="short_descripsiton"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-lg-4 control-label">Description</label>
                                <div class="col-lg-4">
                                    <textarea name="" class="form-control" placeholder="Description" id="" cols="30"
                                        rows="10" wire:model="descripsitone"></textarea>
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
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
