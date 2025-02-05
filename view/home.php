
<?php
    $html_dssp_new=showspCategories($dssp_new);
    $html_dssp_best=showspBest($dssp_best);
    $html_dssp_view=showspList($dssp_view);
    $html_dscate_view=showcategory($dscategory_view);
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
//        '<span ><a href="index.php?pg=myaccount">'.$username.'</a></span>
//        <a href="index.php?pg=logout">Thoát</a>'
        $html_account=  '<a  href="index.php?pg=myaccount" class="text-white">'.$username.'</a>/<a class="text-white" href="index.php?pg=logout">Thoát</a>';

    }else{
        $html_account='<span class="d-flex"><a  href="index.php?pg=dangky" class="text-black">Login -</a><a class="text-black" href="index.php?pg=dangnhap">Sign Up</a></span>';
    }

?>
<!-- slide-bar start -->
<aside class="slide-bar">
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
    </div>

    <!-- sidebar-info start -->
    <div class="cart_sidebar">
        <button type="button" class="cart_close_btn"><i class="fal fa-times"></i></button>
        <h2 class="heading_title text-uppercase">Cart Items - <span>4</span></h2>
        <div class="cart_items_list">
            <div class="cart_item">
                <div class="item_image">
                    <img src="layout/assets/img/product/img_01.png" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$19.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="layout/assets/img/product/img_02.png" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$22.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="layout/assets/img/product/img_03.png" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$43.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cart_item">
                <div class="item_image">
                    <img src="layout/assets/img/product/img_04.png" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">
                        Rorem ipsum dolor sit amet.
                    </h4>
                    <span class="item_price">$14.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
        </div>
        <div class="total_price text-uppercase">
            <span>Sub Total:</span>
            <span>$87.00</span>
        </div>
        <ul class="btns_group ul_li">
            <li><a href="cart.html" class="thm-btn">
                        <span class="btn-wrap">
                            <span>View Cart</span>
                            <span>View Cart</span>
                        </span>
                </a></li>
            <li><a href="checkout.html" class="thm-btn thm-btn__black">
                        <span class="btn-wrap">
                            <span>Checkout</span>
                            <span>Checkout</span>
                        </span>
                </a></li>
        </ul>
    </div>
    <!-- sidebar-info end -->

    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <div class="header-mobile-search">
            <form role="search" method="get" action="#">
                <input type="text" placeholder="Search Keywords">
                <button type="submit"><i class="ti-search"></i></button>
            </form>
        </div>
        <ul id="mobile-menu-active">
            <li class=""><a href="index.html">Home</a>
                
            </li>
            <li class="">
                <a href="#">Shop</a>
                
            </li>
            <li class="">
                <a href="#!">Blog</a>
                
            </li>
            <!-- <li class="dropdown">
                <a href="#!">Pages</a>
                <ul class="submenu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="about.html">Account</a></li>
                    <li><a href="404.html">404</a></li>
                </ul>
            </li> -->
            <!-- <li><a href="contact.html">Contact</a></li> -->
            <li><?=$html_account;?></li>
            
        </ul>
    </nav>
    <!-- side-mobile-menu end -->
</aside>
<div class="body-overlay"></div>
<!-- slide-bar end -->

