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
    <?php
        $productObj = json_decode($productObj);
        $relatedProduct = json_decode($relatedProduct);
    ?>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 pd_mobile" style="background-color: #f2f2f2;">
            <div class="col-lg-3 d-none d-lg-block px-5">
                <a href="/home_page">
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
                    <a href="/home_page" class="d-block d-lg-none">
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
                            <a href="/home_page" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="#" class="nav-item nav-link" >Thực Đơn</a>
                            <a href="#" class="nav-item nav-link">Đặt Bàn</a>
                            <a href="#" class="nav-item nav-link">Tin Tức</a>
                            <a href="/login" class="nav-item nav-link">Quản Trị Viên</a>
                        </div>
                        <div class="navbar-nav ml-auto nav_main">
                            <div>
                                <a href="/login" class="nav-item nav-link">
                                    <i class="bi bi-person text-dark"></i>
                                    Đăng Nhập
                                </a>
                            </div>
                            <div>
                                <a href="/signup" class="nav-item nav-link">
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
                        <!-- starter content -->
                        <link rel="stylesheet" type="text/css" href="view\css\UI_user\starter.css">
                        <link rel="stylesheet" type="text/css" href="view\css\UI_user\detail.css">
                        <div class="starter-content">
                            <!-- starter breadcrum -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Thực đơn</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                    <?php
                                        switch ($productObj->type) {
                                            case 'starter': 
                                                echo 'Khai vị';
                                                break;
                                            case 'main':
                                                echo 'Món chính';
                                                break;
                                            case 'dessert':
                                                echo 'Tráng miệng';
                                                break;
                                            default: 
                                                echo 'Undefine';
                                                break;
                                        }
                                    ?>
                                    </li>
                                </ol>
                            </nav>


                            <!-- begin: dish detail -->
                            <div class="card menu">
                                <div class="row">
                                    <div class="col-md-auto">
                                        <img src="<?php echo $productObj->image ?>" alt="" style="width: 500px; height: 300px;">
                                    </div>
                                    <div class="col">
                                        <!-- dish name -->
                                        <h2 class="card-title mb-0">
                                            <?php
                                                echo $productObj->name;
                                            ?>
                                        </h2>
                                        <div class="subheader">
                                            <?php
                                                switch ($productObj->type) {
                                                    case 'starter': 
                                                        echo 'Món khai vị';
                                                        break;
                                                    case 'main':
                                                        echo 'Món chính';
                                                        break;
                                                    case 'dessert':
                                                        echo 'Món tráng miệng';
                                                        break;
                                                    default: 
                                                        echo 'Undefine';
                                                        break;
                                                }
                                            ?>
                                        </div>
                                        <h2 class="mb-0"> <?php echo $productObj->price ?> VND</h2>

                                        <!-- dish description -->
                                        <p>
                                            <?php echo $productObj->description ?>
                                        </p>
                                        <!-- form -->
                                        <form action="">
                                            <input type="number" class="btn btn-outline-dark">
                                            <input type="submit" class="btn btn-outline-dark" value="Add to cart">
                                        </form>

                                        <!-- comment, link, share button -->
                                        <div class="d-flex mt-3 justify-content-between" >
                                            <div class="btn btn-light" style="width: 30%">
                                                <i class="bi bi-hand-thumbs-up"></i>
                                                Thích
                                            </div>
                                            <div class="btn btn-light" style="width: 33%">
                                                <i class="bi bi-chat"></i>
                                                Bình luận
                                            </div>
                                            <div class="btn btn-light" style="width: 30%">
                                                <i class="bi bi-share"></i>
                                                Chia sẻ
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    
                                </div>
                            </div>
                            <!-- end: dish detail -->

                            <!-- begin: comment section -->
                            <div class="card menu">
                                <div class="d-flex text-decoration-none">
                                    <div class="comment-quantity"><bold>25</bold></div>
                                    <div class="comment-quantity"><small> bình luận</small></div>

                                    <div class="comment-quantity ms-5"><bold>85</bold></div>
                                    <div class="comment-quantity"><small> lượt thích</small></div>
                                </div>
                                <hr style="height:1px;border-width:0;color:gray;background-color:gray">
                                <!--begin: user comment -->
                                <div class="item-review">
                                    
                                    <div class="d-flex">
                                        <img src="view\images\user\user2.jpg" alt="" class="user-img">
                                        <div class="ms-3">
                                            <div class="user-name"><bold>Ayhed<bold/> </div>
                                            <div>
                                                <bold>via Web<bold/>
                                                <i class="bi bi-globe-americas"></i>
                                                4/7/2023 4:03PM
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="user-comment">
                                        Nước chấm đậm đà, cuốn sạch sẽ, vừa lạ miệng vừa ngon
                                    </div> 
                                    <hr style="height:1px;border-width:0;color:gray;background-color:gray">        
                                </div>
                                <!--end: user comment -->

                                <!--begin: user comment -->
                                <div class="item-review">
                                    
                                    <div class="d-flex">
                                        <img src="view\images\user\user3.jpg" alt="" class="user-img">
                                        <div class="ms-3">
                                            <div class="user-name"><bold>Ayaya<bold/> </div>
                                            <div>
                                                <bold>via Web<bold/>
                                                <i class="bi bi-globe-americas"></i>
                                                11/7/2022 4:03PM
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="user-comment">
                                        Giá cả hợp lí, hương vị hài hòa. Rất hài lòng
                                    </div> 
                                    <hr style="height:1px;border-width:0;color:gray;background-color:gray">        
                                </div>
                                <!--end: user comment -->

                                <a href="" style="text-decoration:none;">Xem thêm bình luận</a>
                            </div>
                            <!-- end: comment section -->

                            <!-- begin: recommend dish -->
                            <div class="card menu">
                                <h2 class="mb-0">CÓ THỂ BẠN SẼ THÍCH</h2>
                                <!-- begin: recomend dish list -->
                                
                                <div class="d-flex justify-content-around flex-wrap">
                                    
                                    <?php
                                        foreach($relatedProduct as $product) {
                                            $product = json_decode($product);
                                            echo '
                                            <!-- begin: first dish -->
                                            <div class="menu__item card">
                                                <img src="'.$product->image.'" alt="" class="item-img">
                                                <div class="item-description">
                                                    <!-- dish name -->
                                                    <h6 class="item-name">'.$product->name.'</h6>
                                                    <!-- price -->
                                                    <h6 class="item-price text-secondary"><small>'.$product->price.'đ</small></h6>
                                                </div>
        
                                                <div class="item-comment-count d-flex justify-content-around align-items-center">
        
                                                    <a href="#" class="d-flex text-decoration-none">
                                                        <i class="bi bi-chat"></i>
                                                        <div class="comment-quantity"><small>25</small></div>
                                                    </a>
                                                    <!-- view detail btn -->
                                                    <a href="dish-detail/'.UrlNormal($product->name).'/'.$product->id.'" class="btn btn-outline-dark btn-sm mt-1 ">
                                                        <i class="bi bi-eye-fill"></i>
                                                        View detail
                                                    </a>
                                                    <!-- order btn -->
                                                    <a href="#" class="btn btn-outline-dark btn-sm mt-1 ">
                                                        <i class="bi bi-cart3"></i>
                                                        Order Now
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end: first dish -->
                                            ';
                                        }
                                    ?>
                                    
                                </div>
                                <!-- end: recomend dish list -->
                            </div>
                            <!-- end: recommend dish -->
                            
                            <script src="view/script/starter.js"></script>

                        </div>
                        <!-- end starter content -->
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
    <!-- <script src="view/script/user_navbar.js"></script> -->

</body>
</html>
