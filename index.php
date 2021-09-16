<?php
session_start();
// $cookie_name='traffic';
// if(isset($_COOKIE[$cookie_name])){
   
//     require_once 'admin/functions/connect.php';

//     $update_traffic ="UPDATE INTO traffic SET traffic=traffic+1";
//     $result_traffic = $connect ->query($update_traffic);

// }else{

//     $insert_trafic= "INSERT INTO traffic"; 
//     setcookie($cookie_name,"is counted",
//     time()+(60*60*60),"/"); //expire in one hour; 
// }

// require_once 'admin/functions/connect.php';    
// $date = date("Y-m-d");
// $userip = $_SERVER["REMOTE_ADDR"];
//  $query = "SELECT *FROM traffic WHERE data='$date'";
//  $result = $connect ->query($query);



//  if(!isset($_COOKIE['visitor'])){

//    // setcookie($name,time()+(60*60*60)); //expire in one hour; 

//    $time = strtotime('next day 00:00');
//    setcookie("visitor",'hey',$time); //expire in one hour; 

//    // setcookie('visitor',$time);
//  }
//  if($result ->num_rows==0){
//    $insert_query = "INSERT INTO traffic (data,'ip)
//    VALUES ('$date','$userip')";
     
//      $result_query=$connect ->query($insert_query);

//  }else{
   
//    $row = $result ->fetch_assoc();

//    if(!isset($_COOKIE['visitor'])){

//      $newip= "$row[ip]";

//      if(!preg_match('/'.$userip.'/',$newip)){

//        $newip .="$userip";
//      }
//      $update_query = "UPDATE traffic SET ip = '$newip', views= views+1 WHERE data = '$date'";
//      $connect ->query($update_query);
//    }
//  }
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/index-6.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:38:26 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bigenja | Online Shopping Ecommerce Cart Html Template </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- icofont -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- select 2  -->
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body> 
    
<!-- support bar area start -->
<div class="support-bar-area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-content-area"><!-- left content area -->
                    <div class="language-picker">
                            <div class="default">
                                <div class="slang-wrap">
                                    <div class="img">
                                        <img src="assets/img/lang-flag/enf.jpg" alt="language flag">
                                    </div>
                                    <div class="name">English <i class="fas fa-angle-down"></i></div>
                                </div>
                                <ul class="all-lang">
                                        <li>
                                            <div class="slang-wrap">
                                                <div class="img">
                                                    <img src="assets/img/lang-flag/fer.jpg" alt="language flag">
                                                </div>
                                                <div class="name">Frence </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slang-wrap">
                                                <div class="img">
                                                    <img src="assets/img/lang-flag/ger.jpg" alt="language flag">
                                                </div>
                                                <div class="name">German </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slang-wrap">
                                                <div class="img">
                                                    <img src="assets/img/lang-flag/ind.jpg" alt="language flag">
                                                </div>
                                                <div class="name">Hindi </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        <div class="currency-picker">
                            <div class="default">
                                <div class="slang-wrap">
                                    <div class="name">USD <i class="fas fa-angle-down"></i></div>
                                </div>
                                <ul class="all-lang">
                                        <li>
                                            <div class="slang-wrap">
                                                <div class="name">IND </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slang-wrap">
                                                <div class="name">AUD </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slang-wrap">
                                                <div class="name">EUR </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                </div><!-- //.left content area -->
                <div class="right-content-area"><!-- right content area -->
                    <ul>
                        <li>
                            Ordered before 17:30, shipped today
                        </li>
                        <li>
                            <i class="fas fa-truck"></i>  Free Shipping
                        </li>
                        <li>
                            <i class="fas fa-clock"></i> 24/7 Online Support
                        </li>
                    </ul>
                </div><!-- //. right content area -->
            </div>
        </div>
    </div>
</div>
<!-- support bar area end -->

<!-- support bar area two start -->
<div class="support-bar-two bg-white home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-content">
                    <a href="index.php" class="logo main-logo">
                        <img src="assets/img/logo-6.png" alt="logo">
                    </a>
                </div>
                <div class="right-content">
                    <ul>
                        <li>
                            <div class="support-search-area">
                                <form action="" class="search-form _search">
                                    <div class="form-element has-icon">
                                        <input type="text" class="input-field _search" placeholder="Search your keyword">
                                        <div class="the-icon">
                                            <select class="category select selectpicker">
                                                <option value="0">All Category</option>
                                                <option value="0">Men's Wear</option>
                                                <option value="0">Women's Wear</option>
                                                <option value="0">Kids Wear</option>
                                                <option value="0">Sports Wear</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
                                        <br><br>
                                        <div class='search_filed' color='red;'></div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="single-support-info-item">
                                <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Email Us</h4>
                                    <span class="details">info@examplte.com</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-support-info-item">
                                <div class="icon">
                                        <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">Free Support</h4>
                                    <span class="details">(012) 800 456 789 - 10</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- support bar area two end -->

