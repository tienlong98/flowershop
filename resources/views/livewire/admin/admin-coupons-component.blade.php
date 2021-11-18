
<div class="fix-top" >
   
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">All Coupons</div>
                            <div class="col-lg-6">
                                <a href="{{route('admin.addcoupon')}}" class="btn btn-success pull-right">Them Coupons</a>
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
                                    <th>Coupon Code</th>
                                    <th>Coupon Type</th>
                                    <th> Value</th>
                                    <th>Cart Value</th>

                                    <th>Action</th>
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
