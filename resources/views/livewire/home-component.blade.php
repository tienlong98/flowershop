<main>
    <div class="home">
        <div class="content1">
            <div class="social-container">
                <div class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </div>
            </div>
            <div class="content">
                <p>多種多様な選択肢から植物を"自由に・安心して・簡単に"
                    お買い求めいただけるオンラインストアです。
                    理想の植物を手に入れられるように、
                    10,000を超える選択肢と、
                    安心して注文できる仕組みを用意しました。</p>
                <a href="/shop">購入</a>
            </div>

        </div>
        <div class="content2">
            <h1>Flower <span>Store</span></h1>
        </div>
    </div>
    <div class="about d-flex align-items-center">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-xl-8 about-content">
                    <h1 class="about-title">
                        We bring Spring freshness to your home!
                    </h1>
                    <p class="naiyo">
                        「町のお花屋さんやホームセンターでは、理想の植物が見つからない」<br>
                        そんな悩みを解決したいという想いからはじまり、現在では、<br>
                        国内最大級の商品数をお客様の手のひらの上に展開しています。<br>
                        また、実物を直接見ることができない不安を解消し、<br>
                        より安心して簡単に植物を選べる仕組みづくりも進めています。<br>
                        誰もがベストな選択をできるように、<br>
                        ラインナップを充実させることや、品質の良いものを取り揃えることはもちろん、<br>
                        購入までの仕組みづくりから購入後のケアに至るまで、<br>
                        人と植物のより良い関係性を追求してゆきます。<br>
                    </p>
                    <a href="http://" class="button-about">WHAT WE DO</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-product">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 content-left">
                    <h3 class="title-content-product">
                        WHEN WORDS ARE NOT ENOUGH
                    </h3>
                    <p class="text-content-product">
                        Pre-made and custom bouquetes
                    </p>
                    <a href="" class="button-content-product">ORDER NOW</a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 content-right d-flex">
                    <img src="{{ asset('images/hana6.jpg') }}" width="25%" class="img-fluid" alt="">
                    <img src="{{ asset('images/hana1.jpg') }}" width="25%" class="img-fluid" alt="">
                    <img src="{{ asset('images/hana4.jpg') }}" width="25%" class="img-fluid" alt="">
                    <img src="{{ asset('images/hana2.jpg') }}" width="25%" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="best-product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <h2 class="best-pc text-center">Our seasonal bestsellers</h2>
                </div>
                @foreach ($bs_product as $item)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                        <div class="item text-center">
                            <div class="css-img">
                                <a href=""><img src="{{ asset('images') }}/{{ $item->image }}" class="img-fluid"
                                        alt=""></a>
                            </div>
                            <div class="content-item">
                                <div class="danhgia d-flex justify-content-center">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="tensp ">{{ $item->name }}</p>

                                <p class="giasp "><span
                                        class="giabd">{{ $item->regular_price }}</span>{{ $item->sale_price }}円
                                </p>
                                <a href="" class="themgiohang ">Add to Cart </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- <div class="slide-birthday">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <h2 class="title-slide text-center">
                        Birthday Flowers for Mom
                    </h2>
                </div>
                <div class="col-xl-8 slide-hana">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="object-fit: cover; object-position: center" class="d-block w-100" src="{{ asset('images/sl2.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img style="object-fit: cover; object-position: center" class="d-block w-100" src="{{ asset('images/sl4.jpg') }}" alt="Second slide">
                            </div>
                            
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}
    <div class="bosuutap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                    <img src="{{ asset('images/bn1.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 text-center mt-5 mb-5">
                    <p class="title-bst ">We’ve Unlimited Flower Collections</p>
                    <p class="naiyo">
                        私たちは、フレンドリーで迅速なサービスによって支えられた、最高の花の手配と贈り物だけを提供することを約束するフラワーショップです。
                    </p>
                    <a href="" class="button-bst">
                        SEE COLLECTION
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                    <img src="{{ asset('images/bn2.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="follow">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-12">
                    <h2 class="title-fl">Inspired by the beauty of nature, created with love</h2>
                    <p class="text-fl">FOLLOW US <a href="https://www.facebook.com/"><span>#FLOWERSHOP</span></a>
                    </p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                    <a href="https://www.facebook.com/"><img src="{{ asset('images/hana7.jpg') }}" width="75%"
                            class="img-fluid" alt=""></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                    <a href="https://www.facebook.com/"><img src="{{ asset('images/hana8.jpg') }}" width="75%"
                            class="img-fluid" alt=""></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                    <a href="https://www.facebook.com/"><img src="{{ asset('images/hana9.jpg') }}" width="75%"
                            class="img-fluid" alt=""></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                    <a href="https://www.facebook.com/"><img src="{{ asset('images/hana10.jpg') }}" width="75%"
                            class="img-fluid" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</main>
