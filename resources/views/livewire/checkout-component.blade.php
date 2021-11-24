<div>
    <div class="home-shop">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h1 class="title-shop">
                        チェックアウト
                    </h1>
                    <p class="text-shop">
                        ホーム: <span>チェックアウト</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="checkout">
        <div class="container">
            <form action="" wire:submit.prevent="placeOrder">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="bill-detail mt-5 mb-3">
                            支払明細
                        </h3>

                    </div>
                    <div class=" col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="col-lg-12">
                                        姓
                                    </label>
                                    <div class="col-lg-12">
                                        <input type="text" name="" id="" class="form-control" required
                                            wire:model="firsname">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="" class="col-lg-12">
                                        名
                                    </label>
                                    <div class="col-lg-12">
                                        <input type="text" name="" id="" class="form-control" required
                                            wire:model="lastname">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="" class="col-lg-12">
                                        郵便番号
                                    </label>
                                    <div class="col-lg-12">
                                        <input type="number" name="" id="" class="form-control" required
                                            wire:model="zipcode">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12">
                                        住所
                                    </label>
                                    <div class="col-lg-12">
                                        <input type="text" name="" id="" class="form-control" required
                                            wire:model="address">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12">
                                        電話番号
                                    </label>
                                    <div class="col-lg-12">
                                        <input type="number" name="" id="" class="form-control" required
                                            wire:model="mobile">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="" class="col-lg-12">
                                        電子メール
                                    </label>
                                    <div class="col-lg-12">
                                        <input type="email" name="" id="" class="form-control" required
                                            wire:model="email">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class=" col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="form-group">
                            <label for="" class="col-lg-12">
                                注文ノート
                            </label>
                            <div class="col-lg-12">
                                <textarea class="form-control " id="exampleFormControlTextarea1" rows="10" cols="40"
                                    placeholder="Comment" wire:model="tinnhan"></textarea>
                            </div>

                        </div>


                    </div>
                    <div class="col-lg-12">
                        <label for="" class="">
                            <input type="checkbox" name="" id="" value="1" wire:model="ship_to_different">
                            <span>贈り物</span>
                        </label>
                    </div>
                    @if ($ship_to_different)

                        <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="col-lg-12">
                                            姓
                                        </label>
                                        <div class="col-lg-12">
                                            <input type="text" name="" id="" class="form-control" required
                                                wire:model="d_firsname">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="" class="col-lg-12">
                                            名
                                        </label>
                                        <div class="col-lg-12">
                                            <input type="text" name="" id="" class="form-control" required
                                                wire:model="d_lastname">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="" class="col-lg-12">
                                            郵便番号
                                        </label>
                                        <div class="col-lg-12">
                                            <input type="number" name="" id="" class="form-control" required
                                                wire:model="d_zipcode">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-lg-12">
                                            住所
                                        </label>
                                        <div class="col-lg-12">
                                            <input type="text" name="" id="" class="form-control" required
                                                wire:model="d_address">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-lg-12">
                                            電話番号
                                        </label>
                                        <div class="col-lg-12">
                                            <input type="number" name="" id="" class="form-control" required
                                                wire:model="d_mobile">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-lg-12">
                                            電子メール
                                        </label>
                                        <div class="col-lg-12">
                                            <input type="mail" name="" id="" class="form-control" required
                                                wire:model="d_email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="" class="col-lg-12">
                                    注文ノート
                                </label>
                                <div class="col-lg-12">
                                    <textarea class="form-control " id="exampleFormControlTextarea1" rows="10"
                                        cols="40" placeholder="Comment" wire:model="d_tinnhan"></textarea>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="col-lg-12 your_order">
                        <h3 class="customorder mt-5 mb-3">ご注文</h3>
                        <div class="order_review">
                            @if (Session::has('checkout'))
                                <table class="table table-bordered">
                                    <tr class="product_head">
                                        <th class="text-center" colspan="4">商品</th>
                                        <th class="text-center">小計</th>
                                    </tr>
                                    @foreach (Cart::content() as $item)
                                    <tr class="cart_item">
                                        <th class="product-name" colspan="4">{{$item->model->name}}
                                            <strong class="so_luong">*{{$item->qty}}</strong>
                                        </th>
                                        <td class="product-total text-center">{{$item->subtotal}}</td>
                                    </tr>
                                    @endforeach
                                </table>
                                <h4 class="mt-5 mb-2">カードの合計</h4>
                                <table class="table table-bordered">
                                    <tr>

                                        <th colspan="4">小計</th>
                                        <td class="text-center">{{number_format(Session::get('checkout')['subtotal'])}}円</td>
                                    </tr>
                                    <tr>

                                        <th colspan="4">税</th>
                                        <td class="text-center">{{number_format(Session::get('checkout')['tax'])}}円</td>
                                    </tr>
                                    <tr>

                                        <th colspan="4">合計</th>
                                        <td class="text-center">{{number_format(Session::get('checkout')['total'])}}円</td>
                                    </tr>
                                </table>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-12 thanh_toan">
                        <label for="" class="">
                            <input type="radio" name="payment-method" id="payment=cod" value="cod"
                                wire:model="paymentmode">
                            <span>配達の支払い</span>
                        </label>
                    </div>
                    <div class="col-lg-12">
                        <label for="" class="">
                            <input type="radio" name="payment-method" id="payment=card" value="card"
                                wire:model="paymentmode">
                            <span>クレジットカードで支払う</span>
                        </label>
                    </div>
                    <div class="col-lg-12">
                        <label for="" class="">
                            <input type="radio" name="payment-method" id="payment=paypal" value="paypal"
                                wire:model="paymentmode">
                            <span>PayPalによる支払い</span>
                        </label>
                    </div>
                    <div class="place_order mt-5 mb-5">
                        <button type="submit" class="button-contact"> 注文する</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
