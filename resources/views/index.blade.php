@extends('layout.template')
@section('content')
<!-- Sidebar Begin -->
<div class="sidebar bg-light mb-3 " style="overflow-x: hidden;-webkit-box-shadow: -6px 0px 5px -4px rgba(0,0,0,0.25); -moz-box-shadow: -6px 0px 5px     -4px rgba(0,0,0,0.25); box-shadow: -6px 0px 5px -4px rgba(0,0,0,0.25); padding-bottom:50px">


    <div class="card-header text-left">Daftar Belanja 
        <button class="closeside float-right btn btn-danger" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="cart_box"></div>
        <div class="content" style="display:none; " >
            <img src="" class="picture img-side rounded mx-auto d-block">
            <h5 class="name nama text-center mt-2">ini name</h5>
            <h4 class="harga text-center mt2">ini harga</h4>
            <div class='input-group'> 
                <span class="input-group-btn" style="margin-top:-5px;">
                    <button class='btn btn-sm btn-outline-secondary ' type='button'> 
                        <span class='fa fa-minus'></span> 
                    </button> 
                </span>
                <input type='text' name='' class='qty btn btn-outline-secondary btn-sm' value='1' min='1' max='6' readonly=''>
                <span class="input-group-btn" style="margin-top:-5px;">
                    <button class='btn btn-sm btn-outline-secondary ' type='button'> 
                        <span class='fa fa-plus'></span> 
                    </button>  
                </span>
                <a style='cursor:pointer'>
                    <div class='del-cart' style='margin-right:-200px; margin-top:1px; color: #C9302C; font-size: 20px;'>
                        <i class='fa fa-trash'></i>
                    </div>
                </a>
            </div>  
        </div>
        <div class="button">
            <div class="float-right"> 
            {{--  <button type="submit" class="btn btn-sm btn-outline-secondary mt-4 btn-lg">Add To Cart</button>&nbsp;  --}}
                <button type="submit" class="btn btn-sm btn-outline-success mt-4 btn-lg">Check Out</button>
            </div>
        </div>
</div>
    
<!-- Sidebar End -->

    <!--================Start Home Banner Area =================-->
    <section class="home_banner_area mb-40">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Best Seller Area =================-->
    <section class="feature_product_area section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="main_title">
                    <h2><span>BEST SELLER</span></h2>
                </div>
                </div>
            </div>
            
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class=" img-fluid w-100" src="{{asset('template/img/product/feature-product/f-p-2.jpg')}}" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a >
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a style="cursor:pointer;" class="shop" data-name="{{ $product->name }}" data-harga="@currency($product->harga),00">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm text-center">
                                    <a href="#" class="d-block">
                                        <h4>{{ $product->name }}</h4>
                                    </a>
                                    <div class="mt-3">
                                        <span class="mr-4"> @currency($product->harga),00 </span>
                                        {{--  <del>$35.00</del>  --}}
                                    </div>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================ End Feature Product Area =================-->
    <!--================ New Product Area =================-->
    <section class="new_product_area section_gap_top section_gap_bottom_custom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                <div class="main_title">
                    <h2><span>Collection</span></h2>
                </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-6">
                    <div class="new_product">
                        <h5 class="text-uppercase">collection of 2019</h5>
                        <h3 class="text-uppercase">Men’s summer t-shirt</h3>
                        <div class="product-img">
                            <img class="img-fluid" src="{{asset('template/img/product/new-product/new-product1.png')}}" alt="" />
                        </div>
                        <h4>$120.70</h4>
                        <a href="#" class="main_btn">Add to cart</a>
                    </div>
                </div>
    
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset('template/img/product/new-product/n1.jpg')}}" alt="" />
                            <div class="p_icon">
                                <a href="#">
                                <i class="ti-eye"></i>
                                </a>
                                <a href="#">
                                <i class="ti-heart"></i>
                                </a>
                                <a href="#">
                                <i class="ti-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Nike latest sneaker</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                        <img class="img-fluid w-100" src="{{asset('template/img/product/new-product/n2.jpg')}}" alt="" />
                        <div class="p_icon">
                            <a href="#">
                            <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                            <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                            <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>Men’s denim jeans</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                        <img class="img-fluid w-100" src="{{asset('template/img/product/new-product/n3.jpg')}}" alt="" />
                        <div class="p_icon">
                            <a href="#">
                            <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                            <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                                <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                        </div>
                        <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>quartz hand watch</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6 col-md-6">
                    <div class="single-product">
                        <div class="product-img">
                        <img class="img-fluid w-100" src="{{asset('template/img/product/new-product/n4.jpg')}}" alt="" />
                        <div class="p_icon">
                            <a href="#">
                            <i class="ti-eye"></i>
                            </a>
                            <a href="#">
                            <i class="ti-heart"></i>
                            </a>
                            <a href="#">
                            <i class="ti-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-btm">
                        <a href="#" class="d-block">
                            <h4>adidas sport shoe</h4>
                        </a>
                        <div class="mt-3">
                            <span class="mr-4">$25.00</span>
                            <del>$35.00</del>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End New Product Area =================-->

    
    
@endsection

	
