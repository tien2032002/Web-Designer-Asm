<!-- starter content -->
<link rel="stylesheet" type="text/css" href="view\css\UI_user\starter.css">
                        <div class="starter-content">
                            <!-- starter breadcrum -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Thực đơn</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Khai vị</li>
                                </ol>
                            </nav>

                            <!-- popular starter carousel-->   
                            <div class="card w-80 popular-starter">
                                <h6 class="card-title">Món ăn được ưa thích</h6>
                                <div id="recipeCarousel" class="carousel slide " data-bs-ride="carousel">
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
                                <button class="carousel-control-prev" type="button" data-bs-target="#recipeCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <!-- next button -->
                                <button class="carousel-control-next" type="button" data-bs-target="#recipeCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <script>
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
                                </script>
                            </div>

                            <!-- stater menu -->
                            <div class="card menu">
                                <!-- menu title -->
                                <h6 class="card-title">Danh sách các món khai vị</h6>
                                <!-- dish list -->
                                <div class="d-flex justify-content-around flex-wrap">
                                    <!-- begin: first starter dish -->
                                    <div class="menu__item card">
                                        <img src="view\images\starter\starter-1.jpg" alt="" class="item-img">
                                        <div class="item-description">
                                            <!-- dish name -->
                                            <h6 class="item-name">Gỏi cuốn</h6>
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
                                    <!-- begin: end starter dish -->
                                    
                                    <!-- begin: second starter dish -->
                                    <div class="menu__item card">
                                        <img src="view\images\starter\starter-7.jpg" alt="" class="item-img">
                                        <div class="item-description">
                                            <!-- dish name -->
                                            <h6 class="item-name">Bánh Anh Đào</h6>
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
                                    <!-- end: second starter dish -->

                                    <!-- begin: third starter dish -->
                                    <div class="menu__item card">
                                        <img src="view\images\starter\starter-8.jpg" alt="" class="item-img">
                                        <div class="item-description">
                                            <!-- dish name -->
                                            <h6 class="item-name">Saganaki</h6>
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
                                    <!-- end: third starter dish -->
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
                                    <!-- begin: first maincourse -->
                                    <div class="menu__item card">
                                        <img src="view\images\main-course\main-course-1.jpg" alt="" class="item-img">
                                        <div class="item-description">
                                            <!-- dish name -->
                                            <h6 class="item-name">Món chính 1 </h6>
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
                                    <!-- begin: end maincourse -->
                                    
                                    <!-- begin: second maincourse -->
                                    <div class="menu__item card">
                                        <img src="view\images\main-course\main-course-2.jpg" alt="" class="item-img">
                                        <div class="item-description">
                                            <!-- dish name -->
                                            <h6 class="item-name">Món chính 2</h6>
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
                                    <!-- end: second maincourse -->

                                    <!-- begin: third maincourse -->
                                    <div class="menu__item card">
                                        <img src="view\images\main-course\main-course-3.jpg" alt="" class="item-img">
                                        <div class="item-description">
                                            <!-- dish name -->
                                            <h6 class="item-name">Món chính 3</h6>
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
                                    <!-- end: third maincourse-->
                                </div>

                                <div class="d-flex justify-content-end">
                                    <a href="" style="text-decoration: none;">
                                        <i class="bi bi-eye-fill"></i>
                                        View more
                                    </a>
                                </div>
                            </div>
                            <!-- end: main course menu -->

                            <!-- begin: desert menu -->
                            <div class="card menu">
                                <!-- menu title -->
                                <h6 class="card-title">Món tráng miệng</h6>
                                <!-- dish list -->
                                <div class="d-flex justify-content-around flex-wrap">
                                    <!-- begin: first desert -->
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
                                    <!-- begin: end desert -->
                                    
                                    <!-- begin: second desert -->
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
                                    <!-- end: second desert -->

                                    <!-- begin: third desert -->
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
                                    <!-- end: third desert-->
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