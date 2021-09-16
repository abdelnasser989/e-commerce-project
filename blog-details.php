<?php
 require_once 'admin/functions/connect.php';
 $id = $_GET['id'];
 if(!isset($id)){

    header('location:blog.php');
    exit();
 }
    

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:39:57 GMT -->
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
    <!-- flaticon -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
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
                                    <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index-3.php" class="search-form">
                                        <div class="form-element has-icon">
                                            <input type="text" class="input-field" placeholder="Search your keyword">
                                            <div class="the-icon">
                                                <select class="category select selectpicker">
                                                    <option value="0">Category</option>
                                                    <option value="0">Men's Wear</option>
                                                    <option value="0">Women's Wear</option>
                                                    <option value="0">Kids Wear</option>
                                                    <option value="0">Sports Wear</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
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
                        <li class="nav-item dropdown">
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
                        <li class="nav-item dropdown active">
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
                            <a class="nav-link" href="login.php">Login</a>
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
                        <span class="badge">12</span>
                        </li>
                       <li class="right-menu" id="side-menu"><i class="fas fa-bars"></i> </li>
                   </ul>
                </div>
            </div>
        </nav>
        <!-- navbar area end -->

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">Blog Details</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->
<div class="body-overlay" id="body-overlay"></div>
<div class="search-popup" id="search-popup">
    <form action="http://idealbrothers.thesoftking.com/html/bigenza/bigenja/index.php" class="search-popup-form">
        <div class="form-element">
                <input type="text"  class="input-field" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
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
        <div class="cart-products"><!-- cart product -->
            <h4 class="title">Shopping cart</h4>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/01.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Footwear Dark</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/02.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Milo Hoverboard</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/03.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/04.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="assets/img/recent-review/05.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">Black Tshirt Brock</h4>
                    <div class="price"><span class="pprice">$350.00</span> <del class="dprice">$500.00</del></div>
                    <a href="#" class="remove-cart">Remove</a>
                </div>
            </div>
            <div class="btn-wrapper">
                <a href="checkout.php" class="boxed-btn">Checkout</a>
            </div>
        </div> <!-- //. cart product -->
    </div><!-- //. bottom content -->
