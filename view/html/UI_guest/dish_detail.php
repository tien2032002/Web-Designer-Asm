<?php
    $productObj = json_decode($productObj);
    $star = json_decode($star);
    $relatedProduct = json_decode($relatedProduct);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $productObj->name ?></title>
    <meta name="description" content="<?php echo $productObj->description ?>">
    <meta name="keywords" content="Disfrutar, Restaurent, quận 10, thành phố HCM, <?php echo $productObj->name ?>">
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
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/sidebar.css">
    <link rel="stylesheet prefetch" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <!-- ======= Scripts ====== -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/jquery/jquery-3.6.4.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script>
        var cmtPage = 1;
        var endCmt = 0;
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

        function loadMore(link, id)
        {
            console.log(link)
            $.ajax({
                // The link we are accessing.
                url: link,
                    
                // The type of request.
                type: "get",
                    
                // The type of data that is getting returned.
                dataType: "html",

                success: function( strData ){
                    console.log(strData)
                    if (strData.includes("div")) cmtPage +=1
                    else if (endCmt == 0){
                        strData = 'Không còn bình luận nào khác!'
                        endCmt = 1;
                    }
                    document.getElementById(id).innerHTML += strData;
                    
                }
            });
        }
    </script>
</head>
<body>
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
                        <link rel="stylesheet" type="text/css" href="view\css\UI_user\detail.css">
                        <div class="starter-content">
                            <!-- starter breadcrum -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a style="all: unset;" href="#">Thực đơn</a></li>
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
                                        <h2 class="mb-0"> <?php echo number_format($productObj->price,0,".",",") ?> VND</h2>

                                        <!-- dish description -->
                                        <p>
                                            <?php echo $productObj->description ?>
                                        </p>
                                        <!-- form -->
                                        <form action="">
                                            <input type="number" class="btn btn-outline-dark btn-override">
                                            <input type="submit" class="btn btn-outline-dark btn-override" value="Thêm vào giỏ">
                                        </form>

                                        
                                        
                                    </div>
                                    <div class="w-100"></div>
                                    
                                </div>
                            </div>
                            <!-- end: dish detail -->

                            <!-- begin: star rating -->
                            <div class="d-flex flex-row justify-content-between">
                                <!-- begin: star rating form-->
                                <div class=" card menu stars" style="width: 39%">
                                    <!-- <form action="/login">
                                        <input class="star star-5" id="star-5" type="radio" name="star"/>
                                        <label class="star star-5" for="star-5"></label>
                                        <input class="star star-4" id="star-4" type="radio" name="star"/>
                                        <label class="star star-4" for="star-4"></label>
                                        <input class="star star-3" id="star-3" type="radio" name="star"/>
                                        <label class="star star-3" for="star-3"></label>
                                        <input class="star star-2" id="star-2" type="radio" name="star"/>
                                        <label class="star star-2" for="star-2"></label>
                                        <input class="star star-1" id="star-1" type="radio" name="star"/>
                                        <label class="star star-1" for="star-1"></label><br>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Để lại đánh giá của bạn"></textarea>
                                        <input type="submit" class="btn btn-outline-dark btn-override mt-2">
                                    </form> -->
                                    <p>Bạn phải đăng nhập mới sử dụng được tính năng đánh giá sản phẩm!</p>
                                    <hr>
                                    <a class='d-flex justify-content-center' href='login' style="all: unset"><button class='btn btn-outline-dark btn-override'>Đăng nhập ngay</button></a>
                                </div>
                                <!-- end: star rating form -->

                                <div class="card menu d-flex flex-row justify-content-between" style="width: 60%">
                                    <!-- begin: -->
                                    <div style="width: 26%" class="ps-2" >
                                        <h3 class="pink-color"><?php echo number_format($productObj->rating,1,".",",")?> <i class="bi bi-star-fill"></i></h3>
                                        <p class="mb-0"><?php echo number_format($star->total,0,".",",")?></p>
                                        <p>đã đánh giá</p>
                                    </div>
                                    <!-- end: -->
                                    
                                    <!-- begin: star rating progress -->
                                    <div style="width: 74%" >
                                        <h6>Điểm xếp hạng</h6>
                                        <div class="row">
                                            <div class="col-1">5</div>
                                            <div class="progress col-10 p-0" style="height: 24px;">
                                                <div class="progress-bar bg-pink-color" role="progressbar" style="width: <?php if($star->total!=0) echo $star->five/$star->total*100; else echo 0;?>%" aria-valuenow="<?php if($star->total!=0) echo $star->five/$star->total*100; else echo 0;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1">4</div>
                                            <div class="progress col-10 p-0" style="height: 24px;">
                                                <div class="progress-bar bg-pink-color" role="progressbar" style="width: <?php if($star->total!=0) echo $star->four/$star->total*100; else echo 0;?>%" aria-valuenow="<?php if($star->total!=0) echo $star->four/$star->total*100; else echo 0;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1">3</div>
                                            <div class="progress col-10 p-0" style="height: 24px;">
                                                <div class="progress-bar bg-pink-color" role="progressbar" style="width: <?php if($star->total!=0) echo $star->three/$star->total*100; else echo 0;?>%" aria-valuenow="<?php if($star->total!=0) echo $star->three/$star->total*100; else echo 0;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1">2</div>
                                            <div class="progress col-10 p-0" style="height: 24px;">
                                                <div class="progress-bar bg-pink-color" role="progressbar" style="width: <?php if($star->total!=0) echo $star->two/$star->total*100; else echo 0;?>%" aria-valuenow="<?php if($star->total!=0) echo $star->two/$star->total*100; else echo 0;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-1">1</div>
                                            <div class="progress col-10 p-0" style="height: 24px;">
                                                <div class="progress-bar bg-pink-color" role="progressbar" style="width: <?php if($star->total!=0) echo $star->one/$star->total*100; else echo 0;?>%" aria-valuenow="<?php if($star->total!=0) echo $star->one/$star->total*100; else echo 0;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: star rating progress -->
                                </div>
                            </div>
                            <!-- end: star rating -->

                            <!-- begin: comment section -->
                            <div class="card menu" id='comment'>
                                <script>
                                    console.log(cmtPage)
                                    loadMore('/comment?id=<?php echo $productObj->id ?>' + '&page=' + cmtPage.toString(), 'comment');
                                </script>
                                
                            </div>
                            <button class="btn btn-outline-dark btn-override mt-2" onclick="loadMore('/comment?id=<?php echo $productObj->id ?>' + '&page=' + cmtPage.toString(), 'comment')" style="text-decoration:none;">Xem thêm bình luận</button>
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
                                            <!-- begin: first starter dish -->
                                            <div class="menu__item card">
                                                <img src="'.$product->image.'" alt="" class="item-img" loading="lazy">
                                                <div class="item-description d-flex justify-content-between">
                                                    <div style="width: 50%">
                                                        <!-- dish name -->
                                                        <h6 class="item-name">'.$product->name.'</h6>
                                                        <!-- price -->
                                                        <h6 class="item-price text-secondary"><small>'.number_format($product->price,0,".",",").'đ</small></h6>
                                                    </div>
                                                    <h3 class=""> '.number_format($product->rating, 1,".",",").' <i class=" pink-color bi bi-star-fill"></i></h3>
                                                </div>


                                                <div class="item-comment-count d-flex justify-content-around align-items-center">

                                                    <!-- view detail btn -->
                                                    <a href="dish-detail/'.UrlNormal($product->name).'/'.$product->id.'" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
                                                        <i class="bi bi-eye-fill"></i>
                                                        Xem chi tiết
                                                    </a>
                                                    <!-- order btn -->
                                                    <a href=\'login\'" class="btn btn-override btn-outline-dark btn-sm mt-1 ">
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

    <br>
    <div class="container-fluid" style="background-color: #dae0e5;" id="djtmemay">
        
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
                        document.getElementById('djtmemay').innerHTML = strData;
                        console.log(document.getElementById(id).innerHTML)
                    }
                });
        </script>
        <!-- end:footer --> 

    <!-- ======= Scripts ====== -->
    <script src="view/script/sidebar.js"></script>
    <script src="view/script/cart.js"></script>

</body>
</html>