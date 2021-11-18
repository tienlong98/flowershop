<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-center">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-6 d-flex justify-content-between">
                         <h5>Add Coupon</h5>
                         <a href="{{route('admin.coupons')}}" class="btn btn-success pull-right">All Coupon</a>
                        </div>
                           
                    </div>
                    <div class="card-body">
                        @if (Session::has('Tin_nhan_thanh_cong'))
                            <div class="alert alert-success">{{Session::get('Tin_nhan_thanh_cong')}}</div>
                        @endif
                        <form action="" method="" class="form-horizontal" wire:submit.prevent="storeCoupon">
                             <div class="form-group">
                                 <label for="" class="control-label col-lg-4">Coupon Code</label>
                                 <div class="col-lg-4">
                                     <input class="form-control input-lg" type="text" name="" id="" placeholder="Coupon Code" wire:model='code' required>
                                 </div>
                             </div>
                             <div class="form-group">
                                <label for="" class="control-label col-lg-4">Coupon Type</label>
                                <div class="col-lg-4">
                                    <select name="" id="" class="form-control" wire:model='type' required>
                                        <option value="">Select</option>
                                        <option value="fixed">Fixed</option>
                                        <option value="percent">Percent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-lg-4">Coupon Value</label>
                                <div class="col-lg-4">
                                    <input class="form-control input-lg" type="number" name="" id="" placeholder="Coupon Value" wire:model='value' required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-lg-4">Coupon Cart Value</label>
                                <div class="col-lg-4">
                                    <input class="form-control input-lg" type="number" name="" id="" placeholder="Coupon Cart Value" wire:model='cart_value' required>
                                </div>
                            </div>
                             <div class="form-group">
                                 <div class="col-lg-4">
                                     <button type="submit" class=" btn btn-primary ">Them Coupon</button>
                                 </div>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 