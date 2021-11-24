<div>


    <div class="home-shop">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h1 class="title-shop">
                        カート
                    </h1>
                    <p class="text-shop">
                        ホーム: <span>カート</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="line mb-5"></div>
    <div class="content-cart">
        <div class="container">
            <div class="row">
                @if (Cart::count() > 0)
                    
                <div class="col-xl-12 gio-hang">
                    @if (Session::has('Tin_nhan_thanh_cong'))
                        <div class="alert alert-success">
                            {{ Session::get('Tin_nhan_thanh_cong') }}
                        </div>
                    @endif
                    @if (Cart::count() > 0)
                        <form action="" method="">
                            <table class="table text-center show-pc">
                                <thead>
                                    <tr>
                                        <th colspan="3">商品</th>
                                        <th scope="col">価格</th>
                                        <th scope="col">数量</th>
                                        <th scope="col">小計</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $item)

                                        <tr>
                                            <th scope="row"><a href=""
                                                    wire:click.prevent="destroy('{{ $item->rowId }}')"><i
                                                        class="fas fa-times-circle"></i></a></th>
                                            <td>
                                                <a href=""><img class="img-fluid fix-img-cart"
                                                        src="{{ asset('images') }}/{{ $item->model->image }}"
                                                        alt=""></a>
                                            </td>
                                            <td><a
                                                    href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a>
                                            </td>
                                            <td>{{ number_format($item->model->regular_price) }}円</td>
                                            <td>
                                                <a href=""
                                                    wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"><i
                                                        class="fas fa-plus-circle"></i></a>
                                                <input type="number" name="" value="{{ $item->qty }}" id="">
                                                <a href=""
                                                    wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"><i
                                                        class="fas fa-minus-circle"></i></a>
                                            </td>
                                            <td>{{ number_format($item->subtotal )}}円</td>
                                        </tr>

                                    @endforeach

                                </tbody>
                            </table>
                            <table class="table text-center show-mb">
                                <tbody>
                                    @foreach (Cart::content() as $item)
                                        <tr>
                                            <td colspan="3"><img
                                                    src="{{ asset('images') }}/{{ $item->model->image }}"
                                                    class="img-fluid img-mb" alt=""></td>
                                            <td><a href="" wire:click.prevent="destroy('{{ $item->rowId }}')"><i
                                                        class="fas fa-times-circle fix-vitri"></i></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><a
                                                    href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{ $item->model->regular_price }}円</td>
                                            <td>

                                                <a href=""
                                                    wire:click.prevent="increaseQuantity('{{ $item->rowId }}')"><i
                                                        class="fas fa-plus-circle"></i></a>
                                                <input type="number" name="" value="{{ $item->qty }}" id="">
                                                <a href=""
                                                    wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')"><i
                                                        class="fas fa-minus-circle"></i></a>
                                            </td>
                                            <td>{{ number_format($item->subtotal)}}円</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                        @if (!Session::has('coupon'))
                            <div class="magiamgia">
                                <form action="" wire:submit.prevent="applyCoupon">

                                    @if (Session::has('Tin_nhan_thanh_cong'))
                                        <div class="alert alert-success">
                                            {{ Session::get('Tin_nhan_thanh_cong') }}
                                        </div>
                                    @endif
                                    <input class="text-cp" type="text" name="" id="" placeholder="Coupon Code"
                                        wire:model="couponCode">
                                    <button class="btn-coupon" type="submit">APPLY COUPON</button>
                                </form>
                            </div>
                        @endif
                    @else
                        <p class="koco_hang">Khong co gi ca</p>
                    @endif
                </div>
                <div class="col-xl-6 thanh-toan mb-5">
                    <p class="cart-total">
                        カートの合計
                    </p>

                    <form action="" method="">

                        <table class="table">

                            <tr>
                                <td>小計</td>
                                <td class="text-right">{{ number_format(Cart::subtotal()) }}円</td>
                            </tr>
                            @if (Session::has('coupon'))
                                <tr>
                                    <td>割引({{ Session::get('coupon')['code'] }})</td>
                                    <td class="text-right">{{ number_format($discount) }}円</td>
                                </tr>
                                <tr>
                                    <td>税( {{ config('cart.tax') }}%)</td>
                                    <td class="text-right">{{ number_format($taxafterdiscount) }}円</td>
                                </tr>
                                <tr>
                                    <td>割引の小計</td>
                                    <td class="text-right">{{ number_format($subtotalafterdiscount) }}円</td>
                                </tr>
                                <tr>
                                    <td>合計</td>
                                    <td class="text-right">{{ number_format($totalafterdiscount) }}円</td>
                                </tr>

                            @else
                                <tr>
                                    <td>税</td>
                                    <td class="text-right">{{ number_format(Cart::tax()) }}円</td>
                                </tr>
                                <tr>
                                    <td>合計</td>
                                    <td class="text-right">{{ number_format(Cart::total()) }}円</td>
                                </tr>
                            @endif

                        </table>
                        <a class="btn-checkout" href="#" wire:click.prevent="checkout">チェックアウトに進む</a>
                    </form>
                </div>
                @else
                    <div class=" col-lg-12 text-center pt-5 pb-5">
                        <h1>商品なし</h1>
                        <p>今すぐ購入</p>
                        <a href="/shop" class="btn btn-success">購入</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
