@section('content')
    <!-- mobile fix menu end -->

    <!-- Home Section Start -->
    <section class="home-section-2 home-section-bg pt-0 overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="slider-animate">
                        <div>
                            <div class="home-contain rounded-0 p-0">
                                <img src="/assets/images/slider/Home-Banner_1-1536x744.jpeg"
                                     class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="home-detail home-big-space p-center-left home-overlay position-relative">
                                    <div class="container-fluid-lg">
                                        <div>
                                            <h6 class="ls-expanded text-uppercase text-danger">Weekend Special offer
                                            </h6>
                                            <h1 class="heding-2">Premium Quality</h1>
                                            <h5 class="text-content">Fresh & Top Quality Dry Fruits are available here!
                                            </h5>
                                            <button onclick="location.href = 'shop-left-sidebar.html';"
                                                    class="btn theme-bg-color btn-md text-white fw-bold mt-md-4 mt-2 mend-auto">Shop
                                                Now <i class="fa-solid fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Category Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="slider-9">
                        @foreach($categories as $category)
                            <div>
                                <a href="#" class="category-box category-dark wow fadeInUp">
                                    <div>
                                        <img src="{{str_replace('public','storage',$category->gallery->path)}}" class="blur-up lazyload" alt="">
                                        <h5>{{$category->title}}</h5>
                                    </div>
                                </a>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Deal Section Start -->
    <section class="product-section product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Top Selling Items</h2>
            </div>
            <div class="row g-sm-4 g-3">
                <div class="col-xxl-12 ratio_110">
                    <div class="slider-6 img-slider">

                        @foreach($products as $product)

                            <div>
                                <div class="product-box-5 wow fadeInUp">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{str_replace('public','storage',$product->gallery->first()->path)}}"
                                                 class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>

                                        <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                           data-bs-placement="top" title="Wishlist">
                                            <i data-feather="bookmark"></i>
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="product-detail">
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">{{$product->title}}</h5>
                                        </a>

                                        <h5 class="sold text-content">
                                            <span class="theme-color price">$26.69</span>
                                            <del>28.56</del>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Section End -->


    <!-- banner section start -->
    <section>
        <div class="container-fluid-lg">
            <div class="row g-md-4 g-3">
                <div class="col-xxl-8 col-xl-12 col-md-7">
                    <div class="banner-contain hover-effect">
                        <img src="/assets/images/fashion/banner/1.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details p-center-left p-4">
                            <div>
                                <h2 class="text-kaushan fw-normal theme-color">Get Ready To</h2>
                                <h3 class="mt-2 mb-3">TAKE ON THE DAY!</h3>
                                <p class="text-content banner-text">In publishing and graphic design, Lorem
                                    ipsum is a placeholder text commonly used to demonstrate.</p>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                        class="btn btn-animation btn-sm mend-auto">Shop Now <i
                                            class="fa-solid fa-arrow-right icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-12 col-md-5">
                    <a href="shop-left-sidebar.html" class="banner-contain hover-effect h-100">
                        <img src="/assets/images/fashion/banner/2.jpg" class="bg-img blur-up lazyload" alt="">
                        <div class="banner-details p-center-left p-4 h-100">
                            <div>
                                <h2 class="text-kaushan fw-normal text-danger">20% Off</h2>
                                <h3 class="mt-2 mb-2 theme-color">SUMMRY</h3>
                                <h3 class="fw-normal product-name text-title">Product</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->


    <!-- Top Selling Section Start -->
    <section class="top-selling-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 col-lg-4 d-lg-block d-none">
                    <div class="ratio_156">
                        <div class="banner-contain-2 hover-effect">
                            <img src="/assets/images/fashion/banner/3.jpg" class="bg-img blur-up lazyload" alt="">
                            <div class="banner-detail-2 p-bottom-center text-center home-p-medium">
                                <div>
                                    <h2 class="text-qwitcher">Passion Meet</h2>
                                    <h3>PERFECTION</h3>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn btn-md">Shop
                                        Now <i class="fa-solid fa-arrow-right icon"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-9 col-lg-8">
                    <div class="slider-3_3 product-wrapper">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-selling-box">
                                        <div class="top-selling-title">
                                            <h3>Top Selling</h3>
                                        </div>

                                        <div class="top-selling-contain wow fadeInUp">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/1.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Tuffets Whole Wheat Bread</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 10.00</h6>
                                            </div>
                                        </div>

                                        <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/2.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Potato</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 40.00</h6>
                                            </div>
                                        </div>

                                        <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/3.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Green Chilli</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 45.00</h6>
                                            </div>
                                        </div>

                                        <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/4.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Muffets Burger Bun</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 70.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-selling-box">
                                        <div class="top-selling-title">
                                            <h3>Trending Products</h3>
                                        </div>

                                        <div class="top-selling-contain wow fadeInUp">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/5.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Good Life Refined Sunflower Oil</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 10.00</h6>
                                            </div>
                                        </div>

                                        <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/6.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Good Life Raw Peanuts</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 40.00</h6>
                                            </div>
                                        </div>

                                        <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/7.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Good Life Raw Peanuts</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 85.00</h6>
                                            </div>
                                        </div>

                                        <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/8.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Frooti Mango Drink</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 10.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="top-selling-box">
                                        <div class="top-selling-title">
                                            <h3>Recently added</h3>
                                        </div>

                                        <div class="top-selling-contain wow fadeInUp">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/9.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Tuffets Britannia Cheezza</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 10.00</h6>
                                            </div>
                                        </div>

                                        <div class="top-selling-contain wow fadeIn" data-wow-delay="0.05s">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/10.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Long Life Toned Milk</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 40.00</h6>
                                            </div>
                                        </div>

                                        <div class="top-selling-contain wow fadeIn" data-wow-delay="0.1s">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/11.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Organic Tomato</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 45.00</h6>
                                            </div>
                                        </div>

                                        <div class="top-selling-contain wow fadeIn" data-wow-delay="0.15s">
                                            <a href="product-left-thumbnail.html" class="top-selling-image">
                                                <img src="/assets/images/fashion/product/12.jpg"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>

                                            <div class="top-selling-detail">
                                                <a href="product-left-thumbnail.html">
                                                    <h5>Organic Pure Honey</h5>
                                                </a>
                                                <div class="product-rating">
                                                    <ul class="rating">
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star" class="fill"></i>
                                                        </li>
                                                        <li>
                                                            <i data-feather="star"></i>
                                                        </li>
                                                    </ul>
                                                    <span>(34)</span>
                                                </div>
                                                <h6>$ 90.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Selling Section End -->


    <!-- banner section start -->
    <section class="section-t-space">
        <div class="container-fluid-lg">
            <div class="banner-contain">
                <img src="/assets/images/fashion/banner/4.jpg" class="bg-img blur-up lazyload" alt="">
                <div class="banner-details p-center p-4 text-white text-center">
                    <div>
                        <h3 class="lh-base fw-bold offer-text">Get $3 Cashback! Min Order of $30</h3>
                        <h6 class="coupon-code coupon-code-white">Use Code : GROCERY1920</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section start -->


    <!-- Deal Section Start -->
    <section class="product-section product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Top Selling Items</h2>
            </div>
            <div class="row g-sm-4 g-3 section-b-space">
                <div class="col-xxl-12 ratio_110">
                    <div class="slider-6 img-slider">
                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/7.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/8.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/9.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/10.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/11.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/12.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Section End -->

    <!-- Deal Section Start -->
    <section class="product-section product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Top Selling Items</h2>
            </div>
            <div class="row g-sm-4 g-3">
                <div class="col-xxl-12 ratio_110">
                    <div class="slider-6 img-slider">
                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/1.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/2.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/3.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/4.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/5.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-5 wow fadeInUp">
                                <div class="product-image">
                                    <a href="product-left-thumbnail.html">
                                        <img src="/assets/images/fashion/product/6.jpg"
                                             class="img-fluid blur-up lazyload bg-img" alt="">
                                    </a>

                                    <a href="javascript:void(0)" class="wishlist-top" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="Wishlist">
                                        <i data-feather="bookmark"></i>
                                    </a>

                                    <ul class="product-option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i data-feather="refresh-cw"></i>
                                            </a>
                                        </li>

                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html" class="notifi-wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name">Black Gown</h5>
                                    </a>

                                    <h5 class="sold text-content">
                                        <span class="theme-color price">$26.69</span>
                                        <del>28.56</del>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Section End -->

    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2>Join our newsletter and get.</h2>
                                    <h5>$20 discount for your first order</h5>
                                    <div class="input-box">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                               placeholder="Enter Your Email">
                                        <i class="fa-solid fa-envelope arrow"></i>
                                        <button class="sub-btn  btn-animation">
                                            <span class="d-sm-block d-none">Subscribe</span>
                                            <i class="fa-solid fa-arrow-right icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->

    <!-- Footer Section Start -->
    <footer class="section-t-space footer-section-2 footer-color-3">
        <div class="container-fluid-lg">
            <div class="main-footer">
                <div class="row g-md-4 gy-sm-5">
                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <a href="index.html" class="foot-logo theme-logo">
                            <img src="/assets/images/logo/4.png" class="img-fluid blur-up lazyload" alt="">
                        </a>
                        <p class="information-text information-text-2">it is a long established fact that a reader
                            will
                            be distracted by the readable content.</p>
                        <ul class="social-icon">
                            <li class="light-bg">
                                <a href="https://www.facebook.com/" class="footer-link-color">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                   class="footer-link-color">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://twitter.com/i/flow/login" class="footer-link-color">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://www.instagram.com/" class="footer-link-color">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="light-bg">
                                <a href="https://in.pinterest.com/" class="footer-link-color">
                                    <i class="fab fa-pinterest-p"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">About Fastkart</h4>
                        </div>
                        <ul class="footer-list footer-contact footer-list-light">
                            <li>
                                <a href="about-us.html" class="light-text">About Us</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="light-text">Contact Us</a>
                            </li>
                            <li>
                                <a href="term_condition.html" class="light-text">Terms & Coditions</a>
                            </li>
                            <li>
                                <a href="careers.html" class="light-text">Careers</a>
                            </li>
                            <li>
                                <a href="blog-list.html" class="light-text">Latest Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Useful Link</h4>
                        </div>
                        <ul class="footer-list footer-list-light footer-contact">
                            <li>
                                <a href="order-success.html" class="light-text">Your Order</a>
                            </li>
                            <li>
                                <a href="user-dashboard.html" class="light-text">Your Account</a>
                            </li>
                            <li>
                                <a href="order-tracking.html" class="light-text">Track Orders</a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="light-text">Your Wishlist</a>
                            </li>
                            <li>
                                <a href="faq.html" class="light-text">FAQs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-2 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Categories</h4>
                        </div>
                        <ul class="footer-list footer-list-light footer-contact">
                            <li>
                                <a href="vegetables-demo.html" class="light-text">Fresh Vegetables</a>
                            </li>
                            <li>
                                <a href="spice-demo.html" class="light-text">Hot Spice</a>
                            </li>
                            <li>
                                <a href="bags-demo.html" class="light-text">Brand New Bags</a>
                            </li>
                            <li>
                                <a href="bakery-demo.html" class="light-text">New Bakery</a>
                            </li>
                            <li>
                                <a href="grocery-demo.html" class="light-text">New Grocery</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xxl-3 col-xl-4 col-sm-6">
                        <div class="footer-title">
                            <h4 class="text-white">Store infomation</h4>
                        </div>
                        <ul class="footer-address footer-contact">
                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box flex-start-box">
                                        <i data-feather="map-pin"></i>
                                        <p>Fastkart Demo Store, Demo store india 345 - 659</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="phone"></i>
                                        <p>Call us: 123-456-7890</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="mail"></i>
                                        <p>Email Us: Support@Fastkart.com</p>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)" class="light-text">
                                    <div class="inform-box">
                                        <i data-feather="printer"></i>
                                        <p>Fax: 123456</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sub-footer sub-footer-lite section-b-space section-t-space">
                <div class="left-footer">
                    <p class="light-text">2022 Copyright By Themeforest Powered By Pixelstrap</p>
                </div>

                <ul class="payment-box">
                    <li>
                        <img src="/assets/images/icon/paymant/visa.png" class="blur-up lazyload" alt="">
                    </li>
                    <li>
                        <img src="/assets/images/icon/paymant/discover.png" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="/assets/images/icon/paymant/american.png" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="/assets/images/icon/paymant/master-card.png" alt="" class="blur-up lazyload">
                    </li>
                    <li>
                        <img src="/assets/images/icon/paymant/giro-pay.png" alt="" class="blur-up lazyload">
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="/assets/images/product/category/1.jpg" class="img-fluid blur-up lazyload"
                                     alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                                <h4 class="price">$36.99</h4>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I
                                        love.
                                        Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                        Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw.
                                        Bonbon
                                        muffin I love carrot cake sugar plum dessert bonbon.</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected>Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.html';"
                                            class="btn btn-md add-cart-button icon">Add
                                        To Cart</button>
                                    <button onclick="location.href = 'product-left.html';"
                                            class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: $150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: $140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: $160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: $170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: $120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: $110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: $130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

  {{--  <!-- Cookie Bar Box Start -->
    <div class="cookie-bar-box">
        <div class="cookie-box">
            <div class="cookie-image">
                <img src="/assets/images/cookie-bar.png" class="blur-up lazyload" alt="">
                <h2>Cookies!</h2>
            </div>

            <div class="cookie-contain">
                <h5 class="text-content">We use cookies to make your experience better</h5>
            </div>
        </div>

        <div class="button-group">
            <button class="btn privacy-button">Privacy Policy</button>
            <button class="btn ok-button">OK</button>
        </div>
    </div>
    <!-- Cookie Bar Box End -->--}}

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="/assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                             alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="/assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                             alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="/assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                             alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop-left-sidebar.html" class="deal-image">
                                        <img src="/assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                             alt="">
                                    </a>

                                    <a href="shop-left-sidebar.html" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6>$52.57 <del>57.62</del> <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <!-- latest jquery-->

@endsection

@extends('Site.Layout.layout')