<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>Amazoon Fashion Super Store</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!--    <link rel="stylesheet" type="text/css" href="assets/css/style.css">-->


</head>

<body class="theme-color-1">
<!-- header start -->
<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li>Welcome to Our Fashion Store</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <ul class="header-dropdown">
                        <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                        </li>
                        <li class="onhover-dropdown mobile-account"><i class="fa fa-user" aria-hidden="true"></i>
                            My Account
                            <ul class="onhover-show-div">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    <div class="menu-left">
                        <div class="navbar">
                            <a href="javascript:void(0)" onclick="openNav()">
                                <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                                </div>
                            </a>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                <nav>
                                    <div onclick="closeNav()">
                                        <div class="sidebar-back text-start"><i class="fa fa-angle-left pe-2"
                                                                                aria-hidden="true"></i> Back
                                        </div>
                                    </div>
                                    <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                        <li><a href="#">clothing</a>
                                            <ul class="mega-menu clothing-menu">
                                                <li>
                                                    <div class="row m-0">
                                                        <div class="col-xl-4">
                                                            <div class="link-section">
                                                                <h5>women's fashion</h5>
                                                                <ul>
                                                                    <li><a href="#">dresses</a></li>
                                                                    <li><a href="#">skirts</a></li>
                                                                    <li><a href="#">westarn wear</a></li>
                                                                    <li><a href="#">ethic wear</a></li>
                                                                    <li><a href="#">sport wear</a></li>
                                                                </ul>
                                                                <h5>men's fashion</h5>
                                                                <ul>
                                                                    <li><a href="#">sports wear</a></li>
                                                                    <li><a href="#">western wear</a></li>
                                                                    <li><a href="#">ethic wear</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="link-section">
                                                                <h5>accessories</h5>
                                                                <ul>
                                                                    <li><a href="#">watches</a></li>
                                                                    <li><a href="#">hats</a></li>
                                                                    <li><a href="#">necklaces</a></li>
                                                                    <li><a href="#">earrings</a></li>
                                                                    <li><a href="#">wrist wear</a></li>
                                                                    <li><a href="#">ties</a></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <a href="#" class="mega-menu-banner"><img
                                                                    src="../assets/images/mega-menu/fashion.jpg"
                                                                    alt="" class="img-fluid blur-up lazyload"></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a href="#">footwear</a>
                                            <ul>
                                                <li><a href="#">sport shoes</a></li>
                                                <li><a href="#">formal shoes</a></li>
                                                <li><a href="#">casual shoes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="brand-logo">
                            <a href="#"><img src="../assets/images/icon/logo.png"
                                             class="img-fluid blur-up lazyload" alt=""></a>
                        </div>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <nav id="main-nav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                    <li>
                                        <div class="mobile-back text-end">Back<i class="fa fa-angle-right ps-2"
                                                                                 aria-hidden="true"></i></div>
                                    </li>
                                    <li><a href="#">Home</a></li>
                                    <li class="mega" id="hover-cls">
                                        <a href="#">feature
                                            <div class="lable-nav">new</div>
                                        </a>
                                        <ul class="mega-menu full-mega-menu">
                                            <li>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>Woman's Fashion</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a target="_blank"
                                                                               href="#">Dresses
                                                                            1</a></li>
                                                                        <li><a target="_blank"
                                                                               href="#">Skirts
                                                                            2</a></li>
                                                                        <li><a target="_blank"
                                                                               href="#">Sport Wear
                                                                            3</a></li>
                                                                        <li><a target="_blank"
                                                                               href="#">Lorem
                                                                            4</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>email template</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a target="_blank"
                                                                               href="#">welcome</a>
                                                                        </li>
                                                                        <li><a target="_blank"
                                                                               href="#">announcement</a>
                                                                        </li>
                                                                        <li><a target="_blank"
                                                                               href="#">abandonment</a>
                                                                        </li>
                                                                        <li><a target="_blank"
                                                                               href="#">offer</a>
                                                                        </li>
                                                                        <li><a target="_blank"
                                                                               href="#">offer
                                                                            2</a></li>
                                                                        <li><a target="_blank"
                                                                               href="#">review</a>
                                                                        </li>
                                                                        <li><a target="_blank"
                                                                               href="#">featured
                                                                            product</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col mega-box">
                                                            <div class="link-section">
                                                                <div class="menu-title">
                                                                    <h5>email template</h5>
                                                                </div>
                                                                <div class="menu-content">
                                                                    <ul>
                                                                        <li><a target="_blank"
                                                                               href="#">black
                                                                            friday</a></li>
                                                                        <li><a target="_blank"
                                                                               href="#">christmas</a>
                                                                        </li>
                                                                        <li><a target="_blank"
                                                                               href="#">cyber-monday</a>
                                                                        </li>
                                                                        <li><a target="_blank"
                                                                               href="#">flash
                                                                            sale</a></li>
                                                                        <li><a target="_blank"
                                                                               href="#">order
                                                                            success</a></li>
                                                                        <li><a target="_blank"
                                                                               href="#">order
                                                                            success 2</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Brands</a>
                                        <ul>
                                            <li><a href="#">Zara<span
                                                    class="new-tag">new</span></a></li>
                                            <li><a href="#">Next</a></li>
                                            <li><a href="#">H&M</a></li>
                                            <li><a href="#">M&S</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </nav>
                        </div>
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div><img src="../assets/images/icon/search.png" onclick="openSearch()"
                                                  class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                                                                onclick="openSearch()"></i>
                                        </div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div> <span class="closebtn" onclick="closeSearch()"
                                                        title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control"
                                                                               id="exampleInputPassword1"
                                                                               placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i
                                                                            class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-cart">
                                        <div><img src="../assets/images/icon/cart.png"
                                                  class="img-fluid blur-up lazyload" alt=""> <i
                                                class="ti-shopping-cart"></i></div>
                                        <span class="cart_qty_cls">2</span>
                                        <ul class="show-div shopping-cart">
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img alt="" class="me-3"
                                                                     src="../assets/images/fashion/product/1.jpg"></a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h4>item name</h4>
                                                        </a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                                         aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="#"><img alt="" class="me-3"
                                                                     src="../assets/images/fashion/product/2.jpg"></a>
                                                    <div class="media-body">
                                                        <a href="#">
                                                            <h4>item name</h4>
                                                        </a>
                                                        <h4><span>1 x $ 299.00</span></h4>
                                                    </div>
                                                </div>
                                                <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                                                         aria-hidden="true"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total">
                                                    <h5>subtotal : <span>$299.00</span></h5>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="buttons"><a href="#" class="view-cart">view
                                                    cart</a> <a href="#" class="checkout">checkout</a></div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>faq</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">faq</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!--section start-->
    <section class="faq-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="accordion theme-accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0"><button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">How
                                        can I downgrade to an earlier version of Dummy Content?</button></h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>it look like readable English. Many desktop publishing packages and web page
                                        editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                        ipsum' will uncover many web sites still in their infancy. Various versions have
                                        evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                        repeat predefined chunks as necessary, making this the first true generator on
                                        the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                        handful of model sentence structures</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">How can I upgrade from Shopify 2.5 to shopify
                                        3?</button></h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>it look like readable English. Many desktop publishing packages and web page
                                        editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                        ipsum' will uncover many web sites still in their infancy. Various versions have
                                        evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                        repeat predefined chunks as necessary, making this the first true generator on
                                        the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                        handful of model sentence structures</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">Under what license are Regular Labs extensions
                                        released?</button></h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>it look like readable English. Many desktop publishing packages and web page
                                        editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                        ipsum' will uncover many web sites still in their infancy. Various versions have
                                        evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                        repeat predefined chunks as necessary, making this the first true generator on
                                        the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                        handful of model sentence structures</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">What is the Regular Labs Library?</button></h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>it look like readable English. Many desktop publishing packages and web page
                                        editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                        ipsum' will uncover many web sites still in their infancy. Various versions have
                                        evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                        repeat predefined chunks as necessary, making this the first true generator on
                                        the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                        handful of model sentence structures</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">Can I turn on/off some blocks on the page?</button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>it look like readable English. Many desktop publishing packages and web page
                                        editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                        ipsum' will uncover many web sites still in their infancy. Various versions have
                                        evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                        repeat predefined chunks as necessary, making this the first true generator on
                                        the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                        handful of model sentence structures</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0"><button class="btn btn-link collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">What is included in the theme package?</button></h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>it look like readable English. Many desktop publishing packages and web page
                                        editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                        ipsum' will uncover many web sites still in their infancy. Various versions have
                                        evolved over the years,All the Lorem Ipsum generators on the Internet tend to
                                        repeat predefined chunks as necessary, making this the first true generator on
                                        the Internet. It uses a dictionary of over 200 Latin words, combined with a
                                        handful of model sentence structures</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->


