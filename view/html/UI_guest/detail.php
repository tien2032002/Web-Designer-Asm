


<!-- starter content -->
<link rel="stylesheet" type="text/css" href="view\css\UI_user\starter.css">
<link rel="stylesheet" type="text/css" href="view\css\UI_user\detail.css">
<div class="starter-content">
    <!-- starter breadcrum -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Thực đơn</a></li>
            <li class="breadcrumb-item active" aria-current="page">Khai vị</li>
        </ol>
    </nav>


    <!-- begin: dish detail -->
    <div class="card menu">
        <div class="row">
            <div class="col-md-auto">
                <img src="view\images\starter\starter-1.jpg" alt="" style="width: 500px; height: 300px;">
            </div>
            <div class="col">
                <!-- dish name -->
                <h2 class="card-title mb-0">GỎI CUỐN</h2>
                <div class="subheader">Món khai vị</div>
                <h2 class="mb-0"> 7000VNĐ</h2>

                <!-- dish description -->
                <p>
                    Gỏi cuốn có xuất xứ từ Miền nam có nhiều 
                    nguyên liệu như rau xà lách, húng quế, tía tô,
                    tôm khô, rau thơm, thịt luộc, tôm tươi.. tất 
                    cả được cuộn trong vỏ bánh tráng
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
                <img src="view\images\user\user2.webp" alt="" class="user-img">
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
            <!-- begin: first dish -->
            <div class="menu__item card">
                <img src="view\images\dessert\dessert-1.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Tráng miệng 1 </h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>7.000VNĐ / 1 cuốn</small></h6>
                </div>

                <div class="item-comment-count d-flex justify-content-around align-items-center">

                    <a href="#" class="d-flex text-decoration-none">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>25</small></div>
                    </a>
                    <!-- view detail btn -->
                    <a href="#" class="btn btn-outline-dark btn-sm mt-1 ">
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
    
            <!-- begin: second dish -->
            <div class="menu__item card">
                <img src="view\images\dessert\dessert-2.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Tráng miệng 2</h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>29.000VND / 1 cái</small></h6>
                </div>
                

                <div class="item-comment-count d-flex justify-content-around align-items-center">
                    <a href="#" class="d-flex text-decoration-none ms-2">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>100</small></div>
                    </a>
                    <!-- view detail btn -->
                    <a href="#" class="btn btn-outline-dark btn-sm mt-1 ">
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
            <!-- end: second dish -->

            <!-- begin: third dish -->
            <div class="menu__item card">
                <img src="view\images\dessert\dessert-3.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Tráng miệng 3</h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>117.000VND / 1 phần</small></h6>
                </div>
                
                <div class="item-comment-count d-flex justify-content-around align-items-center">
                    <a href="#" class="d-flex text-decoration-none">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>63</small></div>
                    </a>
                    <!-- view detail btn -->
                    <a href="#" class="btn btn-outline-dark btn-sm mt-1 ">
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
            <!-- end: third dish-->
        </div>
        <!-- end: recomend dish list -->
    </div>
    <!-- end: recommend dish -->
    
    <script src="view/script/starter.js"></script>

</div>
<!-- end starter content -->