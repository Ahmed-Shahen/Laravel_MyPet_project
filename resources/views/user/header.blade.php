<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> My Pet Store</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== 7 Stroke Icon CSS ==-->
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Range Slider Min CSS ==-->
    <link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Preloader Content ==-->
  <div class="preloader-wrap">
    <div class="preloader">
      <div class="dog-head"></div>
      <div class="dog-body"></div>
    </div>
  </div>
  <!--== End Preloader Content ==-->

  <!--== Start Header ==-->
  <header class="header-area transparent">
    <div class="container">
      <div class="row no-gutter align-items-center position-relative">
        <div class="col-12">
          <div class="header-align">
            <div class="header-align-start">
              <div class="header-logo-area">
                <a href="index.html">
                  <img class="logo-main" src="assets/img/MyPetLogos.png" width="170" height="70" alt="Logo" />
                </a>
              </div>
            </div>
            <div class="header-align-center">
              <div class="header-navigation-area position-relative">
                <ul class="main-menu nav">
                  <li class="has-submenu"><a href="#/"><span>Home</span></a>
                    <ul class="submenu-nav">
                      <li><a href="index.html"><span>Home One</span></a></li>
                      <li><a href="index-two.html"><span>Home Two</span></a></li>
                    </ul>
                  </li>
                  <li><a href="about-us.html"><span>About</span></a></li>
                  <li class="has-submenu position-static"><a href="#/"><span>Shop</span></a>
                      <ul class="submenu-nav submenu-nav-mega column-3">
                        <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Layout</span></a>
                          <ul>
                            <li><a href="shop-three-columns.html"><span>Shop 3 Column</span></a></li>
                            <li><a href="shop-four-columns.html"><span>Shop 4 Column</span></a></li>
                            <li><a href="shop-left-sidebar.html"><span>Shop Left Sidebar</span></a></li>
                            <li><a href="shop.html"><span>Shop Right Sidebar</span></a></li>
                          </ul>
                        </li>
                        <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Categories</span></a>
                          <ul>
                            <li><a href="shop.html"><span>Cats</span></a></li>
                            <li><a href="shop.html"><span>Dogs</span></a></li>
                            <li><a href="shop.html"><span>Fishes</span></a></li>
                            <li><a href="shop.html"><span>Rabbits</span></a></li>
                          </ul>
                        </li>
                        <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Others Pages</span></a>
                          <ul>
                            <li><a href="shop-cart.html"><span>Shopping Cart</span></a></li>
                            <li><a href="shop-checkout.html"><span>Checkout</span></a></li>
                            <li><a href="shop-wishlist.html"><span>Wishlist</span></a></li>
                            <li><a href="shop-compare.html"><span>Compare</span></a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>

                  <li class="has-submenu"><a href="#/"><span>Blog</span></a>
                    <ul class="submenu-nav submenu-nav-mega">
                      <li class="mega-menu-item"><a href="#/" class="mega-title">Blog Layout</a>
                        <ul>
                          <li><a href="blog-grid.html">Blog Grid</a></li>
                          <li><a href="blog.html">Blog Left Sidebar</a></li>
                          <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                        </ul>
                      </li>
                      <li class="mega-menu-item"><a href="#/" class="mega-title">Single Blog</a>
                        <ul>
                          <li><a href="blog-details-no-sidebar.html">Blog Details</a></li>
                          <li><a href="blog-details.html">Blog Details Left Sidebar</a></li>
                          <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                    <ul class="submenu-nav">
                      <li><a href="account.html"><span>Account</span></a></li>
                      <li><a href="account-login.html"><span>Login</span></a></li>
                      <li><a href="account-register.html"><span>Register</span></a></li>
                      <li><a href="page-not-found.html"><span>Page Not Found</span></a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html"><span>Contact</span></a></li>

                    @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block " style="display: flex;">
                        @auth

                            <x-app-layout>
                            </x-app-layout>
                           </li>
                        @else
                           <li style="    padding-right: 20px;""> <a href="{{ route('login') }}" class="text-sm text-white dark:text-gray-500 underline">Log in</a></li>

                            @if (Route::has('register'))
                              <li>  <a href="{{ route('register') }}" class="ml-4 text-sm text-white dark:text-gray-500 underline">Register</a></li>
                            @endif
                        @endauth
                    </div>
                @endif

                </ul>
              </div>
              <div class="header-action-area">
                <div class="shopping-search">
                  <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                </div>
                {{-- <div class="shopping-account">
                  <a class="shopping-account-btn" href="account-login.html">
                    <i class="pe-7s-users icon"></i>
                  </a>
                </div> --}}
                <div class="shopping-wishlist">
                  <a class="shopping-wishlist-btn" href="shop-wishlist.html">
                    <i class="pe-7s-like icon"></i>
                  </a>
                </div>
                <div class="shopping-cart">
                  <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="AsideOffcanvasCart">
                    <i class="pe-7s-shopbag icon"></i>
                    <sup class="shop-count">2</sup>
                  </button>
                </div>
                <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                  <i class="pe-7s-menu"></i>
                </button>
              </div>
            </div>

            <div class="header-align-end">

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header ==-->
