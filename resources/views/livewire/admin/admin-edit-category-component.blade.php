<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-6">
                         <h5>Add Danh Muc</h5>
                        </div>
                        <div class="col-lg-6">
                         <a href="{{route('admin.categories')}}" class="btn btn-success pull-right">All Categories</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('Tin_nhan_thanh_cong'))
                            <div class="alert alert-success">{{Session::get('Tin_nhan_thanh_cong')}}</div>
                        @endif
                        <form action="" method="" class="form-horizontal" wire:submit.prevent="updateCategory">
                             <div class="form-group">
                                 <label for="" class="control-label col-lg-4">Ten danh muc</label>
                                 <div class="col-lg-4">
                                     <input class="form-control input-lg" type="text" name="" id="" placeholder="Ten danh muc" wire:model='name' wire:keyup='generateslug'>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label for="" class=" col-lg-4 control-label ">Ten Slug </label>
                                 <div class="col-lg-4">
                                     <input class="form-control input-lg" type="text" name="" id="" placeholder="Ten danh muc" wire:model='slug' wire:keyup=''>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="col-lg-4">
                                     <button type="submit" class=" btn btn-primary ">Sửa Danh Muc</button>
                                 </div>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 