<!-- navbar area start -->
<nav class="navbar navbar-area navbar-expand-lg navbar-light bg-light-blue home-6">
        <div class="container nav-container">
            <div class="logo-wrapper navbar-brand ">
                <a href="index.php" class="logo main-logo mobile-logo">
                    <img src="assets/img/logo-white.png" alt="logo">
                </a>
                <div class="form-element has-icon">
                    <select class="category selectpicker" >
                        <option value="0">All Category</option>
                        <option value="0">Men's Wear</option>
						<option value="0">Women's Wear</option>
						<option value="0">Kids Wear</option>
						<option value="0">Sports Wear</option>
                    </select>
                    <span class="the-icon">
                            <i class="fas fa-plus"></i>
                    </span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="mirex">
                <!-- navbar collapse start -->
                <ul class="navbar-nav">
                    <!-- navbar- nav -->
                    <li class="nav-item active dropdown">
                        <a class="nav-link pl-0 dropdown-toggle" href="#" data-toggle="dropdown">Home
                            <span class="sr-only">(current)</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="index.php" class="dropdown-item">Home Style 01</a>
                            <a href="index-2.php" class="dropdown-item">Home Style 02</a>
                            <a href="index-3.php" class="dropdown-item">Home Style 03</a>
                            <a href="index-4.php" class="dropdown-item">Home Style 04</a>
                            <a href="index-5.php" class="dropdown-item">Home Style 05</a>
                            <a href="index-6.php" class="dropdown-item">Home Style 06</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown mega-menu"><!-- mega menu start -->
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
                        <div class="mega-menu-wrapper">
                            <div class="container mega-menu-container">
                                <div class="row">
                                  <div class="col-lg-3 col-sm-12">
                                    <div class="mega-menu-columns">
                                        <h6 class="title">Inner Pages</h6>
                                        <ul class="menga-menu-page-links">
                                            <li><a href="category.php">Category</a></li>
                                            <li><a href="cart.php">Cart</a></li>
                                            <li><a href="product-details.php">Product Details</a></li>
                                            <li><a href="signup.php">Signup</a></li>
                                            <li><a href="sellers-products.php">Sellers Products</a></li>
                                            <li><a href="seller-dashboard.php">Sellers Dashboard</a></li>

                                        </ul>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-sm-12">
                                        <div class="mega-menu-columns">
                                            <h6 class="title">Other Pages</h6>
                                            <ul class="menga-menu-page-links">
                                                <li><a href="product_upload.php">Product Upload</a></li>
                                                <li><a href="offers.php">Offer</a></li>
                                                <li><a href="invoice.php">Invoice</a></li>
                                                <li><a href="vendor-list.php">Vendor List</a></li>
                                                <li><a href="partners.php">Partners</a></li>
                                                <li><a href="404.php">404 Page</a></li>
                                            </ul>
                                        </div>
                                  </div>
                                  <div class="col-lg-3 col-sm-12">
                                        <div class="mega-menu-columns">
                                            <h6 class="title">Other Pages</h6>
                                            <ul class="menga-menu-page-links">
                                                <li><a href="search.php">Search</a></li>
                                                <li><a href="become-affiliats.php">Become Affiliant</a></li>
                                                <li><a href="faq.php">Faq</a></li>
                                                <li><a href="track-orders.php">Track Order</a></li>
                                                <li><a href="privacy_policy.php">Privacy Policy</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                            </ul>
                                        </div>
                                  </div>
                                  <div class="col-lg-3 col-sm-12">
                                        <a href="product-details.php">
                                            <img src="assets/img/mega-menu.jpg" alt="product image">
                                        </a>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </li><!-- mega menu start -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <a href="blog.php" class="dropdown-item">Blog</a>
                            <a href="blog-details.php" class="dropdown-item">Blog Details</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if(isset($_SESSION['login'])){echo'admin/functions/logout_client.php';}else{echo'login.php';} ?>">
                            <?php
                            if(isset($_SESSION['login'])){
                                echo'logout';
                            }else{
                                echo'login';    
                            }
                            
                            
                            ?>
                         </a>
                    </li>

                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar btn wrapper -->
            <div class="responsive-mobile-menu">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mirex" aria-controls="mirex"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <!-- navbar collapse end -->
            <div class="right-btn-wrapper">
               <ul>
                   <li class="search" id="search"><i class="fas fa-search"></i> </li>
                   <li class="cart" id="cart"><i class="fas fa-shopping-basket"></i> 
                    <span class="badge"><?php
                    require_once 'admin/functions/connect.php';
                    $sidebar_session= $_SESSION['login'];
                    $sidebar_numm ="SELECT *FROM shopping_cart WHERE client_id='$sidebar_session'";
                       $sidebar_hh = $connect ->query($sidebar_numm);
                       $counter = $sidebar_hh->num_rows;
                       echo $counter;
                    //    foreach($result_sidebar as $show_sidebar_cart){
                    //      $sidebar_cart_id = $show_sidebar_cart['product_id'];
                    
                    
                    ?></span>
                    </li>
                   <li class="right-menu" id="side-menu"><i class="fas fa-bars"></i> </li>
               </ul>
            </div>
           
            
        </div>
    </nav>
    <!-- navbar area end -->

