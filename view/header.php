<?php
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
    extract($_SESSION['s_user']);
    //        '<span ><a href="index.php?pg=myaccount">'.$username.'</a></span>
    //        <a href="index.php?pg=logout">Thoát</a>'
    $html_account =  '<a  href="index.php?pg=myaccount" class="text-white">' . $username . '</a>/<a class="text-white" href="index.php?pg=logout">Thoát</a>';
} else {
    $html_account = '<a  href="index.php?pg=dangnhap" class="text-white">Login</a>/<a class="text-white" href="index.php?pg=dangky">Sign Up</a>';
}
// $html_dssp_new=showspCategories($dssp_new);
$html_dscate_view=showcategoryHeader($dscategory_view);
?>
<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Radios - Electronics Store WooCommerce Template</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" type="images/x-icon" />

    <!-- css include -->
    <link rel="stylesheet" href="layout/assets/css/fontawesome.css">
    <link rel="stylesheet" href="layout/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="layout/assets/css/fontawesome.css">
    <link rel="stylesheet" href="layout/assets/css/animate.css">
    <link rel="stylesheet" href="layout/assets/css/metisMenu.css">
    <link rel="stylesheet" href="layout/assets/css/uikit.min.css">
    <link rel="stylesheet" href="layout/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="layout/assets/css/slick.css">
    <link rel="stylesheet" href="layout/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="layout/assets/css/main.css">
</head>

<body>
    <div class="body_wrap">

        <!-- preloder start  -->
        <div class="preloder_part">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- preloder end  -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header start -->
        <header class="header header__style-one">
          
            <div class="container">
                <div class="header__middle ul_li_between justify-content-xs-center">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="layout/assets/img/logo/logo.svg" alt="">
                        </a>
                    </div>
                    <form class="header__search-box" action="#">
                        <div class="select-box">
                            <select id="category" name="category">
                                <option value="">All Categories</option>
                                <option value=""><?= $html_dscate_view?></option>
                            </select>
                        </div>
                        <input type="text" name="search" id="search" placeholder="Search For Products" required />
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                    <div class="header__lang ul_li">
                        <div class="header__language mr-15">
                            <ul>
                                <li><a href="#!" class="lang-btn">VND</a>

                                </li>
                            </ul>
                        </div>
                        <div class="header__language">
                            <ul>
                                <li><a href="#!" class="lang-btn"><img src="layout/assets/img/icon/usd_flag.png" alt="">Vietnamese </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__icons ul_li">
                        <div class="cart_btn icon">
                            <a href="index.php?pg=viewcart"><img src="layout/assets/img/icon/shopping_bag.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__cat-wrap" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
                <div class="container">
                    <div class="header__wrap ul_li_between">
                        <div class="header__cat ul_li">
                            <div class="hamburger_menu">
                                <a href="javascript:void(0);" class="active">
                                    <div class="icon bar">
                                        <span><i class="fal fa-bars"></i></span>
                                    </div>
                                </a>
                            </div>
                            <ul class="category ul_li">
                                
                                <li class=""><a href="index.php">Home</a>
                                </li>
                                <li class="">
                                    <a href="index.php?pg=sanpham">Shop</a>
                                </li>
                                <?php
                                if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                               ?>
                                    <li class="">
                                        <a href="index.php?pg=mybill">Đơn hàng của bạn</a>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="login-sign-btn">
                            <div class="thm-btn">
                                <span class="btn-wrap text-white">
                                    <?= $html_account; ?>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>