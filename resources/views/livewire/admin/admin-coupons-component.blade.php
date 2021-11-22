
<div class="fix-top" >
   
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">全てクーポン</div>
                            <div class="col-lg-6">
                                <a href="{{route('admin.addcoupon')}}" class="btn btn-success pull-right">クーポンを追加する</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('Tin_nhan_thanh_cong'))
                        <div class="alert alert-success">{{Session::get('Tin_nhan_thanh_cong')}}</div>
                    @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>クーポンコード</th>
                                    <th>クーポンタイプ</th>
                                    <th> クーポン値</th>
                                    <th>クーポンカートの価値</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                <tr>
                                    <td>{{$coupon->id}}</td>
                                    <td>{{$coupon->code}}</td>
                                    <td>{{$coupon->type}}</td>
                                    @if ($coupon->type == 'fixed')
                                    <td>{{$coupon->value}}</td>
                                    @else
                                    <td>{{$coupon->value}}%</td> 
                                    @endif
                                    
                                    <td>{{$coupon->cart_value}}</td>

                                    <td>
                                        <a href="{{route('admin.editcoupons', ['coupon_id' => $coupon->id])}}"><i class="far fa-edit"></i></a>
                                        <a class="ml-2" onclick="confirm('Ban co chac chan Xoa') || event.stopImmediatePropagation()" href="#" wire:click.prevent="deleteCoupon({{$coupon->id}})"><i class="far fa-times-circle text-danger"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