<!-- header area start -->
<div class="header-area-three header-bg-four home-six">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="header-inner "><!-- header inner -->
                    <span class="subtitle">SPRING - SUMMER 2018</span>
                    <h1 class="title">New Arrivals</h1>
                    <p class="wow fadeInDown">Stock up on sportswear and limited edition collections on
                        our awesome mid-season sale.</p>
                        <div class="btn-wrapper">
                            <a href="category.php" class="boxed-btn">View Collections</a>
                            <a href="about.php" class="boxed-btn blank">learn more</a>
                        </div>
                </div><!-- //. header inner -->
            </div>
        </div>
    </div>
</div>
<!-- header area end -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="" class="search-popup-form">
        <div class="form-element">
                <input type="text"  class="input-field _input_search" placeholder="Search.....">
        </div>

        <ul class="nav flex-column show_suggestion" style="color:white; background-color:#17a2b8; font-size:22px; border-radius:0px 5px 10px 5px; padding:10px; margin-top:9px;">

        </ul>
        <a href=""   type="submit" class="submit-btn search_submit"><i class="fas fa-search"></i></a>

        <!-- <button type="submit" class="submit-btn search_submit"><i class="fas fa-search"></i></button> -->
    </form>
</div>
<!-- slide sidebar area start -->
<div class="slide-sidebar-area" id="slide-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" id="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="recent-reviews"><!-- recent reviews -->
            <h4 class="title">Recent Reviews</h4>
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/01.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Footwear Dark</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Abir Khan</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/02.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Milo Hoverboard</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Rex Rifat</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/03.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div>
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/04.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div><!-- //. single review item -->
            <div class="single-review-item"><!-- single review item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/05.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <ul>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                        <li>
                                <i class="fas fa-star"></i>
                        </li>
                    </ul>
                    <span class="posted-by">by Panto Roy</span>
                </div>
            </div>
        </div> <!-- //. recent reviews -->
    </div><!-- //. bottom content -->
</div>
<!-- slide sidebar area end -->
<!-- cart sidebar area start -->
<div class="cart-sidebar-area" id="cart-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn" ><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="cart-products sid_carttt"><!-- cart product -->
            <h4 class="title">Shopping cart</h4>
            <?php

            if(!isset($_SESSION['login'])){

                echo 'you should register first';
            }else {
                
            
           
               
            
            $sidebar_cart= $_SESSION['login'];
            require_once 'admin/functions/connect.php';
            $select_sidebar ="SELECT *FROM shopping_cart WHERE client_id='$sidebar_cart'";
            $result_sidebar = $connect ->query($select_sidebar);
            foreach($result_sidebar as $show_sidebar_cart){
                $sidebar_cart_id = $show_sidebar_cart['product_id'];

                $sidebar_show_cart = "SELECT *FROM products WHERE id='$sidebar_cart_id'";
                $sidebar_result_cart = $connect ->query($sidebar_show_cart);
                $sidebar_carts_show = $sidebar_result_cart -> fetch_assoc();  
                    
                 $imgs = $sidebar_carts_show['img'];
                 $img_arr = explode(",",$imgs);

                
               
            ?>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="admin/img/<?php echo $img_arr[0];?>" alt="recent review" width="90px;" height="90px;">
                </div>
                <div class="content">
                    <h4 class="title"><?php echo $sidebar_carts_show['description'];?></h4>
                    <div class="price"><span class="pprice"><?php echo $sidebar_carts_show['price'];?></span> <del class="dprice">$500.00</del></div>
                   
                 <a href="" class="remove-cart sidebar delete_item" _cartdata ="<?php echo $sidebar_cart_id;?>" _clientid ="<?php echo $sidebar_cart;?>"   >Remove</a>
                </div>
                </div>
                <?php 
                
                }
            }
             
                
                ?>
            
            <div class="btn-wrapper">
                <a href="checkout.php" class="boxed-btn">Checkout</a>
            </div>
            
        </div> <!-- //. cart product -->
    </div><!-- //. bottom content -->
