<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>Konni39 Trảng Bom</title>
  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <!-- =====  CSS  ===== -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon-114x114.png">
  <?php wp_head(); ?>
</head>

<body>
  <!-- =====  LODER  ===== -->
  <div class="loder"></div>
  <div class="wrapper">
    <div id="subscribe-me" class="modal animated fade in" role="dialog" data-keyboard="true" tabindex="-1">
      <div class="newsletter-popup">
        <img class="offer" src="<?php bloginfo('template_directory'); ?>images/newsbg.jpg" alt="offer">
        <div class="newsletter-popup-static newsletter-popup-top">
          <div class="popup-text">
            <div class="popup-title">50% <span>off</span></div>
            <div class="popup-desc">
              <div>Sign up and get 50% off your next Order</div>
            </div>
          </div>
          <form onsubmit="return  validatpopupemail();" method="post">
            <div class="form-group required">
              <input type="email" name="email-popup" id="email-popup" placeholder="Enter Your Email" class="form-control input-lg" required />
              <button type="submit" class="btn btn-default btn-lg" id="email-popup-submit">Subscribe</button>
              <label class="checkme">
                <input type="checkbox" value="" id="checkme" />Dont show again</label>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- =====  HEADER START  ===== -->
    <header id="header">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <ul class="header-top-left">
				<li><a href="tel:0977383347"><i class="fa fa-phone-square" aria-hidden="true"></i> 0977383347</a></li>
				<li><a href="mailto:konni39trangbom@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> konni39trangbom@gmail.com</a></li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="header-top-right text-right">
				<li><a href="https://goo.gl/maps/tgcKbLUpLtjk77UGA" target="blank" class="social-network"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
				<li><a href="https://www.facebook.com/Konni39TrangBom" target="_blank" class="social-network"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
				<li><a href="#" target="_blank" class="social-network"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
				<li><a href="#" target="_blank" class="social-network"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
				<li><a href="#" target="_blank" class="social-network"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header">
        <div class="container">
          <nav class="navbar">
            <div class="navbar-header mtb_20"> <a class="navbar-brand" href="index.html"> <img alt="Konni39 Trảng Bom" src="<?php bloginfo('template_directory'); ?>/images/logo.png"> </a> </div>
            <div class="header-right pull-right mtb_50">
              <button class="navbar-toggle pull-left" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
              <div class="shopping-icon">
                <div class="cart-item " data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true" role="button">Item's : <span class="cart-qty">0</span></div>
				<!--
                <div id="cart-dropdown" class="cart-menu collapse">
                  <ul>
                    <li>
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <td class="text-center"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/product/70x84.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
                            <td class="text-left product-name"><a href="#">MacBook Pro</a>
                              <span class="text-left price">$20.00</span>
                              <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                            </td>
                            <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                          </tr>
                          <tr>
                            <td class="text-center"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/product/70x84.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
                            <td class="text-left product-name"><a href="#">MacBook Pro</a>
                              <span class="text-left price">$20.00</span>
                              <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                            </td>
                            <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </li>
                    <li>
                      <table class="table">
                        <tbody>
                          <tr>
                            <td class="text-right"><strong>Sub-Total</strong></td>
                            <td class="text-right">$2,100.00</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                            <td class="text-right">$2.00</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>VAT (20%)</strong></td>
                            <td class="text-right">$20.00</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>Total</strong></td>
                            <td class="text-right">$2,122.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </li>
                    <li>
                      <form action="cart_page.html">
                        <input class="btn pull-left mt_10" value="View cart" type="submit">
                      </form>
                      <form action="checkout_page.html">
                        <input class="btn pull-right mt_10" value="Checkout" type="submit">
                      </form>
                    </li>
                  </ul>
                </div>
				-->
              </div>
              <div class="main-search pull-right">
                <div class="search-overlay">
                  <!-- Close Icon -->
                  <a href="javascript:void(0)" class="search-overlay-close"></a>
                  <!-- End Close Icon -->
                  <div class="container">
                    <!-- Search Form -->
                    <form role="search" id="searchform" action="/search" method="get">
                      <label class="h5 normal search-input-label">Bạn muốn tìm sản phẩm nào?</label>
                      <input value="" name="q" placeholder="Bạn muốn tìm sản phẩm nào..." type="search">
                      <button type="submit"></button>
                    </form>
                    <!-- End Search Form -->
                  </div>
                </div>
                <div class="header-search"> <a id="search-overlay-btn"></a> </div>
              </div>
            </div>
            <div class="collapse navbar-collapse js-navbar-collapse pull-right">
              <ul id="menu" class="nav navbar-nav">
                <li> <a href="/"><img alt="Trang chủ" src="<?php bloginfo('template_directory'); ?>/images/menu_img1.png"><br>Trang chủ</a></li>
                <li> <a href="/"><img alt="Đồng giá" src="<?php bloginfo('template_directory'); ?>/images/menu_img2.png"><br>Đồng giá</a></li>
                <li> <a href="/"><img alt="Mẹ và bé" src="<?php bloginfo('template_directory'); ?>/images/menu_img3.png"><br>Mẹ và bé</a></li>
                <li> <a href="/"><img alt="Mỹ phẩm" src="<?php bloginfo('template_directory'); ?>/images/menu_img4.png"><br>Mỹ phẩm</a></li>
				<li> <a href="/"><img alt="Đồ gia dụng" src="<?php bloginfo('template_directory'); ?>/images/menu_img5.png"><br>Gia dụng</a></li>
				<li> <a href="/"><img alt="Thực phẩm chức năng" src="<?php bloginfo('template_directory'); ?>/images/menu_img6.png"><br>Thực phẩm</br>chức năng</a></li>
              </ul>
            </div>
            <!-- /.nav-collapse -->
          </nav>
        </div>
      </div>
      <div class="header-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-3">
              <div class="category">
                <div class="menu-bar" data-target="#category-menu,#category-menu-responsive" data-toggle="collapse" aria-expanded="true" role="button">
                  <h4 class="category_text">Gian hàng</h4>
                  <span class="i-bar"><i class="fa fa-bars"></i></span></div>
              </div>
              <div id="category-menu-responsive" class="navbar collapse " aria-expanded="true" style="" role="button">
                <div class="nav-responsive">
                  <ul class="nav  main-navigation collapse in">
                    <li><a href="#">Đồng giá</a></li>
                    <li><a href="#">Mẹ và bé</a></li>
                    <li><a href="#">Mỹ phẩm</a></li>
                    <li><a href="#">Đồ gia dụng</a></li>
                    <li><a href="#">Thực phẩm chức năng</a></li>
					<li><a href="#">Thực phẩm</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-9">
              <div class="header-bottom-right offers">
              	<div class="marquee">
					<span><i class="fa fa-circle" aria-hidden="true"></i>Tại sao phải tạo bọt trước khi rửa mặt</span>
                  <span><i class="fa fa-circle" aria-hidden="true"></i>Chuỗi cửa hàng 100 yên tại Nhật</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- =====  HEADER END  ===== -->