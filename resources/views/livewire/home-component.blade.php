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
                <p>Lorem ipsum dolor sit amet, consectetur elit. Proin ante tellus, interdum vitae consequat maximus, sagittis ac lacus. Phasellus finibus rutrum diam</p>
                <a href="http://">BUY NOW</a>
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
                        We often take for granted the beauty of this world: the flowers, the trees, the birds, the clouds – even those we love. Because we see things so often, we see them less and less.
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
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 content-right">
                    <img src="{{asset('images/10.png')}}" width="85%" class="img-fluid" alt="">
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
                            <a href=""><img src="{{asset('images')}}/{{$item->image}}" class="img-fluid" alt=""></a>
                        </div>
                        <div class="content-item">
                            <div class="danhgia d-flex justify-content-center">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="tensp ">{{$item->name}}</p>

                            <p class="giasp "><span class="giabd">{{$item->regular_price}}</span>{{$item->sale_price}}円</p>
                            <a href="" class="themgiohang ">Add to Cart </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="slide-birthday">
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
                                <img class="d-block w-100" src="{{asset('images/sl1.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('images/sl2.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('images/sl3.jpg')}}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('images/sl4.jpg')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="bosuutap">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                    <img src="{{asset('images/bn1.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 text-center mt-5 mb-5">
                    <p class="title-bst ">We’ve Unlimited Flower Collections</p>
                    <p class="naiyo">
                        We are Flower Shop committed to offering only the finest floral arrangements and gifts, backed by service that is friendly and prompt.
                    </p>
                    <a href="" class="button-bst">
                        SEE COLLECTION
                    </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12 col-12">
                    <img src="{{asset('images/bn2.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="follow">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-12">
                    <h2 class="title-fl">Inspired by the beauty of nature, created with love</h2>
                    <p class="text-fl">FOLLOW US <a href="https://www.facebook.com/"><span>#FLOWERSHOP</span></a></p>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                    <a href="https://www.facebook.com/"><img src="{{asset('images/fl1.jpg')}}" width="75%" class="img-fluid" alt=""></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                    <a href="https://www.facebook.com/"><img src="{{asset('images/fl2.jpg')}}" width="75%" class="img-fluid" alt=""></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                    <a href="https://www.facebook.com/"><img src="{{asset('images/fl3.jpg')}}" width="75%" class="img-fluid" alt=""></a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-5">
                    <a href="https://www.facebook.com/"><img src="{{asset('images/fl4.jpg')}}" width="75%" class="img-fluid" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</main>