</div>
<!-- cart sidebar area end -->
<!-- feature area home 6 start -->
<div class="feature-area-home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
               <div class="img-wrapper">
                    <a href="#">
                        <img src="assets/img/banner-add/03.jpg" alt="banner image">
                    </a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="assets/img/banner-add/04.jpg" alt="banner image">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="img-wrapper">
                    <a href="#">
                        <img src="assets/img/banner-add/05.jpg" alt="banner image">
                    </a>
               </div>
            </div>
        </div>
    </div>
</div>
<!-- feature area home 6 end -->
<div class="trending-seller-area home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="single-offer-item-tall"><!-- single offer item tall -->
                    <div class="thumb">
                        <img src="assets/img/product-offer/01.jpg" alt="offered image">
                    </div>
                    <div class="content">
                        <span class="subtitle">Hurry Up! Offer ends in:</span>
                        <div class="countdown-area">
                            <ul>
                                <li>
                                    <div class="single-countdown-box"><!-- single countdown box -->
                                        <span class="time" id="chour">03</span>
                                        <span class="name">Hor</span>
                                    </div><!-- //.single countdown box -->
                                </li>
                                <li>
                                    <div class="single-countdown-box"><!-- single countdown box -->
                                        <span class="time" id="cmin">16</span>
                                        <span class="name">min</span>
                                    </div><!-- //.single countdown box -->
                                </li>
                                <li>
                                    <div class="single-countdown-box"><!-- single countdown box -->
                                        <span class="time" id="csec">46</span>
                                        <span class="name">Sec</span>
                                    </div><!-- //.single countdown box -->
                                </li>
                            </ul>
                        </div>
                        <a href="#"><h4 class="title">Game Console Controller + USB 3.0 Cable</h4></a>
                        <div class="price"><span class="sprice">$400</span> <del class="dprice">$570</del></div>
                    </div>
                </div><!-- //.single oofer item tall -->
                <div class="single-offer-banner"><!-- single offer item tall -->
                    <a href="#">
                        <div class="img-wrapper">
                            <img src="assets/img/banner-add/06.jpg" alt="banner image">
                        </div>
                    </a>
                </div><!-- //.single oofer item tall -->
            </div>
            <div class="col-lg-9 ">
                <div class="home-six-trending-seller-filter"><!-- home six trending seller filter -->
                   <div class="row">
                       <div class="col-lg-12">
                        <div class="home-six-trending-sellter-filter-nav">
                                <ul class="nav nav-tabs"  role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="bestseller-tab" data-toggle="tab" href="#bestseller" role="tab" aria-controls="bestseller" aria-selected="true">best sellers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="trendeseller-tab" data-toggle="tab" href="#trendeseller" role="tab" aria-controls="trendeseller" aria-selected="false">trending sellers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">new sellers</a>
                                    </li>
                                </ul> 

                               
                        </div>
                        
                        <div class="home-six-trending-masonry">
                                <div class="tab-content" >
                                    <div class="tab-pane fade show active" id="bestseller" role="tabpanel" aria-labelledby="bestseller-tab">
                                        <div class="row">
                                        <?php
                                
                                require_once 'admin/functions/connect.php';

                                
                                if(isset($_GET['page'])){
                                    $page = $_GET['page']; 

                                }else{
                                    
                                    $page = 1;

                                }
                                $limit= 4;
                                $start_page = ($page - 1) * $limit;
                                $select_product = "SELECT *FROM products LIMIT $start_page,$limit";
                                $result_product = $connect -> query($select_product);
                                foreach($result_product as $show_pp ){
                                
                                    $imgs = $show_pp['img'];
                                    $img_arr = explode(",",$imgs)
                                
                                ?>
                                       
                                                <div class="col-lg-4 col-md-6">
                                                        <div class="single-new-collection-item"><!-- single new collections -->
                                                            <div class="thumb">
                                                                <img src="admin/img/<?php echo $img_arr[0];?>" alt="new collcetion image" style ="height:300px;">
                                                                <div class="hover">
                                                                <a data-cart="<?php echo $show_pp['id']; ?>"  href="#" class="addtocart _cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <span class="category"><?php echo $show_pp['description'] ;?></span>
                                                                <a href="product-details.php?id=<?php echo $show_pp['id'];?>"   ><h4 class="title"><?php  echo $show_pp['sellar'] ;?></h4></a>
                                                                <div class="price"><span class="sprice"><?php echo $show_pp['price'] ;?></span> <del class="dprice">$45.00</del></div>
                                                            </div>
                                                        </div><!-- //. single new collections  -->
                                                    </div>
                                                    
                                                    <?php } ?>
                                                
                                                   
                                            </div>
                                    </div>
                                    <nav aria-label="Page navigation example">
  <ul class="pagination">
      <?php
      if($page >= $limit){
          $Previous = $limit -1 ;
      }else{
          $Previous = $page -1 ;
      }
     
      ?>
      
    <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $Previous;?>">Previous</a></li>
    <li class="page-item"><a class="page-link" href="index.php?page=1">1</a></li>
    <li class="page-item"><a class="page-link" href="index.php?page=2">2</a></li>
    <li class="page-item"><a class="page-link" href="index.php?page=3">3</a></li>
    <?php
             if($page >= $limit){
                 $next = $limit ;
             }else{
                 $next = $page + 1;
                 
             }     
             ?>
              <li class="page-item"><a class="page-link" href="index.php?page=<?php echo $next; ?>">Next</a></li>
       

  </ul>
