<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop</title>
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" sizes="16x16">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @livewireStyles
</head>

<body>
    <div class="menu">
        <nav class="menu-pc">
            <div class="logo  ">
                <a style="color: #544e48" href="/" class="logo"><span>F</span>lower</a>
            </div>
            <div class="menu-pc-icon d-flex">
                <div class="list-menu">
                    <ul>
                        <li>
                            <a style="color: #544e48" href="/">ホーム</a>
                        </li>
                        <li>
                            <a style="color: #544e48" href="/shop">ショップ</a>
                        </li>
                        <li>
                            <a style="color: #544e48" href="/about">チーム</a>
                        </li>
                        <li>
                            <a style="color: #544e48" href="/contact">コンタクト</a>
                        </li>
                        <li>
                            <a style="color: #544e48" href="/shop">ギャラリー</a>
                        </li>
                    </ul>
                </div>
                <div class="list-icon">
                    <ul>
                        <li>
                            <a style="color: #544e48" href="search"> <i class="fas fa-search"></i></a>
                        </li>
                        <li>
                            <a style="color: #544e48" href="/cart"><i class="fas fa-shopping-bag"></i></a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->utype === 'ADM')
                                    <li class="css-user">
                                        <a style="color: #544e48" class="fix-hover" href="">{{ Auth::user()->name }}
                                            <i class="fas fa-angle-down ml-1"></i></a>
                                        <div class="list-menu-user">
                                            <div class="mt-2"><a
                                                    href="{{ route('admin.dashboard') }}">ダッシュボード</a></div>
                                            <div class="mt-2"><a
                                                    href="{{ route('admin.categories') }}">カテゴリー</a>
                                            </div>
                                            <div class="mt-2"><a href="{{ route('admin.product') }}">商品</a>
                                            </div>
                                            <div class="mt-2"><a href="{{ route('admin.coupons') }}">クーポン</a>
                                            </div>
                                            <div class="mt-2"><a href="{{ route('admin.orders') }}">注文</a></div>

                                            <div class="mt-2"><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit('');">ログアウト</a>
                                            </div>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf

                                            </form>
                                        </div>
                                    </li>
                                @else
                                <li class="css-user">
                                    <a style="color: #544e48" class="fix-hover" href="">{{ Auth::user()->name }}<i
                                            class="fas fa-angle-down ml-1"></i></a>
                                    <div class="list-menu-user">
                                        <div class="mt-2"><a
                                                href="{{ route('user.dashboard') }}">ダッシュボード</a></div>
                                        <div class="mt-2"><a href="{{ route('user.orders') }}">注文</a></div>
                                        <div class="mt-2"><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit('');">ログアウト</a>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </div>
                                    
                                </li>
                                @endif
                            @else
                                <li><a style="color: #544e48" href="{{ route('login') }}"><i
                                            class="fas fa-sign-in-alt"></i></a></li>
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>

            <label for="nav-id-input" class="show-hide">
                <i class="fas fa-bars"></i>
            </label>
            <input type="checkbox" hidden class="nav_input" name="" id="nav-id-input">
            <div class="list-menu-mobile">
                <label for="nav-id-input" class="nav-mobile-close">
                    <i class="fas fa-times"></i>
                </label>
                <ul>
                    <li>
                        <a class="nav-item-mobile" style="color: #544e48" href="/">Home</a>
                    </li>
                    <li>
                        <a class="nav-item-mobile" style="color: #544e48" href="/shop">Shop</a>
                    </li>
                    <li>
                        <a class="nav-item-mobile" style="color: #544e48" href="/about">About</a>
                    </li>
                    <li>
                        <a class="nav-item-mobile" style="color: #544e48" href="/contact">Contact</a>
                    </li>
                    <li>
                        <a class="nav-item-mobile" style="color: #544e48" href="/shop">Gallery</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>

    {{ $slot }}
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 mt-5 text-center">
                    <a href="#" class="logo"><span>F</span>lower</a>
                    <p class="text-footer">
                        花は常に人々をよりよく、幸せな、彼らは魂のための日差しと薬です。
                    </p>
                    <div class="subscribe mt-5 ml-4">
                        <form action="" method="get">
                            <input type="email" name="email" id="" placeholder="Your email address">
                            <a href="" class="buttun-subscribe ml-2">
                                SUBSCRIBE
                            </a>
                        </form>
                    </div>
                    <div class="menu-footer mt-4 ">
                        <ul class="d-flex justify-content-center">
                            <li>
                                <a href="http://">
                                    SEND FLOWERS</a>
                            </li>
                            <li>
                                <a href="http://">
                                    WHAT WE DO</a>
                            </li>
                            <li>
                                <a href="http://">
                                    GALLERY</a>
                            </li>
                            <li>
                                <a href="http://">
                                    CONTACTS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="icon-sns">
                        <ul class="d-flex justify-content-center">
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-pinterest"></i></a></li>

                        </ul>
                    </div>
                    <div class="coryright d-flex justify-content-center mt-4 mb-5">
                        <i class="far fa-copyright mt-1 mr-2"></i>
                        <p class="tennhom">Linh_Long_Bao_Lwin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/js/scrip.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/1fta24jotxvdro0bnopd4chqacl8d7m3wxaty5qho3g11vtk/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    @livewireScripts
</body>

</html>
