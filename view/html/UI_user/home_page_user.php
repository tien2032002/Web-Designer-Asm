
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
     <!--  style -->
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/navbar_homepage.css">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/UI_user/cart2.css">
    <!-- ======= Scripts ====== -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/jquery/jquery-3.6.4.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
    //decode json
        $userObj = json_decode($userObj);
    ?>
    <div class="container-fluid">
        <div class="row align-items-center" style="background-color: #f2f2f2;  height:80px;">
            <div class="col-lg-3 d-none d-lg-block px-5">
                <a href="index.php?controller=user&action=home_page_user">
                    <img src="view/images/logo.jpg" style="width: 150px;" alt="logo">
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
                        <!-- Cart Popup Start -->
                        <div class="d-flex justify-content-end" onmouseover="showCartPopup()" onmouseout="hideCartPopup()">
                            <a
                                href="#" class="btn border btn-outline-secondary" 
                                style="margin-right: 1%; border-radius: 0;">
                                <div class="d-flex justify-content-end mt-1">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="badge">0</span>
                                </div>
                            </a>
                            <div id="popup"></div>
                            <div id="cart-popup" class="p-3">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex align-items-center">
                                        <img src="https://beptueu.vn/hinhanh/tintuc/top-15-hinh-anh-mon-an-ngon-viet-nam-khien-ban-khong-the-roi-mat-1.jpg"
                                                alt="products">
                                        <div class="inline-block">
                                            <div class="name-item">Bánh Mì Đặc Biệt</div>
                                            <div class="quantity-item">SL: 1</div>
                                        </div>
                                        <div class="price-item">30.000đ</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <img src="https://cdnimg.vietnamplus.vn/uploaded/ngtnnn/2022_07_27/2707banhxeo.jpg"
                                                alt="products">
                                        <div class="inline-block">
                                            <div class="name-item">Bánh Xèo Tôm Thịt</div>
                                            <div class="quantity-item">SL: 1</div>
                                        </div>
                                        <div class="price-item">40.000đ</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <img src="https://lavenderstudio.com.vn/wp-content/uploads/2017/03/chup-san-pham.jpg"
                                                alt="products">
                                        <div class="inline-block">
                                            <div class="name-item">Shushi Cá Hồi</div>
                                            <div class="quantity-item">SL: 1</div>
                                        </div>
                                        <div class="price-item">130.000đ</div>
                                    </li>
                                    <li class="list-group-item d-flex align-items-center">
                                        <img src="https://chuphinhmenu.com/wp-content/uploads/2019/05/chup-hinh-mon-an-menu-nha-hang-quan-2-2019.jpg"
                                                alt="products">
                                        <div class="inline-block">
                                            <div class="name-item">Cơm Chiên Hải Sản</div>
                                            <div class="quantity-item">SL: 1</div>
                                        </div>
                                        <div class="price-item">60.000đ</div>
                                    </li>
                                </ul>
                                <hr>
                                <div class="d-flex justify-content-between">
                                    <div style="font-weight:500;">Tổng cộng: 
                                        <span class="price-item">260.000đ<span>
                                    </div>
                                    <a href="#"><div class="cart-btn">Xem Giỏ Hàng</div></a>
                                </div>
                            </div> 
                        </div>
                        <!-- Cart Popup End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row border-top px-3">
            <div class="col-lg-3 d-none d-lg-block navbar_left">
                <a class="btn d-flex align-items-center justify-content-between" 
                    data-toggle="collapse" href="#navbar-vertical" 
                    style="height: 65px; padding: 0 30px;">
                    <h6 class="m-0">Danh Mục Món Ăn</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar" id="navbar-vertical" style="margin-top: -9px;">
                    <div class="list-group w-100" id="myList">
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab1">Khai vị</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab2">Món Chính</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab3">Tráng Miệng</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab4">Đồ Ngọt</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#tab5">Đồ Uống</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand-lg bg-light navbar-light p-2" style="height: 62px;">
                    <a href="index.php?controller=user&action=home_page_user" class="d-block d-lg-none">
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
                            <a href="index.php?controller=user&action=home_page_user" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="#" class="nav-item nav-link">Thực Đơn</a>
                            <a href="#" class="nav-item nav-link">Đặt Bàn</a>
                            <a href="#" class="nav-item nav-link">Tin Tức</a>
                        </div>
                        <div class="navbar-nav ml-auto nav_main">
                            <div>
                                <a href="index.php?controller=user&action=profile_user" class="nav-item nav-link">
                                    <div style="display: inline-block;">
                                        <div style="display: inline-block; margin-right: 10px;">
                                            <img src="<?php echo $userObj->avatar?>" 
                                                style="width: 30px; height: 30px; border-radius: 50%; 
                                                        object-fit: cover; margin-bottom: 3px;" 
                                                alt="avatar">
                                        </div>
                                        <div style="display: inline-block; font-weight: 500; margin-top: 7px;">
                                            Chào, <?php echo $userObj->name;?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="index.php?controller=user&action=logout" class="nav-item nav-link">
                                    <i class="bi bi-box-arrow-right text-dark"></i>
                                    Đăng xuất
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
                        123
                    </div>
                    <!-- Tab Mon Chinh -->
                    <div class="tab-pane" id="tab2">456</div>
                    <!-- Tab Trang Mieng -->
                    <div class="tab-pane" id="tab3">789</div>
                    <!-- Tab Do Ngot -->
                    <div class="tab-pane" id="tab4">123</div>
                    <!-- Tab Nuoc Uong -->
                    <div class="tab-pane" id="tab5">456</div>
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
    
    <!-- ======= Scripts ====== -->
    <script src="view/script/user_navbar.js"></script>
    <script src="view/script/cart.js"></script>
</body>
</html>