</nav>
                                  
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/02.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">Sportswear</span>
                                                        <a href="#"><h4 class="title">Black Tshirt Brock</h4></a>
                                                        <div class="price"><span class="sprice">$23.00</span> <del class="dprice">$45.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/03.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">shoe</span>
                                                        <a href="#"><h4 class="title">Footwear Dark</h4></a>
                                                        <div class="price"><span class="sprice">$56.00</span> <del class="dprice">$78.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/04.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">accesories</span>
                                                        <a href="#"><h4 class="title">Milo Hoverboard</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/05.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">hat</span>
                                                        <a href="#"><h4 class="title">Red Yello Hat</h4></a>
                                                        <div class="price"><span class="sprice">$89.00</span> <del class="dprice">$100.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/06.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">Cycle</span>
                                                        <a href="#"><h4 class="title">Minimal Cycle</h4></a>
                                                        <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$1200.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-new-collection-item"><!-- single new collections -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-offer/07.jpg" alt="new collcetion image">
                                                        <div class="hover">
                                                            <a href="#" class="addtocart">Add To Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <span class="category">bike</span>
                                                        <a href="#"><h4 class="title">Dart Motao Bike</h4></a>
                                                        <div class="price"><span class="sprice">$800.00</span> <del class="dprice">$1000.00</del></div>
                                                    </div>
                                                </div><!-- //. single new collections  -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div><!-- //.home six trending seller filter -->
                       </div>
                   </div>
            </div>
        </div>
    </div>
</div>

<!-- best seller home 6 area start -->
<div class="best-seller-home-6-area blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="best-seller-home-6-filter-menu"><!-- best seller home 6 filter menu -->
                    <ul>
                        <li data-filter=".popular">popular item</li>
                        <li class="active" data-filter="*">best sellers</li>
                        <li data-filter=".best">featured item</li>
                    </ul>
                </div><!-- //.best seller home 6 filter menu -->
            </div>
            <div class="col-lg-12 remove-col-padding">
                <div class="best-seller-home-6-masonry" id="best-seller-home-6-masonry"><!-- best seller home 6 masonry -->
                    <div class="col-lg-3 col-md-4 popular home-6-grid-item">
                        <div class="single-product-item-two home-6 ">
                            <div class="img-wrapper">
                                <img src="assets/img/product-offer/11.jpg" alt="product image">
                                <div class="hover">
                                    <a href="#" class="addtocart">Add to cart</a>
                                </div>
                            </div>
                            <div class="content">
                                <a href="#" class="category">cycle</a>
                                <h4 class="title">Minimal Cycle</h4>
                                <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 best home-6-grid-item">
                        <div class="single-offer-item-wide"><!-- single offer item tall -->
                            <div class="thumb">
                                <img src="assets/img/product-offer/01-wide.jpg" alt="offered image">
                            </div>
                            <div class="content">
                                    <a href="#"><h4 class="title">Game Console Controller + USB 3.0 Cable</h4></a>
                                    <div class="price"><span class="sprice">$400</span> <del class="dprice">$570</del></div>
                                <span class="subtitle">Hurry Up! Offer ends in:</span>
                                <div class="countdown-area">
                                    <ul>
                                        <li>
                                            <div class="single-countdown-box"><!-- single countdown box -->
                                                <span class="time" id="cwhour">03</span>
                                                <span class="name">Hor</span>
                                            </div><!-- //.single countdown box -->
                                        </li>
                                        <li>
                                            <div class="single-countdown-box"><!-- single countdown box -->
                                                <span class="time" id="cwmin">16</span>
                                                <span class="name">min</span>
                                            </div><!-- //.single countdown box -->
                                        </li>
                                        <li>
                                            <div class="single-countdown-box"><!-- single countdown box -->
                                                <span class="time" id="cwsec">46</span>
                                                <span class="name">Sec</span>
                                            </div><!-- //.single countdown box -->
                                        </li>
                                    </ul>
                                </div>
                              
                            </div>
                        </div><!-- //.single oofer item tall -->
                    </div>
                    <div class="col-lg-3 col-md-4 popular home-6-grid-item">
                        <div class="single-product-item-two home-6">
                            <div class="img-wrapper">
                                <img src="assets/img/product-offer/08.jpg" alt="product image">
                                <div class="hover">
                                    <a href="#" class="addtocart">Add to cart</a>
                                </div>
                            </div>
                            <div class="content">
                                <a href="#" class="category">cycle</a>
                                <h4 class="title">Minimal Cycle</h4>
                                <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 popular best home-6-grid-item">
                            <div class="single-product-item-two home-6">
                                <div class="img-wrapper">
                                    <img src="assets/img/product-offer/10.jpg" alt="product image">
                                    <div class="hover">
                                        <a href="#" class="addtocart">Add to cart</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <a href="#" class="category">cycle</a>
                                    <h4 class="title">Minimal Cycle</h4>
                                    <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-4 best home-6-grid-item">
                        <div class="single-product-item-two home-6">
                            <div class="img-wrapper">
                                <img src="assets/img/product-offer/09.jpg" alt="product image">
                                <div class="hover">
                                    <a href="#" class="addtocart">Add to cart</a>
                                </div>
                            </div>
                            <div class="content">
                                <a href="#" class="category">cycle</a>
                                <h4 class="title">Minimal Cycle</h4>
                                <div class="price"><span class="sprice">$700.00</span> <del class="dprice">$4500.00</del></div>
                            </div>
                        </div>
                    </div>

                </div><!-- //.best seller home 6 masonry -->
            </div>
        </div>
    </div>
