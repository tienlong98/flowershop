<div>
    <div class="home-shop">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h1 class="title-shop">
                        SHOP
                    </h1>
                    <p class="text-shop">
                        Home: <span>Shop</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="content-shop">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 pt-5">
                            <div class="filter">
                                <select class="form-select css-border" aria-label="Default select example"
                                    wire:model="sorting">
                                    <option value="default" selected>Default sorting</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="featured">Sort by featured</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 pt-5">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search this blog">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">

                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="item text-center">
                                    <div class="css-img">

                                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}"><img
                                                src="{{ asset('images') }}/{{ $product->image }}" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="content-item">
                                        <div class="danhgia d-flex justify-content-center">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                            <p class="tensp ">{{ $product->name }}</p>
                                        </a>
                                        <p class="giasp ">{{ $product->regular_price }}円</p>
                                        <a href="" class="themgiohang"
                                            wire:click.prevent="store('{{ $product->id }}','{{ $product->name }}','{{ $product->regular_price }}')">Add
                                            to Cart </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    {{ $products->links() }}
                </div>
                <div class="col-xl-3">
                    <div class="line mt-5"></div>

                    <p class="danhmuc-hoa pt-5">
                        PRODUCT CATEGORIES
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
                        POPULAR PRODUCTS
                    </p>
                    <ul>
                        @foreach ($popular_product as $p_product)

                            <li class="content-spnb d-flex">
                                <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                    <img src="{{ asset('images') }}/{{ $p_product->image }}"
                                        class="img-fluid img-spnb" alt="">

                                </a>
                                <div class="content-body">
                                    <div class="product-name">
                                        <a href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                        <span class="text-product">{{$p_product->name}}</span>
                                    </a>
                                    </div>
                                    <div class="danhgia-spnb">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <div class="gia-spnb">
                                        <span>{{$p_product->regular_price}}円</span>
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
