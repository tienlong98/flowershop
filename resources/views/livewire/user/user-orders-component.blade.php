<div class="fix-top mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="overflow: auto">
                    <div class="card-header">
                        All Orders
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered " style="font-size: 12px">
                            <thead>
                                <tr class="text-lg-center"> 
                                    <th>
                                        注文ID
                                    </th>
                                    {{-- <th>
                                        小計
                                    </th>
                                    <th>
                                        割引
                                    </th>
                                    <th>
                                        税
                                    </th> --}}
                                    <th>
                                        合計
                                    </th>
                                    {{-- <th>
                                        姓名
                                    </th> --}}
                                    <th>
                                        名前
                                    </th>
                                    <th>
                                        電子メール
                                    </th>
                                    <th>
                                         携帯電話
                                    </th>
                                    <th>
                                        郵便番号
                                    </th>
                                    <th>
                                        住所
                                    </th>
                                    <th>
                                        注文ノート
                                    </th>
                                    {{-- <th>
                                        状態
                                    </th> --}}
                                    <th>
                                        注文日
                                    </th>
                                    <th>
                                        
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr class="text-lg-center p-2">
                                    <td>{{ $order->id}}</td>
                                    {{-- <td>{{ $order->subtotal}}</td>
                                    <td>{{ $order->discount}}</td>
                                    <td>{{ $order->tax}}</td> --}}
                                    <td>{{ number_format($order->total)}}円</td>
                                    {{-- <td>{{ $order->firsname}}</td> --}}
                                    <td>{{ $order->lastname}}</td>
                                    <td>{{ $order->email}}</td>
                                    <td>{{ $order->mobile}}</td>
                                    <td>{{ $order->zipcode}}</td>
                                    <td>{{ $order->address}}</td>
                                    <td>{{ $order->tinnhan}}</td>
                                    {{-- <td>{{ $order->status}}</td> --}}
                                    <td>{{ $order->created_at}}</td>
                                    <td><a href="{{route('user.orderdetails', ['order_id'=>$order->id])}}"><i class="fas fa-info-circle"></i></a></td>
                                </tr>
                                
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
