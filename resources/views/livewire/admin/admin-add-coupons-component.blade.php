<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 justify-center">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6 d-flex justify-content-between">
                                <h5>クーポンを追加する</h5>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ route('admin.coupons') }}" class="btn btn-success pull-right">全てクーポン</a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        @if (Session::has('Tin_nhan_thanh_cong'))
                            <div class="alert alert-success">{{ Session::get('Tin_nhan_thanh_cong') }}</div>
                        @endif
                        <form action="" method="" class="form-horizontal" wire:submit.prevent="storeCoupon">
                            <div class="form-group">
                                <label for="" class="control-label col-lg-4">クーポンコード</label>
                                <div class="col-lg-4">
                                    <input class="form-control input-lg" type="text" name="" id=""
                                        placeholder="クーポンコード" wire:model='code' required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-lg-4">クーポンタイプ</label>
                                <div class="col-lg-4">
                                    <select name="" id="" class="form-control" wire:model='type' required>
                                        <option value="">選択する</option>
                                        <option value="fixed">Fixed</option>
                                        <option value="percent">Percen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-lg-4">クーポン値</label>
                                <div class="col-lg-4">
                                    <input class="form-control input-lg" type="number" name="" id=""
                                        placeholder="クーポン値" wire:model='value' required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-lg-4">クーポンカートの価値</label>
                                <div class="col-lg-4">
                                    <input class="form-control input-lg" type="number" name="" id=""
                                        placeholder="クーポンカートの価値" wire:model='cart_value' required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4">
                                    <button type="submit" class=" btn btn-primary ">追加する</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