</div>
<!-- best seller home 6 area end -->

<!-- best seller home 6 area small start -->
<div class="best-seller-home-6-area-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="best-seller-home-6-filter-menu-small"><!-- best seller home 6 filter menu small -->
                    <ul class="nav nav-tabs"  role="tablist">
                            <li class="nav-item">
                                  <a class="nav-link active" id="popular-tab_3" data-toggle="tab" href="#popular_3" role="tab" aria-controls="popular_3" aria-selected="true">popular item</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="bestseller-tab_3" data-toggle="tab" href="#bestseller_3" role="tab" aria-controls="bestseller_3" aria-selected="false">best sellers</a>
                          </li>
                          <li class="nav-item">
                               <a class="nav-link" id="featured-tab_3" data-toggle="tab" href="#featured_3" role="tab" aria-controls="featured_3" aria-selected="false">featured item</a>
                          </li>
                    </ul> 
                </div><!-- //.best seller home 6 filter menu -->
            </div>
            <div class="col-lg-12">
                <div class="best-seller-home-6-masonry-small"><!-- best seller home 6 masonry small -->
                    <div class="tab-content">
                            <div class="tab-pane fade show active" id="popular_3" role="tabpanel" aria-labelledby="popular-tab_3">
                                <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/09.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                              <?php
                                              require_once 'admin/functions/connect.php';
                                              $select = 'SELECT *FROM products ORDER BY id DESC';
                                              $result = $connect ->query($select);
                                              foreach($result as $showw){

                                             
                                              $imgs = $show_pp['img'];
                                              $img_arr = explode(",",$imgs)
                                              
                                              
                                              ?>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src=="admin/img/<?php echo $img_arr[0];?>"alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title"><?php echo $showw['description']?></h4></a>
                                                        <div class="price"><span class="sprice"><?php echo $showw['price']  ?></span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <?php  } ?>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/11.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/12.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/13.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/14.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/15.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/16.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/17.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/18.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/19.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="single-rated-box-one"><!-- single rated box one -->
                                                    <div class="thumb">
                                                        <img src="assets/img/product-small/20.jpg" alt="product small image">
                                                    </div>
                                                    <div class="content">
                                                        <ul class="ratings">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star-half-alt"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                        <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                        <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                    </div>
                                                </div><!-- //.single rated box one -->
                                            </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="bestseller_3" role="tabpanel" aria-labelledby="bestseller-tab_3">
                                    <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/09.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/10.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/11.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/12.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/13.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/14.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/15.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/16.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/17.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/18.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/19.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/20.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="featured_3" role="tabpanel" aria-labelledby="featured-tab_3">
                                    <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/09.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/10.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/11.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/12.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/13.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/14.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/15.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/16.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/17.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/18.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/19.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-rated-box-one"><!-- single rated box one -->
                                                        <div class="thumb">
                                                            <img src="assets/img/product-small/20.jpg" alt="product small image">
                                                        </div>
                                                        <div class="content">
                                                            <ul class="ratings">
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star-half-alt"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                                            <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                                        </div>
                                                    </div><!-- //.single rated box one -->
                                                </div>
                                    </div>
                            </div>
                    </div>
                </div><!-- //.best seller home 6 masonry small-->
            </div>
        </div>
    </div>