<main>

    <!-- hero start -->
    <div class="hero hero__height ul_li" data-background="assets/img/bg/hero_bg.jpg">
        <div class="container">
            <div class="row align-items-center mt-none-30">
                <div class="col-lg-9 mt-30">
                    <div class="row align-items-center flex-row-reverse mt-none-30">
                        <div class="col-lg-7 mt-30">
                            <div class="hero__product">
                                <div class="hero__product-wrap">
                                    <div class="hero__product-carousel">
                                        <div class="hero__product-item">
                                            <img src="layout/assets/img/product/img_52.png" alt="">
                                        </div>
                                        <div class="hero__product-item">
                                            <img src="layout/assets/img/product/img_53.png" alt="">
                                        </div>
                                        <div class="hero__product-item">
                                            <img src="layout/assets/img/product/img_54.png" alt="">
                                        </div>
                                        <div class="hero__product-item">
                                            <img src="layout/assets/img/product/img_52.png" alt="">
                                        </div>
                                        <div class="hero__product-item">
                                            <img src="layout/assets/img/product/img_54.png" alt="">
                                        </div>
                                    </div>
                                    <div class="hero__product-carousel-nav">
                                        <div class="hero__product-item-nav">
                                            <div class="image">
                                                <img src="layout/assets/img/product/img_52.png" alt="">
                                            </div>
                                        </div>
                                        <div class="hero__product-item-nav">
                                            <div class="image">
                                                <img src="layout/assets/img/product/img_53.png" alt="">
                                            </div>
                                        </div>
                                        <div class="hero__product-item-nav">
                                            <div class="image">
                                                <img src="layout/assets/img/product/img_54.png" alt="">
                                            </div>
                                        </div>
                                        <div class="hero__product-item-nav">
                                            <div class="image">
                                                <img src="layout/assets/img/product/img_52.png" alt="">
                                            </div>
                                        </div>
                                        <div class="hero__product-item-nav">
                                            <div class="image">
                                                <img src="layout/assets/img/product/img_54.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="hero__product-offer">
                                                <span class="discount">29<span>%</span></span>
                                                <span>off</span>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-30">
                            <div class="hero__content">
                                <span class="subtitle">100% Best Product</span>
                                <h2 class="title">Waterma Watch <br> Beats Studio</h2>
                                <p>Widescreen 4k ultra Laptop</p>
                                <h3 class="price">$ 1800.99 / <span>$2860</span></h3>
                                <div class="mxw_343 mb-20">
                                    <div class="product__progress progress h-16 color-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="ul_li_between mb-6">
                                        <span class="product__available">Available: <span>334</span></span>
                                        <span class="product__available">Stock: <span>180</span></span>
                                    </div>
                                </div>
                                <a class="hero__btn" href="#!">Shop Now <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-30">
                    <div class="hot-deal__slide-wrap style-2 bg-white ">
                        <h2 class="section-heading mb-25"><span>Top Product</span></h2>
                        <div class="hot-deal__slide tx-arrow">
                            <div class="hot-deal__item text-center">
                                <div class="thumb">
                                    <a href="#!">
                                        <img src="layout/assets/img/product/img_55.png" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="rating-star ul_li_center mr-10">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <h2 class="title mb-15"><a href="#!">Asus 2022 Vivobook</a></h2>
                                    <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    <div class="mxw_216 m-auto">
                                        <div class="product__progress progress mb-6 h-8 color-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ul_li_between">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <span class="product__available">Sold: <span>180</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-deal__item text-center">
                                <div class="thumb">
                                    <a href="#!">
                                        <img src="layout/assets/img/product/img_55.png" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="rating-star ul_li_center mr-10">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <h2 class="title mb-15"><a href="#!">Asus 2022 Vivobook</a></h2>
                                    <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    <div class="mxw_216 m-auto">
                                        <div class="product__progress progress mb-6 h-8 color-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ul_li_between">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <span class="product__available">Sold: <span>180</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hot-deal__item text-center">
                                <div class="thumb">
                                    <a href="#!">
                                        <img src="layout/assets/img/product/img_55.png" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="rating-star ul_li_center mr-10">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <h2 class="title mb-15"><a href="#!">Asus 2022 Vivobook</a></h2>
                                    <h4 class="product__price mb-20"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    <div class="mxw_216 m-auto">
                                        <div class="product__progress progress mb-6 h-8 color-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="ul_li_between">
                                            <span class="product__available">Available: <span>334</span></span>
                                            <span class="product__available">Sold: <span>180</span></span>
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
    <!-- hero end -->

    <!-- feature start -->
    <div class="feature pt-40 pb-30">
        <div class="container">
            <div class="feature__wrap ul_li">
                <div class="feature__item ul_li">
                    <div class="icon">
                        <img src="layout/assets/img/icon/feat_01.svg" alt="">
                    </div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        <p>Free shipping over $100</p>
                    </div>
                </div>
                <div class="feature__item ul_li">
                    <div class="icon">
                        <img src="layout/assets/img/icon/feat_02.svg" alt="">
                    </div>
                    <div class="content">
                        <h3>Payment Secure</h3>
                        <p>Got 100% Payment Safe</p>
                    </div>
                </div>
                <div class="feature__item ul_li">
                    <div class="icon">
                        <img src="layout/assets/img/icon/feat_03.svg" alt="">
                    </div>
                    <div class="content">
                        <h3>Support 24/7</h3>
                        <p>Top quialty 24/7 Support</p>
                    </div>
                </div>
                <div class="feature__item ul_li">
                    <div class="icon">
                        <img src="layout/assets/img/icon/feat_04.svg" alt="">
                    </div>
                    <div class="content">
                        <h3>100% Money Back</h3>
                        <p>Cutomers Money Backs</p>
                    </div>
                </div>
                <div class="feature__item ul_li">
                    <div class="icon">
                        <img src="layout/assets/img/icon/feat_05.svg" alt="">
                    </div>
                    <div class="content">
                        <h3>Quality Products</h3>
                        <p>We Insure Product Quailty</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature end -->



    <!-- rd slide product start -->
    <div class="rd-slide-product">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-3 mt-30">
                    <div class="product-category" data-background="assets/img/bg/cat_bg.jpg">
                        <h2 class="section-heading mb-25"><span><span>Catagory</span></span></h2>
                        <ul class="list-unstyled">
                            <?= $html_dscate_view?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 mt-30">
                    <div class="rd-slide-products">
                        <h2 class="section-heading mb-25"><span>Trending Product</span></h2>
                        <div class="rd-product__slide tx-arrow">
                            <?=$html_dssp_best?>
