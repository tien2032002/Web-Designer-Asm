<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISFRUTAR - Thực đơn</title>
    <meta name="description" content="Disfrutar-Nơi hội tụ tinh hoa ẩm thực. Thực đơn phong phú, đa dạng. Không gian thoáng đãng, rộng rãi. Phục vụ tận tình, chu đáo. Địa chỉ: 268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh. Đặt bàn ngay!">
    <meta name="keywords" content="Disfrutar, Restaurent, quận 10, thành phố HCM">
    <meta name="author" content="Nelele">
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
     <!--  style -->
     <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/navbar_homepage.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/cart2.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/product.css">
    <link rel="stylesheet prefetch" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
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
        $menuList = json_decode($menuList);
    ?>
    <!-- Topbar Start -->
    <?php include 'component/topbar.php'; ?>
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
                <?php $page = 'home_page';
                include 'component/navbar.php'; ?>
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
                        <div class="starter-content">

                            <!-- stater menu -->
                            <div class="card menu">
                                <!-- menu title -->
                                <h6 class="card-title">Danh sách các món khai vị</h6>
                                <!-- dish list -->
                                <div class="d-flex justify-content-around flex-wrap">
                                    <?php
                                        $starterList = json_decode($menuList->starterList);
                                        foreach ($starterList as $starter){
                                            $starter = json_decode($starter);

                                            echo '
                                                <!-- begin: first starter dish -->
                                                <div class="menu__item card">
                                                    <img src="'.$starter->image.'" alt="" class="item-img">
                                                    <div class="item-description d-flex justify-content-between">
                                                        <div style="width: 50%">
                                                            <!-- dish name -->
                                                            <h6 class="item-name">'.$starter->name.'</h6>
                                                            <!-- price -->
                                                            <h6 class="item-price text-secondary"><small>'.number_format($starter->price,0,".",",").'đ</small></h6>
                                                        </div>
                                                        <!-- begin: star rating -->
                                                        <div class="stars">
                                                            <form action="">
                                                                <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                                <label class="star star-5" for="star-5"></label>
                                                                <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                                <label class="star star-4" for="star-4"></label>
                                                                <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                                <label class="star star-3" for="star-3"></label>
                                                                <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                                <label class="star star-2" for="star-2"></label>
                                                                <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                                <label class="star star-1" for="star-1"></label>
                                                            </form>
                                                        </div>
                                                        <!-- end: star rating -->
                                                    </div>


                                                    <div class="item-comment-count d-flex justify-content-around align-items-center">

                                                        <!-- view detail btn -->
                                                        <a href="dish-detail/'.UrlNormal($starter->name).'/'.$starter->id.'" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
                                                            <i class="bi bi-eye-fill"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <!-- order btn -->
                                                        <a href="/login" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
                                                            <i class="bi bi-cart3"></i>
                                                            Thêm vào giỏ
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- begin: end starter dish -->
                                            ';
                                        }
                                        
                                    ?>
                                    
                                    
                                    
                                </div>

                                <div class="d-flex justify-content-end">
                                    <a href="" style="text-decoration: none; color: #905e65">
                                        <i class="bi bi-eye-fill"></i>
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                            <!-- end starter menu -->

                            <!-- begin: main course menu -->
                            <div class="card menu">
                                <!-- menu title -->
                                <h6 class="card-title">Món chính</h6>
                                <!-- dish list -->
                                <div class="d-flex justify-content-around flex-wrap">
                                    <?php
                                        $mainList = json_decode($menuList->mainList);
                                        foreach ($mainList as $main){
                                            $main = json_decode($main);
                                            echo '
                                                <!-- begin: first starter dish -->
                                                <div class="menu__item card">
                                                    <img src="'.$main->image.'" alt="" class="item-img">
                                                    <div class="item-description d-flex justify-content-between">
                                                        <div style="width: 50%">
                                                            <!-- dish name -->
                                                            <h6 class="item-name">'.$main->name.'</h6>
                                                            <!-- price -->
                                                            <h6 class="item-price text-secondary"><small>'.number_format($starter->price,0,".",",").'đ</small></h6>
                                                        </div>
                                                        <!-- begin: star rating -->
                                                        <div class="stars">
                                                            <form action="">
                                                                <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                                <label class="star star-5" for="star-5"></label>
                                                                <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                                <label class="star star-4" for="star-4"></label>
                                                                <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                                <label class="star star-3" for="star-3"></label>
                                                                <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                                <label class="star star-2" for="star-2"></label>
                                                                <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                                <label class="star star-1" for="star-1"></label>
                                                            </form>
                                                        </div>
                                                        <!-- end: star rating -->                                                        
                                                    </div>

                                                    <div class="item-comment-count d-flex justify-content-around align-items-center">

                                                        <!-- view detail btn -->
                                                        <a href="index.php?controller=guest&action=dish_detail&id='.$main->id.'" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
                                                            <i class="bi bi-eye-fill"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <!-- order btn -->
                                                        <a href="#" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
                                                            <i class="bi bi-cart3"></i>
                                                            Thêm vào giỏ
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- begin: end starter dish -->
                                            ';
                                        }
                                        
                                    ?>
                                     
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="" style="text-decoration: none; color: #905e65">
                                        <i class="bi bi-eye-fill"></i>
                                        Xem thêm
                                    </a>
                                </div>
                            </div>

                            <!-- begin: desert menu -->
                            <div class="card menu">
                                <!-- menu title -->
                                <h6 class="card-title">Món tráng miệng</h6>
                                <!-- dish list -->
                                <div class="d-flex justify-content-around flex-wrap">
                                    <?php
                                        $dessertList = json_decode($menuList->dessertList);
                                        foreach ($dessertList as $dessert){
                                            $dessert = json_decode($dessert);
                                            echo '
                                                <!-- begin: first starter dish -->
                                                <div class="menu__item card">
                                                    <img src="'.$dessert->image.'" alt="" class="item-img">
                                                    <div class="item-description d-flex justify-content-between">
                                                        <div style="width: 50%">
                                                            <!-- dish name -->
                                                            <h6 class="item-name">'.$dessert->name.'</h6>
                                                            <!-- price -->
                                                            <h6 class="item-price text-secondary"><small>'.number_format($starter->price,0,".",",").'đ</small></h6>
                                                        </div>
                                                        <!-- begin: star rating -->
                                                        <div class="stars">
                                                            <form action="">
                                                                <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                                <label class="star star-5" for="star-5"></label>
                                                                <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                                <label class="star star-4" for="star-4"></label>
                                                                <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                                <label class="star star-3" for="star-3"></label>
                                                                <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                                <label class="star star-2" for="star-2"></label>
                                                                <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                                <label class="star star-1" for="star-1"></label>
                                                            </form>
                                                        </div>
                                                        <!-- end: star rating -->                                                            
                                                    </div>

                                                    <div class="item-comment-count d-flex justify-content-around align-items-center">
                                                        <!-- view detail btn -->
                                                        <a href="index.php?controller=guest&action=dish_detail&id='.$dessert->id.'" class="btn btn-override btn-outlineoverride btn-outline-dark btn-sm mt-1 ">
                                                            <i class="bi bi-eye-fill"></i>
                                                            Xem chi tiết
                                                        </a>
                                                        <!-- order btn -->
                                                        <a href="#" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
                                                            <i class="bi bi-cart3"></i>
                                                            Thêm vào giỏ
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- begin: end starter dish -->
                                            ';
                                        }
                                        
                                    ?>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <a href="" style="text-decoration: none; color: #905e65">
                                        <i class="bi bi-eye-fill"></i>
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                            <!-- end: desert menu -->
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

    <!-- ======= Scripts ====== -->
    <!-- <script src="view/script/user_navbar.js"></script> -->
    <script>
        const stars = document.querySelectorAll(".stars i");
        stars.forEach((star,index1) => {
            star.addEventListener("click", () =>{
                stars.forEach((star,index2) => {    
                    index1 >= index2 ? star.classList.add("active"):star.classList.remove("active");
                });
            });
        });
    </script>
</body>
</html>
