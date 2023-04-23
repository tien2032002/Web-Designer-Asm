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
    <link rel="stylesheet" href="view/css/UI_user/sidebar.css">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/style_navbar_homepage.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/starter.css">
    <link rel="stylesheet" type="text/css" href="view\css\UI_user\parallax.css">
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
    <header>
        <!-- Topbar Start -->
        <?php include 'component/topbar.php'; ?>
        <!-- Topbar End -->
        
        <!-- Navbar Start -->
        <?php $page = 'home_page_user';
        include 'component/navbar.php'; ?>
        <!-- Navbar End -->
    </header>
    
   <section class="parallax">
        <h2 id="text">Liên hệ</h2>
        
        <img id="mountain-img" src="view\images\contact\mountain.png" alt="">
        <img id="sun" src="view\images\contact\sun.png" alt="">
        <img id="mountain2-img" src="view\images\contact\mountain2.png" alt="">
        <img id="fog" src="view\images\contact\fog.png" alt="">
        
        <img id="bird" src="view\images\contact\bird.png" alt="">
        <img id="cloud" src="view\images\contact\cloud.png" alt="">
   </section>

    <section class="p-3 row bg-white">
        <div class="col-4">
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
            <hr>
            <!-- begin: contact methods -->
            <ul class = "list-unstyled">
                <li class="d-flex align-items-center">
                    <div style="width: 30px; height: 30px" class="d-flex justify-content-center align-items-center border rounded-circle me-2 p-1">
                        <i style="color: #b38b91" class="bi bi-geo-alt"></i>
                    </div>
                    
                    <p class="mb-0">6 Đ. Hoàng Sa, Vĩnh Ninh</p>
                </li>

                <li class="d-flex align-items-center mt-2">
                    <div style="width: 30px; height: 30px" class="d-flex justify-content-center align-items-center border rounded-circle me-2 p-1">
                        <i style="color: #b38b91" class="bi bi-envelope-fill"></i>
                    </div>
                    
                    <p class="mb-0">Wanmin@restaurant.com</p>
                </li>

                <li class="d-flex align-items-center mt-2">
                    <div style="width: 30px; height: 30px" class="d-flex justify-content-center align-items-center border rounded-circle me-2 p-1">
                        <i style="color: #b38b91" class="bi bi-telephone-fill"></i>
                    </div>
                    
                    <p class="mb-0">CSKH: +012 345 6789</p>
                </li>

                <li class="d-flex align-items-center mt-2">
                    <div style="width: 30px; height: 30px" class="d-flex justify-content-center align-items-center border rounded-circle me-2 p-1">
                        <i style="color: #b38b91" class="bi bi-facebook"></i>
                    </div>
                    
                    <p class="mb-0">fanpage: www.facebook.com/wanminRestaurant</p>
                </li>
            </ul>
            <!-- end: contact methods -->
        </div>
        

        <div class="col-8 d-flex justify-content-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d27932.397705129646!2d106.64633329222451!3d10.801180934406508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zTmjDoCBow6BuZw!5e0!3m2!1svi!2s!4v1682214942487!5m2!1svi!2s" 
                width="80%%" height="500" style="border:0;" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        
    </section>
    <!-- begin: form  -->
    <form class="row p-4 mb-0" style="background-color:#b38b91">
        <div class="col d-flex align-items-center">
            <h5 class="mb-0">Nhận thông tin khuyến mãi từ chúng tôi</h5>
        </div>
        <div class="input-group col">
            <input type="email" class="form-control" placeholder="Email">
            <input type="submit" class="btn btn-outline-light" value="Gửi">
            
        </div>
    </form>
    <!-- end: form -->
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
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
    <script>
        gsap.from("#sun", {
            scrollTrigger: {
                scrub: true
            }, 
            y: 200
        });

        gsap.to("#text", {
            scrollTrigger: {
                scrub: true
            }, 
            y: 200
        });

        gsap.from("#bird", {
            opacity: 1, 
            duration: 0.5,
            stagger: 0.3
        });

        gsap.to("#bird", {
            opacity: 0, 
            duration: 0.8,
            stagger:0.2, 
            scrollTrigger: {
                scrub: true
            }, 
            x: -1000
        });

        gsap.to("#cloud", {
            scrollTrigger: {
                scrub: true
            }, 
            y: -500
        });


    </script>

    
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
