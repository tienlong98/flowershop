<div>
    <div class="home-shop">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h1 class="title-shop">
                        {{ $product->name }}
                    </h1>
                    <p class="text-shop">
                        ホーム:商品: <span>{{ $product->name }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="content-shop content-sp">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-xl-5 mt-5">
                            <img src="{{ asset('images') }}/{{ $product->image }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-xl-7 mt-5">
                            <div class="naiyo-sanpham">
                                <div class="danhgia-sp d-flex">
                                    <style>
                                        .color-gray {
                                            color: #e6e6e6 !important;
                                        }

                                        .count-review {
                                            color: black;
                                            text-decoration: none;
                                            margin-left: 5px;
                                        }

                                    </style>
                                    @php
                                        $avgrating = 0;
                                    @endphp
                                    @foreach ($product->orderItems->where('rstatus', 1) as $orderItem)
                                        @php
                                            $avgrating = $avgrating + $orderItem->review->rating;
                                        @endphp
                                    @endforeach
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $avgrating)
                                            <i class="far fa-star"></i>
                                        @else
                                            <i class="far fa-star color-gray"></i>
                                        @endif

                                    @endfor

                                    <a href=""
                                        class="count-review">({{ $product->orderItems->where('rstatus', 1)->count() }}レビュー)</a>

                                </div>
                                <div class="detail-giasp mt-4">
                                    <p class="css-giasp">{{ $product->regular_price }}円</p>
                                </div>
                                <div class="sort_description">
                                    {!! $product->short_descripsiton !!}
                                </div>
                                <div class="hananoimi mt-4">
                                    <p class="text-imi"><span>Availability:</span>{{ $product->stock_status }}
                                    </p>
                                </div>
                                <div class="add-cart mt-4 mb-3">
                                    <form action="" method="get">
                                        <input type="number" value="1" name="" id="">
                                        <a href="" class="button-addcart"
                                            wire:click.prevent="store('{{ $product->id }}','{{ $product->name }}','{{ $product->regular_price }}')">追加する</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 mt-5">
                            <div class="tab-naiyo">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home"
                                            aria-selected="true">説明</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                                            aria-selected="false">商品情報</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#nav-contact" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">レビュー({{ $product->orderItems->where('rstatus', 1)->count() }})</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        {!! $product->descripsitone !!}
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <table class="table">
                                            <tbody>

                                                <tr>
                                                    <th scope="row">Flowers:</th>
                                                    <td>{{ $product->category_id }}</td>


                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <style>
                                            .star-rating {
                                                font-size: 0;
                                                position: relative;
                                                display: inline-block;
                                            }

                                            .star-rating::before {
                                                content: "\f005\f005\f005\f005\f005";
                                                font-family: FontAwesome;
                                                font-size: 15px;
                                                color: #e6e6e6;
                                            }

                                            .star-rating span {
                                                display: inline-block;
                                                float: left;
                                                overflow-x: hidden;
                                                position: absolute;
                                                top: 0;
                                                left: 0;
                                            }

                                            .star-rating span:before {
                                                content: "\f005\f005\f005\f005\f005";
                                                font-family: FontAwesome;
                                                font-size: 15px;
                                                color: #a7896a;
                                            }

                                            .width-0-percent {
                                                width: 0%;
                                            }

                                            .width-20-percent {
                                                width: 20%;
                                            }

                                            .width-40-percent {
                                                width: 40%;
                                            }

                                            .width-60-percent {
                                                width: 60%;
                                            }

                                            .width-80-percent {
                                                width: 80%;
                                            }

                                            .width-100-percent {
                                                width: 100%;
                                            }

                                        </style>
                                        <h2 class="text-center mt-5 mb-3">
                                            {{ $product->name }}の{{ $product->orderItems->where('rstatus', 1)->count() }}
                                            レビュー</h2>
                                        <div class="row">
                                            @foreach ($product->orderItems->where('rstatus', 1) as $orderItem)
                                                                                           
                                            <div class="col-lg-2 mb-5">
                                                <img src="{{ asset('images/logo.png') }}" width="80px" height="80px"
                                                    style="border-radius: 50%" alt="">
                                            </div>
                                            <div class="col-lg-10">
                                                <div class="tt-review d-flex justify-content-between">
                                                    <p class="cus-name">{{ $orderItem->order->user->name }}</p>
                                                    <div class="time-star d-flex">
                                                        <p class="time mr-3">
                                                            {{ Carbon\Carbon::parse($orderItem->review->created_at)->format('d F Y g:i A') }}
                                                        </p>
                                                        <div class="star-rating d-flex mt-1">
                                                            <span
                                                                class="width-{{ $orderItem->review->rating * 20 }}-percent">Rated
                                                                <strong
                                                                    class="rating">{{ $orderItem->review->rating }}</strong>
                                                                of 5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-review">
                                                    <p>{{ $orderItem->review->comment }}</p>
                                                </div>
                                            </div>

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="input-group mt-5">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="line mt-5"></div>

                    <p class="danhmuc-hoa pt-5">
                        商品のカテゴリー
                    </p>
                    <ul>
                        @foreach ($categories as $item)


                            <li class="css-dmh fix-bd-1">
                                <a href="{{ route('product.category', ['category_slug' => $item->slug]) }}"
                                    class="name-dm">{{ $item->name }}</a>
                            </li>
                        @endforeach

                    </ul>
                    <div class="line mt-5"></div>
                    <p class="danhmuc-hoa pt-5">
                        人気のある商品
                    </p>
                    <ul>
                        @foreach ($popular_product as $p_product)
                            <li class="content-spnb d-flex">
                                <a href="">
                                    <img src="{{ asset('images') }}/{{ $p_product->image }}"
                                        class="img-fluid img-spnb" alt="">

                                </a>
                                <div class="content-body">
                                    <div class="product-name">
                                        <span class="text-product">{{ $p_product->name }}</span>
                                    </div>
                                    <div class="danhgia-spnb">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="gia-spnb">
                                        <span>{{ $p_product->regular_price }}円</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