<!-- footer -->
<footer class="footer-light">
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row footer-theme partition-f">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h4>about</h4>
                    </div>
                    <div class="footer-contant">
                        <div class="footer-logo"><img src="../assets/images/icon/logo.png" alt=""></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col offset-xl-1">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>my account</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">mens</a></li>
                                <li><a href="#">womens</a></li>
                                <li><a href="#">clothing</a></li>
                                <li><a href="#">accessories</a></li>
                                <li><a href="#">featured</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>why we choose</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">shipping & return</a></li>
                                <li><a href="#">secure shopping</a></li>
                                <li><a href="#">gallary</a></li>
                                <li><a href="#">affiliates</a></li>
                                <li><a href="#">contacts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>store information</h4>
                        </div>
                        <div class="footer-contant">
                            <ul class="contact-list">
                                <li>Amazoon Super Fasion Store</li>
                                <li><i class="fa fa-phone"></i>Call Us: 123-456-7898</li>
                                <li><i class="fa fa-envelope"></i>Email Us: <a href="#">Support@AmazoonSuper.com</a>
                                </li>
                                <li><i class="fa fa-fax"></i>Fax: 123456</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- footer end -->

<!-- tap to top -->
<div class="tap-top top-cls">
    <div>
        <i class="fa fa-angle-double-up"></i>
    </div>
</div>
<!-- tap to top end -->


<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- fly cart ui jquery-->
<script src="../assets/js/jquery-ui.min.js"></script>

<!-- exitintent jquery-->
<script src="../assets/js/jquery.exitintent.js"></script>
<script src="../assets/js/exit.js"></script>

<!-- slick js-->
<script src="../assets/js/slick.js"></script>

<!-- menu js-->
<script src="../assets/js/menu.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap Notification js-->
<script src="../assets/js/bootstrap-notify.min.js"></script>

<!-- Fly cart js-->
<script src="../assets/js/fly-cart.js"></script>

<!-- Theme js-->
<script src="../assets/js/theme-setting.js"></script>
<script src="../assets/js/script.js"></script>

<script>
    function openSearch() {
        document.getElementById("search-overlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("search-overlay").style.display = "none";
    }
</script>

</body>

</html>