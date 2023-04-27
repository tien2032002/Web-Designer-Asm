
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Disfrutar-Nơi hội tụ tinh hoa ẩm thực. Thực đơn phong phú, đa dạng. Không gian thoáng đãng, rộng rãi. Phục vụ tận tình, chu đáo. Địa chỉ: 268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh. Đặt bàn ngay!">
    <meta name="keywords" content="Disfrutar, Restaurent, quận 10, thành phố HCM">
    <meta name="author" content="Nelele">
    <title>DISFRUTAR - Thực đơn</title>
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
     <!--  style -->
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/style_navbar_homepage.css">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view\css\UI_user\product.css">
    
    <link rel="stylesheet" href="view/css/UI_user/sidebar.css">
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
    //decode json
        $userObj = json_decode($userObj);
        $menuList = json_decode($menuList);
    ?>
    <?php include 'component/topbar.php'; ?>
    
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
                            <a href="/home_page_user" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="/menu" class="nav-item nav-link">Thực Đơn</a>
                            <a href="/news" class="nav-item nav-link">Tin Tức</a>
                            <a href="/contact_page" class="nav-item nav-link">Liên hệ</a>
                        </div>
                        <div class="navbar-nav ml-auto nav_main">
                            <div>
                                <a href="/profile_user" class="nav-item nav-link">
                                    <div style="display: inline-block;">
                                        <div style="display: inline-block; margin-right: 10px;">
                                            <img src="<?php echo $userObj->image?>.jpg" 
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
                                <a href="/logout" class="nav-item nav-link">
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
                                                <img src="'.$starter->image.'" alt="" class="item-img" loading="lazy">
                                                <div class="item-description d-flex justify-content-between">
                                                    <div style="width: 50%">
                                                        <!-- dish name -->
                                                        <h6 class="item-name">'.$starter->name.'</h6>
                                                        <!-- price -->
                                                        <h6 class="item-price text-secondary"><small>'.number_format($starter->price,0,".",",").'đ</small></h6>
                                                    </div>
                                                    <h3 class=""> '.number_format($starter->rating, 1,".",",").' <i class=" pink-color bi bi-star-fill"></i></h3>
                                                </div>


                                                <div class="item-comment-count d-flex justify-content-around align-items-center">

                                                    <!-- view detail btn -->
                                                    <a href="dish-detail/'.UrlNormal($starter->name).'/'.$starter->id.'" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
                                                        <i class="bi bi-eye-fill"></i>
                                                        Xem chi tiết
                                                    </a>
                                                    <!-- order btn -->
                                                    <a onclick="loadXMLDoc(\'addToCart?productID='.$starter->id.'\', \'cart_drop\');" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
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
                                    <a href="" style="text-decoration: none;">
                                        <i class="bi bi-eye-fill"></i>
                                        View more
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
                                                <img src="'.$main->image.'" alt="" class="item-img" loading="lazy">
                                                <div class="item-description d-flex justify-content-between">
                                                    <div style="width: 50%">
                                                        <!-- dish name -->
                                                        <h6 class="item-name">'.$main->name.'</h6>
                                                        <!-- price -->
                                                        <h6 class="item-price text-secondary"><small>'.number_format($main->price,0,".",",").'đ</small></h6>
                                                    </div>
                                                    <h3 class=""> '.number_format($main->rating, 1,".",",").' <i class=" pink-color bi bi-star-fill"></i></h3>
                                                </div>


                                                <div class="item-comment-count d-flex justify-content-around align-items-center">

                                                    <!-- view detail btn -->
                                                    <a href="dish-detail/'.UrlNormal($main->name).'/'.$main->id.'" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
                                                        <i class="bi bi-eye-fill"></i>
                                                        Xem chi tiết
                                                    </a>
                                                    <!-- order btn -->
                                                    <a onclick="loadXMLDoc(\'addToCart?productID='.$main->id.'\', \'cart_drop\');" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
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
                                                <img src="'.$dessert->image.'" alt="" class="item-img" loading="lazy">
                                                <div class="item-description d-flex justify-content-between">
                                                    <div style="width: 50%">
                                                        <!-- dish name -->
                                                        <h6 class="item-name">'.$dessert->name.'</h6>
                                                        <!-- price -->
                                                        <h6 class="item-price text-secondary"><small>'.number_format($dessert->price,0,".",",").'đ</small></h6>
                                                    </div>
                                                    <h3 class=""> '.number_format($dessert->rating, 1,".",",").' <i class=" pink-color bi bi-star-fill"></i></h3>
                                                </div>


                                                <div class="item-comment-count d-flex justify-content-around align-items-center">

                                                    <!-- view detail btn -->
                                                    <a href="dish-detail/'.UrlNormal($dessert->name).'/'.$dessert->id.'" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
                                                        <i class="bi bi-eye-fill"></i>
                                                        Xem chi tiết
                                                    </a>
                                                    <!-- order btn -->
                                                    <a onclick="loadXMLDoc(\'addToCart?productID='.$dessert->id.'\', \'cart_drop\');" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
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
                                    <a href="" style="text-decoration: none;">
                                        <i class="bi bi-eye-fill"></i>
                                        View more
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
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="container-fluid" style="background-color: #dae0e5;" id="footer">
        
        </div>
        <script>
            $.ajax({
                    // The link we are accessing.
                    url: "/footer",
                        
                    // The type of request.
                    type: "get",
                        
                    // The type of data that is getting returned.
                    dataType: "html",
    
                    success: function( strData ){
                        document.getElementById('footer').innerHTML = strData;
                        console.log(document.getElementById(id).innerHTML)
                    }
                });
        </script>
        <!-- end:footer --> 
    
    <!-- ======= Scripts ====== -->
    <script src="view/script/user_navbar.js"></script>
    <script src="view/script/cart.js"></script>
</body>
</html>