
<!-- starter content -->
<link rel="stylesheet" type="text/css" href="view/css/UI_user/starter.css">
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
                <div id='carosel-1' class="carousel-item active ">
                    <div class="col-md-3">
                        <div class="card ">
                            <div class="card-img">
                                <img src="/view/images/starter-1.jpg" class="img-fluid rounded h-100 object-fit-cover">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex flex-column justify-content-end ">
                                <h6>Gỏi cuốn</h6>
                                <a href="#" class="btn btn-light btn-sm">Order Now</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="/view/images/starter-2.jpg" class="img-fluid rounded">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex  flex-column justify-content-end">
                                <h6>Gỏi cá hồi</h6>
                                <a href="#" class="btn btn-light btn-sm ">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="/view/images/starter-3.jpg" class="img-fluid rounded object-fit-fill">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex  flex-column justify-content-end ">
                                <h6>Gỏi tôm</h6>
                                <a href="#" class="btn btn-light btn-sm ">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="/view/images/starter-4.jpg" class="img-fluid rounded">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex flex-column justify-content-end">
                                <h6>Súp cua</h6>
                                <a href="#" class="btn btn-light btn-sm ">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="/view/images/starter-5.jpg" class="img-fluid rounded">
                            </div>
                            <div class="card-img-overlay gradient-overlay text-light d-flex flex-column justify-content-end">
                                <h6>Salad</h6>
                                <a href="#" class="btn btn-light btn-sm ">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="/view/images/starter-6.jpg" class="img-fluid rounded">
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

    </div>

    <!-- stater menu -->
    <div class="card" id="menu">
        <!-- menu title -->
        <h6 class="card-title">Danh sách các món khai vị</h6>
        <!-- dish list -->
        <div class="d-flex justify-content-around flex-wrap">
            <!-- dish -->
            <div class="menu__item card">
                <img src="/view/images/starter-1.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Gỏi cuốn</h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>7.000VNĐ / 1 cuốn</small></h6>
                </div>
                <!-- top comment -->
                <div class="item-review d-flex">
                    <!-- user avatar -->
                    <img src="view\images\chibi-dehya-v0-1cl51d21xlv91.webp" alt="" class="user-img">
                    <div>
                        <div class="user-name"><small>Ayhed</small></div>
                        <div class="user-comment">
                            <small>
                                Nước chấm đậm đà, cuốn sạch sẽ, vừa lạ miệng vừa ngon
                            </small>
                        </div>
                    </div>
                    
                </div>
                <div class="item-comment-count d-flex justify-content-around align-items-center">
                    <a href="#" class="d-flex text-decoration-none">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>25</small></div>
                    </a>
                    <a href="#" class="btn btn-secondary btn-sm mt-1 ">Order Now</a>
                </div>
            </div>
            
            <!-- dish -->
            <div class="menu__item card">
                <img src="/view/images/starter-7.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Bánh Anh Đào</h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>29.000VND / 1 cái</small></h6>
                </div>
                <!-- top comment -->
                <div class="item-review d-flex">
                    <!-- user avatar -->
                    <img src="view\images\user2.jpg" alt="" class="user-img">
                    <div>
                        <div class="user-name"><small>Ayaya</small></div>
                        <div class="user-comment">
                            <small>
                            Toriaezu, amayadori shimasen ka? Goanshin wo, kasa nara sugu todokimasu kara.
                            </small>
                        </div>
                    </div>
                    
                </div>
                <div class="item-comment-count d-flex justify-content-around align-items-center">
                    <a href="#" class="d-flex text-decoration-none">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>100</small></div>
                    </a>
                    <a href="#" class="btn btn-secondary btn-sm mt-1 ">Order Now</a>
                </div>                                
            </div>
            <!-- dish -->
            <div class="menu__item card">
                <img src="/view/images/starter-8.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Saganaki</h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>117.000VND / 1 phần</small></h6>
                </div>
                <!-- top comment -->
                <div class="item-review d-flex">
                    <!-- user avatar -->
                    <img src="view\images\user3.jpg" alt="" class="user-img">
                    <div>
                        <div class="user-name"><small>Ahuzak</small></div>
                        <div class="user-comment">
                            <small>
                                Lorem ipsum dolor sit amet get, arcu. In ens viverra nulla ut metus varius laoreet.
                            </small>
                        </div>
                    </div>
                    
                </div>
                <div class="item-comment-count d-flex justify-content-around align-items-center">
                    <a href="#" class="d-flex text-decoration-none">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>63</small></div>
                    </a>
                    <a href="#" class="btn btn-secondary btn-sm mt-1 ">Order Now</a>
                </div>                                         
            </div>
            <!-- dish -->                         
            <div class="menu__item card">
                <img src="/view/images/starter-6.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Bánh Bacon cuộn</h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>88.000VND / 1 phần</small></h6>
                </div>
                <!-- top comment -->
                <div class="item-review d-flex">
                    <!-- user avatar -->
                    <img src="view\images\user4.jpg" alt="" class="user-img">
                    <div>
                        <div class="user-name"><small>Koju Ara</small></div>
                        <div class="user-comment">
                            <small>Cosy place for eating a good meal. Bacon is cooked crispy. 
                                Varieties of sandwiches, burgers and they have full English breakfast 
                                (don't count on black pudding though). 
                                Nice atmosphere, parking is across the street at a courtyard about 50m away. 
                                It's free if you ask for a card at the counter. 
                                Reasonable prices, regarding it's not far of the centre
                            </small>
                        </div>
                    </div>
                    
                </div>
                <div class="item-comment-count d-flex justify-content-around align-items-center">
                    <a href="#" class="d-flex text-decoration-none">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>56</small></div>
                    </a>
                    <a href="#" class="btn btn-secondary btn-sm mt-1 ">Order Now</a>
                </div>                                 
            </div>
            <!-- dish -->
            <div class="menu__item card">
                <img src="/view/images/starter-9.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Đậu phụ rán</h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>99.999VND / 1 phần</small></h6>
                </div>
                <!-- top comment -->
                <div class="item-review d-flex">
                    <!-- user avatar -->
                    <img src="view\images\user6.jpg" alt="" class="user-img">
                    <div>
                        <div class="user-name"><small>Mae Yiko</small></div>
                        <div class="user-comment">
                            <small>
                            Ara Ara ~
                            Lorem ipsum dolor sit amet get, arcu. In ens viverra nulla ut metus varius laoreet.
                            </small>
                        </div>
                    </div>
                    
                </div>
                <div class="item-comment-count d-flex justify-content-around align-items-center">
                    <a href="#" class="d-flex text-decoration-none">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>56</small></div>
                    </a>
                    <a href="#" class="btn btn-secondary btn-sm mt-1 ">Order Now</a>
                </div>                                 
            </div>
            <!-- dish -->
            <div class="menu__item card">
                <img src="/view/images/starter-10.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Dango</h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>99.999VND / 1 phần</small></h6>
                </div>
                <!-- top comment -->
                <div class="item-review d-flex">
                    <!-- user avatar -->
                    <img src="view\images\user5.jpg" alt="" class="user-img">
                    <div>
                        <div class="user-name"><small>Ei</small></div>
                        <div class="user-comment">
                            <small>
                            Oh, don't listen to the Shogun. Desserts! 
                            Cavities are no big deal — you can just replace your teeth.
                            Anyway, I just don't see how desserts can pose a serious obstacle to my pursuit of Eternity.
                            </small>
                        </div>
                    </div>
                    
                </div>
                <div class="item-comment-count d-flex justify-content-around align-items-center">
                    <a href="#" class="d-flex text-decoration-none">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>56</small></div>
                    </a>
                    <a href="#" class="btn btn-secondary btn-sm mt-1 ">Order Now</a>
                </div>                                 
            </div>
            <!-- dish -->
                <div class="menu__item card">
                <img src="/view/images/starter-11.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Gà cay</h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>99.999VND / 1 phần</small></h6>
                </div>
                <!-- top comment -->
                <div class="item-review d-flex">
                    <!-- user avatar -->
                    <img src="view\images\user7.jpg" alt="" class="user-img">
                    <div>
                        <div class="user-name"><small>Leyan</small></div>
                        <div class="user-comment">
                            <small>
                            Ito yo, kousaku seyo.
                            </small>
                        </div>
                    </div>
                    
                </div>
                <div class="item-comment-count d-flex justify-content-around align-items-center">
                    <a href="#" class="d-flex text-decoration-none">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>204</small></div>
                    </a>
                    <a href="#" class="btn btn-secondary btn-sm mt-1 ">Order Now</a>
                </div>                                 
            </div>
            <!-- dish -->
            <div class="menu__item card">
                <img src="/view/images/starter-12.jpg" alt="" class="item-img">
                <div class="item-description">
                    <!-- dish name -->
                    <h6 class="item-name">Gỏi ngó sen</h6>
                    <!-- price -->
                    <h6 class="item-price text-secondary"><small>99.999VND / 1 phần</small></h6>
                </div>
                <!-- top comment -->
                <div class="item-review d-flex">
                    <!-- user avatar -->
                    <img src="view\images\user8.jpg" alt="" class="user-img">
                    <div>
                        <div class="user-name"><small>Shen Hee</small></div>
                        <div class="user-comment">
                            <small>
                            Ito yo, kousaku seyo.
                            </small>
                        </div>
                    </div>
                    
                </div>
                <div class="item-comment-count d-flex justify-content-around align-items-center">
                    <a href="#" class="d-flex text-decoration-none">
                        <i class="bi bi-chat"></i>
                        <div class="comment-quantity"><small>204</small></div>
                    </a>
                    <a href="#" class="btn btn-secondary btn-sm mt-1 ">Order Now</a>
                </div>                                 
            </div>
        </div>
    <!-- end starter menu -->
    <script src="view/script/starter.js"></script>
    
</div>
<!-- end starter content -->