<!--                            <div class="rd-product__slide-item">-->
<!--                                <div class="product__item">-->
<!--                                    <div class="product__img text-center pos-rel">-->
<!--                                        <a href="shop-single.html"><img src="layout/assets/img/product/img_07.png" alt=""></a>-->
<!--                                    </div>-->
<!--                                    <div class="product__content">-->
<!--                                        <div class="product__review ul_li_center">-->
<!--                                            <ul class="rating-star ul_li mr-10">-->
<!--                                                <li><i class="fas fa-star"></i></li>-->
<!--                                                <li><i class="fas fa-star"></i></li>-->
<!--                                                <li><i class="fas fa-star"></i></li>-->
<!--                                                <li><i class="far fa-star"></i></li>-->
<!--                                                <li><i class="far fa-star"></i></li>-->
<!--                                            </ul>-->
<!--                                            <span>(126) Review</span>-->
<!--                                        </div>-->
<!--                                        <h2 class="product__title"><a href="shop-single.html">Ninja Compact Smoothie & Food Processing Blender</a></h2>-->
<!--                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>-->
<!--                                    </div>-->
<!--                                    <ul class="product__action">-->
<!--                                        <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>-->
<!--                                        <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>-->
<!--                                        <li><a href="#!"><i class="far fa-heart"></i></a></li>-->
<!--                                    </ul>-->
<!--                                    <span class="badge-skew">New</span>-->
<!--                                </div>-->
<!--                            </div>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rd slide product end -->


    <!-- product category start -->
    <div class="product-cat pt-60">
        <div class="container">
            <h2 class="section-heading mb-25"><span>Product Catagories</span></h2>
            <div class="product-cat__wrap">
                <div class="row mt-none-50">
                    <?=$html_dssp_new?>
                </div>
            </div>
        </div>
    </div>
    <!-- product category end -->

    <!-- recent product start -->
    <div class="recent-product pt-60 pb-80">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-lg-12 mt-30">
                    <div class="product__nav-wrap style-2 ul_li_between">
                        <h2 class="section-heading"><span>Recently Viewed</span></h2>
                    </div>
                    <div class="tab-content" id="vdr-myTabContent">
                        <div class="tab-pane animated fadeInUp show active" id="vdr-tab1" role="tabpanel" aria-labelledby="vdr-tab-01">
                            <div class="row justify-content-md-center">
                                <?php echo $html_dssp_view; ?>
                         
                               
                            </div>
                        </div>
                        <div class="tab-pane animated fadeInUp" id="vdr-tab2" role="tabpanel" aria-labelledby="vdr-tab-02">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_39.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_40.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_41.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Galaxy S20 FE 5G Cell Phone, Factory Unlocked</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_42.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Tab M10 Plus, FHD Android Tablet, Processor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_43.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">JBL Tune 510BT Wireless On-Ear Head phones</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_44.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_46.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_47.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane animated fadeInUp" id="vdr-tab3" role="tabpanel" aria-labelledby="vdr-tab-03">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_39.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_40.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_41.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Galaxy S20 FE 5G Cell Phone, Factory Unlocked</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_42.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Tab M10 Plus, FHD Android Tablet, Processor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_43.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">JBL Tune 510BT Wireless On-Ear Head phones</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_44.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_46.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_47.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane animated fadeInUp" id="vdr-tab4" role="tabpanel" aria-labelledby="vdr-tab-04">
                            <div class="row justify-content-md-center">
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_39.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_40.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_41.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Galaxy S20 FE 5G Cell Phone, Factory Unlocked</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_42.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Tab M10 Plus, FHD Android Tablet, Processor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_43.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">JBL Tune 510BT Wireless On-Ear Head phones</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_44.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_46.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Portable 2TB External Hard Drive Portable</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="recent-product__item tx-product ul_li mt-30">
                                        <div class="thumb">
                                            <a href="shop-single.html"><img src="layout/assets/img/product/img_47.png" alt=""></a>
                                        </div>
                                        <div class="recent-product__content">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <h3><a href="shop-signle.html">Freestanding Portable Air Conditioner Indoor</a></h3>
                                            <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
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
    <!-- recent product end -->



    <!-- brand start -->
    <div class="brand pt-80 pb-80">
        <div class="container">
            <div class="brand__active">
                <div class="brand__item">
                    <a href="#!">
                        <img src="layout/assets/img/brand/img_01.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="layout/assets/img/brand/img_02.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="layout/assets/img/brand/img_03.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="layout/assets/img/brand/img_04.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="layout/assets/img/brand/img_05.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="layout/assets/img/brand/img_06.png" alt="">
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#!">
                        <img src="layout/assets/img/brand/img_03.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- brand end -->

</main>
<!--  //$html_dssp_best -->

<!-- $html_dssp_view -->
    <script>

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId, productName, productPrice) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: './view/addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>
