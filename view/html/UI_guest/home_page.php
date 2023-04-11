<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
     <!--  style -->
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/style_navbar_homepage.css">
    <!-- ======= Scripts ====== -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/jquery/jquery-3.6.4.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script>
        function loadXMLDoc(link, id)
        {
            $.ajax({
                // The link we are accessing.
                url: link,
                    
                // The type of request.
                type: "get",
                    
                // The type of data that is getting returned.
                dataType: "html",

                success: function( strData ){
                    document.getElementById(id).innerHTML = strData;
                    // console.log("do")
                    const items = document.querySelectorAll(".carousel-menu");

                    items.forEach((el) => {
                        const minPerSlide = 4
                        let next = el.nextElementSibling
                        for (var i=1; i<minPerSlide; i++) {
                            if (!next) {
                                // wrap carousel by using first child
                                next = items[0]
                                console.log([el])
                            }
                            let cloneChild = next.cloneNode(true)
                            el.appendChild(cloneChild.children[0])
                            next = next.nextElementSibling
                        }
                    })
                }
            });
        }
    </script>
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 pd_mobile" style="background-color: #f2f2f2;">
            <div class="col-lg-3 d-none d-lg-block px-5">
                <a href="index.php?controller=guest&action=home_page">
                    <img src="view/images/logo.jpg" style="width: 70%;" alt="logo">
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-tablet-7 col-mobile-5">
                      <form class="form-inline" style="margin-right: 1%;">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for products" style="border-radius: 0;">
                          <div class="input-group-append">
                            <button class="btn border btn-outline-secondary" type="button">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-tablet-3 col-mobile-5 navbar_ic d-flex justify-content-end">
                      <a href="#" class="btn border btn-outline-secondary" style="margin-right: 1%; border-radius: 0;">
                        <i class="fas fa-heart"></i>
                        <span class="badge">0</span>
                      </a>
                      <a href="#" class="btn border btn-outline-secondary" style="margin-right: 1%; border-radius: 0;">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge">0</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <div class="container-fluid">
        <div class="row border-top px-3">
            <!-- Sidebar Large Start -->
            <div class="col-lg-3 d-none d-lg-block navbar_left">
                <a class="btn d-flex align-items-center justify-content-between" 
                    data-toggle="collapse" href="#navbar-vertical" 
                    style="height: 60px; padding: 0 30px;">
                    <h6 class="m-0">Danh Mục Món Ăn</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar" id="navbar-vertical" style="margin-top: -9px;">
                    <div class="list-group w-100">
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab1">Khai vị</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab2">Món Chính</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab3">Tráng Miệng</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab4">Đồ Ngọt</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab5">Đồ Uống</a>
                    </div>
                </nav>
            </div>
            <!-- Sidebar Large End -->
            <div class="col-lg-9">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand-lg bg-light navbar-light p-2">
                    <a href="index.php?controller=guest&action=home_page" class="d-block d-lg-none">
                        <img src="view/images/logo.jpg" style="width: 100px;" alt="logo">
                    </a>
                    <button type="button" 
                            class="navbar-toggler" 
                            data-toggle="collapse" 
                            data-target="#navbarCollapse"
                            style="border-radius: 0;">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="index.php?controller=guest&action=home_page" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="index.php?controller=guest&action=menu" class="nav-item nav-link" >Thực Đơn</a>
                            <a href="#" class="nav-item nav-link">Đặt Bàn</a>
                            <a href="#" class="nav-item nav-link">Tin Tức</a>
                            <a href="index.php?controller=manager&action=login" class="nav-item nav-link">Quản Trị Viên</a>
                        </div>
                        <div class="navbar-nav ml-auto nav_main">
                            <div>
                                <a href="index.php?controller=user&action=login" class="nav-item nav-link">
                                    <i class="bi bi-person text-dark"></i>
                                    Đăng Nhập
                                </a>
                            </div>
                            <div>
                                <a href="index.php?controller=user&action=signup" class="nav-item nav-link">
                                    <i class="bi bi-person-plus text-dark"></i>
                                    Đăng Ký
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->

                <!-- Sidebar None Large Start -->
                <div class="d-block d-lg-none navbar_left">
                    <a class="btn d-flex align-items-center justify-content-between" 
                        data-toggle="collapse" href="#navbar-vertical1" 
                        style="height: 60px; padding: 0 30px;">
                        <h6 class="m-0">Danh Mục Món Ăn</h6>
                        <i class="fa fa-angle-down text-dark"></i>
                    </a>
                    <nav class="collapse show navbar" id="navbar-vertical1" style="margin-top: -9px;">
                        <div class="list-group w-100">
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab1">Khai vị</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab2">Món Chính</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab3">Tráng Miệng</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab4">Đồ Ngọt</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab5">Đồ Uống</a>
                        </div>
                    </nav>
                </div>
                <!-- Sidebar None Large Start -->
                <div class="tab-content">
                    <!-- Tab HomePage -->
                    <div class="tab-pane active">
                        <!-- Carousel Start -->
                        <div id="header-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="height: 380px;">
                                    <img class="img-fluid" src="view/images/carousel-1.jpg" alt="carousel-1">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="p-3" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">
                                            <h4 class="text-uppercase text-light font-weight-large mb-3">10% off when booking</h4>
                                            <h3 class="display-2 font-weight-bold mb-4 text-light">Diverse Menu</h3>
                                            <a href="#" class="btn btn-light py-2 px-3">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" style="height: 380px;">
                                    <img class="img-fluid" src="view/images/carousel-2.jpg" alt="carousel-2">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="p-3 text-light" style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">
                                            <h4 class="text-uppercase font-weight-large mb-3 text-light">10% off when booking</h4>
                                            <h3 class="display-2 font-weight-bold mb-4">Resonable Price</h3>
                                            <a href="#" class="btn btn-light py-2 px-3">Booking Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- Carousel End-->
                    </div>
                    <!-- Tab Khai Vi -->
                    <div class="tab-pane" id="tab1">
                        <script>
                            loadXMLDoc('index.php?controller=guest&action=dish_list&type=starter', 'tab1');
                        </script>
                    </div>
                    <!-- Tab Mon Chinh -->
                    <div class="tab-pane" id="tab2">
                    <script>
                            loadXMLDoc('index.php?controller=guest&action=dish_list&type=main', 'tab2');
                    </script>
                    </div>
                    <!-- Tab Trang Mieng -->
                    <div class="tab-pane" id="tab3">
                        <script>
                            loadXMLDoc('index.php?controller=guest&action=dish_list&type=dessert', 'tab3');
                        </script>
                    </div>
                    <!-- Tab Do Ngot -->
                    <div class="tab-pane" id="tab4">
                        <script>
                            loadXMLDoc('index.php?controller=guest&action=dish_list&type=sweet', 'tab4');
                        </script>
                    </div>
                    <!-- Tab Nuoc Uong -->
                    <div class="tab-pane" id="tab5">
                        <script>
                            loadXMLDoc('index.php?controller=guest&action=dish_list&type=drink', 'tab5');
                        </script>
                    </div>

                    <!-- Tab menu -->
                    <div class="tab-pane" id="tab6">
                        <script>
                            loadXMLDoc('index.php?controller=guest&action=menu', 'tab6');
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Men's dresses</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Women's dresses</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Baby's dresses</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="img/cat-4.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Accerssories</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="img/cat-5.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Bags</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                    <p class="text-right">15 Products</p>
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="img/cat-6.jpg" alt="">
                    </a>
                    <h5 class="font-weight-semi-bold m-0">Shoes</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories End -->

    <!-- begin:footer -->
    <div class="container-fluid" style="background-color: #dae0e5;">
        <div class="row p-5">
            <!-- begin: restaurant summary -->
            <div class="col">
                <div class="h2" >
                    <img class="border border-light p-2" src="view\images\utensils-solid.svg" style="width: 50px" alt="restaurantIcon">
                    Restaurant
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing
                    elit. Aenean commodo ligula eget dolor. Aenean mass
                    a. Cum sociis natoque penatibus et magnis dis partu
                    rient montes, nascetur ridiculus mus.
                </p>
                <ul class = "list-unstyled">
                    <li class="d-flex ">
                        <i style="color: #b38b91" class="bi bi-geo-alt me-2"></i>
                        <p>6 Đ. Ngô Quyền, Vĩnh Ninh</p>
                    </li>
                    <li class="d-flex">
                        <i style="color: #b38b91" class="bi bi-envelope-fill me-2"></i>
                        <p>Wanmin@restaurant.com</p>
                    </li>
                    <li class="d-flex">
                        <i style="color: #b38b91" class="bi bi-telephone-fill me-2"></i>
                        <p>+012 345 6789</p>
                    </li>
                </ul>
            </div>
            <!-- end: restaurant summary -->

            <!-- begin: quick link -->
            <div class="col ms-4 mt-2">
                <h5>Quick links</h5>

                <!-- begin: list of links -->
                <ul class = "list-unstyled">
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="">
                            <i class="bi bi-caret-right-fill"></i>
                            Home
                        </a>
                    </li>
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="">
                            <i class="bi bi-caret-right-fill"></i>    
                            Menu
                        </a>
                    </li>
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="">
                            <i class="bi bi-caret-right-fill"></i>
                            Cart
                        </a>
                    </li>
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="">
                            <i class="bi bi-caret-right-fill"></i>
                            Checkout
                        </a>
                    </li>
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="">
                            <i class="bi bi-caret-right-fill"></i>    
                            Contact Us
                        </a>
                    </li>
                </ul>
                <!-- begin: end of links -->
            </div>
            <!-- end: quick link -->

            <!-- begin: quick link -->
            <div class="col mt-2">
                <h5>Quick links</h5>

                <!-- begin: list of links -->
                <ul class = "list-unstyled">
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="">
                            <i class="bi bi-caret-right-fill"></i>
                            Home
                        </a>
                    </li>
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="">
                            <i class="bi bi-caret-right-fill"></i>    
                            Menu
                        </a>
                    </li>
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="">
                            <i class="bi bi-caret-right-fill"></i>
                            Cart
                        </a>
                    </li>
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="">
                            <i class="bi bi-caret-right-fill"></i>
                            Checkout
                        </a>
                    </li>
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="">
                            <i class="bi bi-caret-right-fill"></i>    
                            Contact Us
                        </a>
                    </li>
                </ul>
                <!-- begin: end of links -->
            </div>
            <!-- end: quick link -->

            <!-- begin: form -->
            <div class="col mt-2">
                <h5>Newsletter</h5>
                <form action="">
                    <input class="mt-3 border-0 p-3 w-100" type="text" placeholder="Your Name">
                    <input class="mt-3 border-0 p-3 w-100" type="text" placeholder="Your Email">
                    <input class="mt-3 border-0 p-3 w-100" type="submit" style="background-color: #b38b91" value="Subcribe Now">
                </form>
            </div>
            <!-- end: form  -->
        </div>
    </div>
    <!-- end:footer -->
    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button">
        <i class="fas fa-chevron-up">
        </i>
    </a>
    <!-- ======= Scripts ====== -->
    <script>
        $(document).ready(function(){
            $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('#back-to-top').fadeIn();
                    } else {
                        $('#back-to-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-to-top').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 400);
                    return false;
                });
        });
    </script>
    <!-- <script src="view/script/user_navbar.js"></script> -->

</body>
</html>