</div>
<!-- cart sidebar area end -->
    <!-- blog details page content area start -->
    <section class="blog-details-content">
            <div class="container">
                <div class="row">
                    <?php
                         
                        
                         

                     $select_blog_details ="SELECT *FROM blog WHERE id ='$id'";
                     $result_blog_details = $connect ->query($select_blog_details);
                     $row_blog_details = $result_blog_details ->fetch_assoc(); 
                    
                    
                    
                    ?>
                    <div class="col-lg-8">
                        <div class="single-blog-post"><!-- single blog post -->
                            <div class="meta-time"  style='width:199px; margin-left:-100px; height:110px;'><!-- meta time -->
                                <span class="date"><?php echo $row_blog_details['title_date'] ?></span>
                                <span class="month"></span>
                            </div><!-- //.meta time -->
                            <div class="details-container"><!-- details contaienr -->
                                <div class="meta-tags"><!-- meta tags -->
                                    <ul>
                                        <li><i class="fas fa-comments"></i> 33 Comments</li>
                                        <li><i class="fas fa-share"></i> 50 Shares</li>
                                    </ul>
                                </div>
                                <div class="post-body"><!-- post body -->
                                    <h3 class="title"><?php echo $row_blog_details['title'] ;?></h3>
                                    <p>Author   :  <?php echo $row_blog_details['author']?></p>
                                    <p></p>
                                    <blockquote class="post-blockquote"><!-- post blockquote -->
                                        <div class="icon">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <div class="content">
                                            <p>This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                                            bibendum auctor, nisi elit consequat ipsum, nec.</p>
                                            <span class="post">- Rosalina Pong</span>
                                        </div>
                                    </blockquote><!-- //.post blockquote -->
                                    <p><?php echo $row_blog_details['full_post']?></p>
                                    <div class="post-bottom-content"><!-- post bottom content -->
                                        <div class="top-content"><!-- top content -->
                                            <div class="left-content"><h4 class="title">Releted Tags</h4></div>
                                            <div class="right-content"><h4 class="title">Social Share</h4></div>
                                        </div><!-- //.top content -->
                                        <div class="bottom-content"><!-- bottom content -->
                                            <div class="left-content"><!-- left content -->
                                                <ul>
                                                    <li><a href="#">organic</a></li>
                                                    <li><a href="#">Foods</a></li>
                                                    <li><a href="#">tasty</a></li>
                                                </ul>
                                            </div><!-- //.left content -->
                                            <div class="right-content"><!-- right content -->
                                                <h4 class="title">Social Share</h4>
                                                <ul>
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-typo3"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-staylinked"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                                </ul>
                                            </div><!-- right content -->
                                        </div><!-- //.bottom content -->
                                    </div><!-- //.post bottom content -->
                                </div><!-- //.post body -->
                                <div class="single-post-separator"></div>
                                <div class="comments-area"><!-- comments area satart -->

                                <?php
 
                                    
                                require_once 'admin/functions/connect.php';
                                $select_comment = "SELECT *FROM comments WHERE post_id ='$id'"; 
                                $result_comments = $connect->query($select_comment);
                                $row_comments = $result_comments ->fetch_assoc();
                                foreach($result_comments as $show_comments){

                               
                                
                                
                                ?>
                                    <h3 class="title">Comments</h3>
                                    <div class="single-comment-item margin-bottom-40"><!-- single comment item -->
                                        <div class="thumb">
                                            <img src="assets/img/comments/01.png" alt="commente avatar">
                                        </div>
                                        <div class="content">
                                            <span class="meta-date"><?php echo $show_comments['time']?></span>
                                            <h4 class="author-name"><?php echo $show_comments['email']?></h4>
                                            <p><?php echo $show_comments['comment']?></p>
                                        </div>
                                        
                                        <a class="reply-btn"><i class="fas fa-reply _list"><textarea cols='16' rows='5' class='_area' style='display:none; margin-top:-199px;'></textarea><input class='btn btn-primary snd' value='send' id-attr="<?php echo $id;?>"   style='display:none; width:90px;'></i> Reply</a>
                                        
                                    </div><!-- //. single comment item -->
                                    <?php } ?>                                    
                                </div><!-- //. comments area end -->
                                <div class="single-blog-page-separator"></div>
                                <div class="comments-form-area"><!-- comments form area -->
                                    <h3 class="title">Post Comment</h3>
                                    <div class="comment-form-wrapper"><!-- comment form wrapper -->
                                        <form class="contact_form _commenttt">
                                            <input type='number' class="_co_iid"  value="<?php echo $id;?>">
                                            <div class="form-element margin-bottom-15">
                                                <div class="has-icon textarea">
                                                    <textarea rows="20" cols="8" placeholder="Type your comments...." class="input-field borderd textarea _commntt"></textarea>
                                                    <div class="the-icon">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element margin-bottom-20">
                                                <div class="has-icon ">
                                                   <input type="text" class="input-field borderd comment_name" placeholder="Type your name....">
                                                    <div class="the-icon">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element margin-bottom-20">
                                                <div class="has-icon ">
                                                   <input type="email" class="input-field borderd comment_email" placeholder="Type your email...." require>
                                                    <div class="the-icon">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element ">
                                                <div class="has-icon ">
                                                   <input type="url" class="input-field borderd" placeholder="Type your website...." require>
                                                    <div class="the-icon">
                                                        <i class="fas fa-globe"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-element margin-top-40">
                                                <input type="submit" value="post comment" class="submit-btn _submit" comment-id="<?php echo $row_blog_details['id'] ;?>">
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- comments form area -->
                            </div>
                        </div>
                    </div><!-- //.col-lg-8 -->
                    <div class="col-lg-4">
                        <aside class="sidebar">
                            <div class="widget-area instagram">
                                <!-- instagram widget start -->
                                <div class="widget-title">
                                    <h4>Instagram</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="instagram-feed">
                                        <!-- instagram feed -->
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/01.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/02.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/03.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/04.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/05.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="assets/img/instagram/06.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/07.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/08.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                        <li class="margin-bottom-0">
                                            <a href="#">
                                                <img src="assets/img/instagram/09.jpg" alt="instagram images">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- /.instagram feed -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- instagram widget end -->
                            <div class="sidebar-separator"></div>
                            <div class="widget-area social">
                                <!-- social widget start-->
                                <div class="widget-title">
                                    <h4>Follow Us</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body-->
                                    <ul class="social-links">
                                        <!-- social links-->
                                        <li>
                                            <a href="#" class="twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="pinterest">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="wordpress">
                                                <i class="fab fa-wordpress"></i>
                                            </a>
                                        </li>
                        
                                    </ul>
                                    <!-- ./ social links-->
                                </div>
                                <!-- ./ widget body -->
                            </div>
                            <!-- instragram widget end -->
                            <div class="sidebar-separator"></div>
                            <div class="widget-area category">
                                <!-- category widget start-->
                                <div class="widget-title">
                                    <h4>Categories</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="categories">
                                        <!-- categories -->
                                        <li>
                                            <a href="#">Lifestyle
                                                <span class="count">(05)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Travel
                                                <span class="count">(34)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Fashion
                                                <span class="count">(89)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Music
                                                <span class="count">(96)</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Branding
                                                <span class="count">(78)</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- ./ cateogries -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- category widget end-->
                            <div class="sidebar-separator category"></div>
                            <div class="widget-area latest-post">
                                <!-- latest post widget start -->
                                <div class="widget-title">
                                    <h4>Latest Posts</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/01.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Alonso Kelina Falao Asiano Pero</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 6 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/02.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">It is a long fact that a reader</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 7 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/03.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Many desktop packages and web</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 9 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/04.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Various have evolved over the years</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 10 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                    <div class="single-latest-post">
                                        <!-- single lates post item start-->
                                        <div class="media">
                                            <!-- media  -->
                                            <img class="mr-3" src="assets/img/latest-post/05.jpg" alt="latest blog post image">
                                            <div class="media-body">
                                                <!-- media body-->
                                                <a href="#">
                                                    <h5 class="mt-0">Photo booth anim wolf moon.</h5>
                                                </a>
                                                <span class="meta-time">
                                                    <i class="far fa-clock"></i> 13 Hours ago</span>
                                            </div>
                                            <!-- /.media body -->
                                        </div>
                                        <!-- /.media -->
                                    </div>
                                    <!-- single lates post item start-->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <div class="sidebar-separator latest-post"></div>
                            <!-- latest post widget end -->
                            <div class="widget-area tags">
                                <!-- tag widget  start -->
                                <div class="widget-title">
                                    <h4>Tags</h4>
                                </div>
                                <div class="widget-body">
                                    <!-- widget body -->
                                    <ul class="tags-list">
                                        <!-- tags -->
                                        <li>
                                            <a href="#">Travel</a>
                                        </li>
                                        <li>
                                            <a href="#">Lifestyle</a>
                                        </li>
                                        <li>
                                            <a href="#">Photo </a>
                                        </li>
                                        <li>
                                            <a href="#">Adventures </a>
                                        </li>
                                        <li>
                                            <a href="#">Musician </a>
                                        </li>
                                        <li>
                                            <a href="#">08 </a>
                                        </li>
                                        <li>
                                            <a href="#">Travel </a>
                                        </li>
                                        <li>
                                            <a href="#">Lifestyle </a>
                                        </li>
                                        <li>
                                            <a href="#">Photo </a>
                                        </li>
                                        <li>
                                            <a href="#">Adventures </a>
                                        </li>
                                        <li>
                                            <a href="#">Musician </a>
                                        </li>
                                        <li>
                                            <a href="#">08 </a>
                                        </li>
                                    </ul>
                                    <!-- /.tags -->
                                </div>
                                <!-- /. widget body -->
                            </div>
                            <!-- tag widget  end -->
                        </aside>
                        <!-- sidebar end -->
                    </div><!-- //.col-lg-4 -->
                </div><!-- //.row -->
            </div><!-- //.container -->
        </section>
        <!-- blog details page content area end -->

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

    <!-- back to top start -->
    <div class="back-to-top">
        <i class="fas fa-rocket"></i>
    </div>
    <!-- back to top end -->

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
    <!-- imageloaded -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- countdown -->
    <script src="assets/js/countdown.js"></script>
    <!-- select 2 -->
    <script src="assets/js/select2.min.js"></script>
    <!-- owl carousel2 thumb -->
    <script src="assets/js/owl.carousel2.thumbs.js"></script>
    <!-- main -->
    <script src="assets/js/main.js"></script>
    <script>
       
     
        $('._commenttt').submit(function(){

            var comment = $('._commntt').val();
            var namecomm = $('.comment_name').val();
            var emilcomm = $('.comment_email').val();
            var comm_id  = $('._co_iid').val();

            console.log(comm_id);

            $.post('admin/functions/comments.php',{

                
                x_comment : comment,
                x_name_comment : namecomm,
                x_email_comment : emilcomm,
                x_comment_id    : comm_id
            },function(data){
                
                // consloe.log(data);

            }) 
            
        })  

    </script>
    <script>
     
     $(document).ready(function(){

         $('.reply-btn').click(function(){

         $(this).find('._area').show();
         $(this).find('.snd').show();
             
         })

           
           $('.snd').click(function(){

            var reply = $('._area').val();
            var _id = $(this).attr("id-attr");

    //  console.log(reply);
            $.post('admin/functions/reply.php',{


           z_reply : reply,
           z_id    : _id


            },function(){

                $('.rep').load(location.href + ' ._rep');

                
            })
               
           })

           


         
     })

    </script>
</body>


<!-- Mirrored from idealbrothers.thesoftking.com/html/bigenza/bigenja/blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Oct 2018 09:40:03 GMT -->
</html>