</div>
<!-- best seller home 6 area small end -->

<!-- banner add area start -->
<div class="banner-add margin-bottom-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-add-inner"><!-- banner add inner -->
                    <div class="img-wrapper">
                        <img src="assets/img/banner-add/07.jpg" alt="banner add image">
                    </div>
                </div><!-- //.banner add inner -->
            </div>
        </div>
    </div>
</div>
<!-- banner add area end -->

<!-- recently added start -->
<div class="recently-added-area home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="recently-added-nav-menu"><!-- recently added nav menu -->
                    <ul>
                        <li>recently added</li>
                    </ul>
                </div><!-- //.recently added nav menu -->
            </div>
            <div class="col-lg-12">
                <div class="recently-added-carousel" id="recently-added-carousel"><!-- recently added carousel -->
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/09.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">accesories</a>
                            <h4 class="title">Milo Hoverboard</h4>
                            <div class="price"><span class="sprice">$7.00</span> <del class="dprice">$42.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/10.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">Bike</a>
                            <h4 class="title">Dart Moto Bike</h4>
                            <div class="price"><span class="sprice">$30.00</span> <del class="dprice">$45.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/11.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">cycle</a>
                            <h4 class="title">Minimal Cycle</h4>
                            <div class="price"><span class="sprice">$70.00</span> <del class="dprice">$120.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/12.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">hat</a>
                            <h4 class="title">Red Yello Hat</h4>
                            <div class="price"><span class="sprice">$89.00</span> <del class="dprice">$156.00</del></div>
                        </div>
                    </div>
                    <div class="single-new-collection-item">
                        <div class="thumb">
                            <img src="assets/img/new-collections/03.jpg" alt="product image">
                            <div class="hover">
                                <a href="#" class="addtocart">Add to cart</a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">cycle</a>
                            <h4 class="title">Minimal Cycle</h4>
                            <div class="price"><span class="sprice">$70.00</span> <del class="dprice">$90.00</del></div>
                        </div>
                    </div>
                </div><!-- //. recently added carousel -->
            </div>
        </div>
    </div>
</div>
<!-- recently added end -->

<!-- brand logo carousel area one start -->
<div class="brand-logo-carousel-area-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-logo-carousel-one" id="brand-logo-carousel-one"><!-- brand logo carousel one -->
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/01.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/02.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/03.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/04.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/05.png" alt="brand logo image">
                        </a>
                    </div>
                    <div class="single-brang-logo-carousel-one-item">
                        <a href="#">
                            <img src="assets/img/brand-logo/06.png" alt="brand logo image">
                        </a>
                    </div>
                </div><!-- //.brand logo carousel one -->
            </div>
        </div>
    </div>
</div>
<!-- brand logo carousel area one end -->
<!-- feature area one start -->
<section class="feature-one-area home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-featured-one-item"><!-- single featured item -->
                    <div class="inner-item">
                        <span class="subtitle">get 45% off</span>
                        <h3 class="title">Featured</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/01.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/02.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/03.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/04.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                    </ul>
                </div><!-- //.single featured item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured-one-item"><!-- single featured item -->
                    <div class="inner-item">
                        <span class="subtitle">get 45% off</span>
                        <h3 class="title">Best Seller</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/05.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/06.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/07.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                        <li>
                            <div class="single-rated-box-one"><!-- single rated box one -->
                                <div class="thumb">
                                    <img src="assets/img/product-small/08.jpg" alt="product small image">
                                </div>
                                <div class="content">
                                    <ul class="ratings">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star-half-alt"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <a href="#"><h4 class="title">Minimal Screw</h4></a>
                                    <div class="price"><span class="sprice">$83.00</span> <del class="dprice">$120.00</del></div>
                                </div>
                            </div><!-- //.single rated box one -->
                        </li>
                    </ul>
                </div><!-- //.single featured item -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured-one-item"><!-- single featured item -->
                    <div class="inner-item">
                        <span class="subtitle">Product intro</span>
                        <h3 class="title">Offer Ad</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="banner-add">
                               <a href="#"> <img src="assets/img/banner-add/01.jpg" alt="banner image"></a>
                            </div>
                        </li>
                        <li>
                            <div class="banner-add">
                                <a href="#"><img src="assets/img/banner-add/02.jpg" alt="banner image"></a>
                            </div>
                        </li>
                    </ul>
                </div><!-- //.single featured item -->
            </div>
        </div>
    </div>
