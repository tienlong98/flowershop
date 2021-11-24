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
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <div class="detail-giasp mt-4">
                                    <p class="css-giasp">{{ $product->regular_price }}円</p>
                                </div>
                                <div class="sort_description">
                                    {!! $product->short_descripsiton !!}
                                </div>
                                <div class="hananoimi mt-4">
                                    <p class="text-imi"><span>Availability:</span>{{ $product->stock_status }}</p>
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
                                            aria-selected="false">レビュー</a>
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
                                        aria-labelledby="nav-contact-tab">...</div>
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
