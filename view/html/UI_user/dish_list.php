<!-- starter content -->
<link rel="stylesheet" type="text/css" href="view\css\UI_user\starter.css">
<div class="starter-content">
    <!-- starter breadcrum -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Thực đơn</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php
                    switch ($type) {
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

    <!-- popular starter carousel-->   
    <div class="card w-80 popular-starter">
        <h6 class="card-title">Món ăn được ưa thích</h6>
        <div id="recipeCarousel<?php echo $type; ?>" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div id='carosel-1' class="carousel-item active carousel-menu">
                    <div class="col-md-3">
                        <div class="card ">
                            <div class="card-img">
                                <img src="view\images\starter\starter-1.jpg" class="img-fluid rounded h-100 object-fit-cover">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex flex-column justify-content-end ">
                                <h6>Gỏi cuốn</h6>
                                <a href="#" class="btn btn-light btn-sm">Order Now</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-menu">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="view\images\starter\starter-2.jpg" class="img-fluid rounded">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex  flex-column justify-content-end">
                                <h6>Gỏi cá hồi</h6>
                                <a href="#" class="btn btn-light btn-sm ">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-menu">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="view\images\starter\starter-3.jpg" class="img-fluid rounded object-fit-fill">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex  flex-column justify-content-end ">
                                <h6>Gỏi tôm</h6>
                                <a href="#" class="btn btn-light btn-sm ">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-menu">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="view\images\starter\starter-4.jpg" class="img-fluid rounded">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex flex-column justify-content-end">
                                <h6>Súp cua</h6>
                                <a href="#" class="btn btn-light btn-sm ">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-menu">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="view\images\starter\starter-5.jpg" class="img-fluid rounded">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex flex-column justify-content-end">
                                <h6>Salad</h6>
                                <a href="#" class="btn btn-light btn-sm ">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-menu">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="view\images\starter\starter-6.jpg" class="img-fluid rounded">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex flex-column justify-content-end">
                                <h6>Bánh Bacon cuộn</h6>
                                <a href="#" class="btn btn-light btn-sm ">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- previous button -->
        <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel<?php echo $type; ?>" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <!-- next button -->
        <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel<?php echo $type; ?>" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- stater menu -->
    <div class="card menu">
        <!-- menu title -->
        <h6 class="card-title">Danh sách các món <?php
            switch ($type) {
                case 'starter': 
                    echo 'khai vị';
                    break;
                case 'main':
                    echo 'món chính';
                    break;
                case 'dessert':
                    echo 'tráng miệng';
                    break;
                default: 
                    echo 'undefine';
                    break;
            }
        ?></h6>
        <div class="d-flex justify-content-around flex-wrap">
        <?php
            $productList = json_decode($productList);
            foreach($productList as $product) {
                $product = json_decode($product);
                echo '
                <!-- dish list -->
                    <!-- begin: first starter dish -->
                    <div class="menu__item card">
                        <img src="'.$product->image.'" alt="" class="item-img">
                        <div class="item-description">
                            <!-- dish name -->
                            <h6 class="item-name">'.$product->name.'</h6>
                            <!-- price -->
                            <h6 class="item-price text-secondary"><small>'.$product->price.'đ</small></h6>
                        </div>

                        <div class="item-comment-count d-flex justify-content-around align-items-center">

                            <!-- view detail btn -->
                            <a href="dish-detail/'.UrlNormal($product->name).'/'.$product->id.'" class="btn btn-outline-dark btn-sm mt-1 ">
                                <i class="bi bi-eye-fill"></i>
                                Chi tiết
                            </a>
                            <!-- order btn -->
                            <a onclick="loadXMLDoc(\'index.php?controller=user&action=addToCart&productID='.$product->id.'&productQuantity=1\', \'cart_drop\');" class="btn btn-outline-dark btn-sm mt-1 ">
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
  <!--   <script src="view/script/starter.js"></script> -->
    
</div>
<!-- end starter content -->