</section>
<!-- feature area one end -->
<!-- footer area one start -->
<footer class="footer-arae-one">
        <div class="footer-top-one blue-bg"><!-- footer top one-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget about">
                            <div class="widget-body">
                                <a href="index.php" class="footer-logo">
                                    <img src="assets/img/logo.png" alt="footer logo">
                                </a>
                                <ul class="contact-info-list">
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details">198 West 21th Street, Suite 721, New York NY 10010</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details">youremail@yourdomain.com</span>
                                                <span class="details">example@yourdomain.com</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-contact-info">
                                            <div class="icon">
                                                    <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="content">
                                                <span class="details">+88 (0) 101 0000 000</span>
                                                <span class="details">+99 (989) 101 0000 000</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Shopping Guide</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="blog.php">--  Blog</a></li>
                                    <li><a href="faq.php">--  Faq</a></li>
                                    <li><a href="#">--  Payment</a></li>
                                    <li><a href="track-orders.php">--  Shipment</a></li>
                                    <li><a href="#">--  Where is my order</a></li>
                                    <li><a href="#">--  Return policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Style Adviser</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="signup.php">--  Your Account</a></li>
                                    <li><a href="#">--  Information</a></li>
                                    <li><a href="#">--  Address</a></li>
                                    <li><a href="#">--  Discount</a></li>
                                    <li><a href="#">--  Order History</a></li>
                                    <li><a href="track-orders.php">--   Order Tracking</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-title">
                                <h4 class="title">Information</h4>
                            </div>
                            <div class="widget-body">
                                <ul class="page-list">
                                    <li><a href="#">--  Sitemap</a></li>
                                    <li><a href="#">--  Search Terms</a></li>
                                    <li><a href="#">--  Advanced Search</a></li>
                                    <li><a href="about.php">--  About us</a></li>
                                    <li><a href="contact.php">--  Contact Us</a></li>
                                    <li><a href="partners.php">--  Suppliers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- //.footer top one -->
        <div class="copyright-area blue-bg"><!-- copyright area -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-inner"><!-- copyright inner -->
                            <div class="left-content-area">
                                <span class="copyright-text">Copyright by@Bigenza - 2018</span>
                            </div>
                            <div class="right-content-area">
                                <ul class="payment-logo">
                                    <li>
                                        <img src="assets/img/payment-logo/01.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/02.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/03.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/04.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/05.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/06.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/07.png" alt="payment logo">
                                    </li>
                                    <li>
                                        <img src="assets/img/payment-logo/08.png" alt="payment logo">
                                    </li>
                                </ul>
                            </div>
                        </div><!-- //. copyright inner -->
                    </div>
                </div>
            </div>
        </div><!-- //. copyright area -->
    </footer>
    <!-- footer area one end -->

    <!-- back to top start -->
    <div class="back-to-top">
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
            <div class="preloader-inner">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
            </div>
        </div>
    <!-- preloader area end -->

    <!-- jquery -->
    <script src="assets/js/jquery.js"></script>
    <!-- popper -->
    <script src="assets/js/popper.min.js"></script>    
	<!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- way poin js-->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>
    <!-- counterup js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- countdown -->
    <script src="assets/js/countdown.js"></script>
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
    <script>
     $(document).ready(function(){
         $('._cart').click(function(){
           
           var cart_id = $(this).attr('data-cart');

           $.post('admin/functions/shop_cart.php',{
              
              y_cart : cart_id

           },function(){

               $('.sid_carttt').load(location.href + ' .sid_carttt');

           })

         })
     })
  

     $('.delete_item').click(function(){

var prod_id = $(this).attr('_cartdata');
var clien_id = $(this).attr('_clientid');


$.post('admin/functions/delete_cart.php',{

    x_prod_id : prod_id,
    x_clint_id : clien_id
},function(data){
    
})

})


///search task

$('._input_search').keyup(function(){

    var _searchh = $(this).val();
    // console.log(_searchh);

    $.post('admin/functions/search.php',{

       
      x_search : _searchh


    },function(data){
        
        $('.show_suggestion').html(data);
        $('.show_suggestion li').click(function(){
            var _suggest = $(this).html();
            $('._input_search').val(_suggest);
            $('.search_submit').attr("href","category.php?sellar="+_suggest);
            
        })
        
    })
    
  })


    </script>   

    
</body>


<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/index-6.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:38:48 GMT -->
</html>

