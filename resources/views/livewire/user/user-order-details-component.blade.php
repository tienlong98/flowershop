<div class="fix-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-5">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                注文項目
                            </div>
                            <div class="col-lg-6">
                                <a href="{{route('user.orders')}}" class="btn btn-success pull-right">私の注文</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th colspan="2">商品</th>
                                        <th scope="col">価格</th>
                                        <th scope="col">数量</th>
                                        <th scope="col">小計</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItems as $item)
                                        <tr>

                                            <td>
                                                <a href=""><img
                                                        style="width: 50px; height: auto; border-radius: 50%; object-fit: cover; object-position: center"
                                                        class="img-fluid"
                                                        src="{{ asset('images') }}/{{ $item->product->image }}"
                                                        alt=""></a>
                                            </td>
                                            <td><a
                                                    href="{{ route('product.details', ['slug' => $item->product->slug]) }}">{{ $item->product->name }}</a>
                                            </td>
                                            <td>{{ $item->price }}円</td>
                                            <td>
                                                <h5>{{ $item->quantity }}</h5>
                                            </td>
                                            <td>{{ $item->price * $item->quantity }}円</td>
                                            <td><a href="{{route('user.review',['order_item_id'=>$item->id])}}"><i class="far fa-comments"></i></a></td>
                                        </tr>

                                    @endforeach

                                </tbody>
                            </table>

                        </form>
                        <div class="mt-5">
                            <h5>カートの合計</h5>
                            <table class="table">

                                <tr>
                                    <td>小計</td>
                                    <td class="text-right">{{ number_format($order->subtotal) }}円</td>
                                </tr>
                                <tr>
                                    <td>税</td>
                                    <td class="text-right">{{ number_format($order->tax) }}円</td>
                                </tr>
                                <tr>
                                    <td>合計</td>
                                    <td class="text-right">{{ number_format($order->total) }}円</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-5">
                    <div class="card-header">
                        請求の詳細
                    </div>
                    <div class="card-body">
                        <table class="table" style="font-size: 15px">
                            <tr>
                                <th>姓名</th>
                                <td>{{ $order->firsname }}</td>
                                <th>名前</th>
                                <td>{{ $order->lastname }}</td>
                            </tr>
                            <tr>
                                <th>携帯電話</th>
                                <td>{{ $order->mobile }}</td>
                                <th>電子メール</th>
                                <td>{{ $order->email }}</td>
                            </tr>
                            <tr>
                                <th>郵便番号</th>
                                <td>{{ $order->zipcode }}</td>
                                <th>住所</th>
                                <td>{{ $order->address }}</td>
                            </tr>
                            <tr>
                                <th>注文ノート</th>
                                <td>{{ $order->tinnhan }}</td>
                                <th>注文日</th>
                                <td>{{ $order->created_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            {{-- @if ($order->is_shipping_different) --}}
                <div class="col-lg-12">
                    <div class="card mb-5">
                        <div class="card-header">
                            出荷詳細
                        </div>
                        <div class="card-body">
                            <table class="table" style="font-size: 15px">
                                <tr>
                                    <th>姓名</th>
                                    <td>{{ $order->shipping->firsname }}</td>
                                    <th>名前</th>
                                    <td>{{ $order->shipping->lastname }}</td>
                                </tr>
                                <tr>
                                    <th>携帯電話</th>
                                    <td>{{ $order->shipping->mobile }}</td>
                                    <th>電子メール</th>
                                    <td>{{ $order->shipping->email }}</td>
                                </tr>
                                <tr>
                                    <th>郵便番号</th>
                                    <td>{{ $order->shipping->zipcode }}</td>
                                    <th>住所</th>
                                    <td>{{ $order->shipping->address }}</td>
                                </tr>
                                <tr>
                                    <th>注文ノート</th>
                                    <td>{{ $order->shipping->tinnhan }}</td>
                                    <th>注文日</th>
                                    <td>{{ $order->shipping->created_at }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            {{-- @endif --}}
            <div class="col-lg-12">
                <div class="card mb-5">
                    <div class="card-header">
                        取引
                    </div>
                    <div class="card-body">
                        <table class="table" style="font-size: 15px">
                            <tr>
                                <th>取引モード</th>
                                <td>{{$order->transaction->mode}}</td>
                            </tr>
                            <tr>
                                <th>状態</th>
                                <td>{{$order->transaction->status}}</td>
                            </tr>
                            <tr>
                                <th>取引日</th>
                                <td>{{$order->transaction->created_at}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
