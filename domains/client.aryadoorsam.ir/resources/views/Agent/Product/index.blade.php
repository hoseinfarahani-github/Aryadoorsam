@section('content')
    <!-- Container-fluid starts-->
    <div class="page-body">
        <div class="container-fluid">

            @foreach($categories as $category)
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card border border-2">
                            <!-- Table Start -->
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h5>{{$category->title}}</h5>
                                </div>
                                <div
                                    class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-1 product-list-section">
                                    @foreach($category->product as $product)
                                        <div>
                                            <div class="product-box border border-1">
                                                <div class="product-header">
                                                    <div class="product-image">
                                                        <a href="javascript:void(0)">
                                                            <img src="{{str_replace('public','/storage',optional($product->gallery->first())->path)}}"
                                                                 class="img-fluid blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-footer">
                                                    <div class="product-detail">
                                                        <span class="span-name">{{$category->title}}</span>
                                                        <a href="javascript:void(0)">
                                                            <h5 class="name">{{$product->title}}</h5>
                                                        </a>
                                                        <h5 class="price theme-color"></h5>
                                                        <div class="add-to-cart-box bg-white">
                                                            <a class="btn btn-add-cart addcart-button">نمایش
                                                                <i class="fas fa-eye buy-button"></i></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                            <!-- Table End -->
                        </div>
                    </div>
                </div>

            @endforeach


        </div>
        <!-- Container-fluid Ends-->

        <!-- footer start-->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Page Body End -->
@endsection
@section('js')
    <!-- latest jquery-->
    <script src="Agent/assets/js/jquery-3.6.0.min.js"></script>

    <!-- jquery ui-->
    <script src="Agent/assets/js/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="Agent/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="Agent/assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="Agent/assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="Agent/assets/js/feather/feather.min.js"></script>
    <script src="Agent/assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="Agent/assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="Agent/assets/js/slick/slick.js"></script>
    <script src="Agent/assets/js/slick/slick-animation.min.js"></script>
    <script src="Agent/assets/js/slick/custom_slick.js"></script>

    <!-- Price Range Js -->
    <script src="Agent/assets/js/ion.rangeSlider.min.js"></script>

    <!-- Quantity js -->
    <script src="Agent/assets/js/quantity-2.js"></script>

    <!-- sidebar open js -->
    <script src="Agent/assets/js/filter-sidebar.js"></script>

    <!-- WOW js -->
    <script src="Agent/assets/js/wow.min.js"></script>
    <script src="Agent/assets/js/custom-wow.js"></script>

    <!-- script js -->
    <script src="Agent/assets/js/script.js"></script>

@endsection

@extends('Agent.Layout.layout')

