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
        <!-- Topbar Start -->
        <?php include ("view/html/UI_guest/component/topbar.php"); ?>
        <!-- Topbar End -->
        
        <!-- Navbar Start -->
        <?php $page = 'home_page_user';
        include 'component/navbar.php'; ?>
        <!-- Navbar End -->
    
   <section class="parallax">
        <h2 id="text" style="color: #635A5B;">Liên hệ</h2>
        
        <img id="mountain-img" src="view\images\contact\mountain.png" alt="">
        <img id="sun" src="view\images\contact\sun.png" alt="">
        <img id="mountain2-img" src="view\images\contact\mountain2.png" alt="">
        <img id="fog" src="view\images\contact\fog.png" alt="">
        
        <img id="bird" src="view\images\contact\bird.png" alt="">
        <img id="cloud" src="view\images\contact\cloud.png" alt="">
   </section>

    <section class="p-5 row bg-white">
        <div class="col-5 mt-2 p-3">
            <h2>LIÊN HỆ</h2>
            <h6 class="text-muted">Hãy gửi phản hồi đến chúng tôi để cải thiện chất lượng dịch vụ</h6>
            <form action="">
                <input class="mt-3 border p-3 w-100" type="text" placeholder="Tên">
                <input class="mt-3 border p-3 w-100" type="text" placeholder="Email">
                <input class="mt-3 border p-3 w-100" type="text" placeholder="Lời nhắn">
                <input class="mt-3 border p-3 w-100" type="submit" style="background-color: #b38b91; font-weight: 500;" value="Gửi Phản Hồi">
            </form>
        </div><div class="col-1"></div>
        <div class="col-6 p-3">
            <div class="h2" >
                <img class="border border-light p-2" src="view\images\utensils-solid.svg" style="width: 50px" alt="restaurantIcon">
                DISFRUTAR
            </div>
            <p class="text-justify">
                Disfrutar vinh dự được bình chọn top 10 nhà hàng được yêu thích nhất của Tp.HCM. <br>
                Với đội ngũ đầu bếp tài năng được chọn lọc kỹ càng, sẽ phục vụ
                cho thực khách những tuyệt phẩm ẩm thực từ khắp nơi trên thế giới. <br>
                Thực khách không chỉ được thưởng thức những món ăn tuyệt hảo mà còn được trải
                nghiệm không gian ẩm thực được lấy cảm hứng từ kiến trúc hoàng gia Tây Ban Nha
                hứa hẹn sẽ đem lại cho thực khách những trải nghiệm không thể nào quên. <br>
            </p>
            <hr>
            <ul class = "list-unstyled">
                <?php
                    foreach($contactArray as $contact) {
                        echo '
                        <li class="d-flex align-items-center mt-2">
                            <div style="width: 30px; height: 30px" class="d-flex justify-content-center align-items-center border rounded-circle me-2 p-1">
                                <i style="color: #b38b91" class="'.$contact->icon.'"></i>
                            </div>
                            
                            <p class="mb-0">'.$contact->link.'</p>
                        </li>
                        ';
                    }
                ?>
            </ul>
            <!-- end: contact methods -->
        </div>
    </section>
    <div class="row bg-white">
    <h2 class="text-center mb-4">VỊ TRÍ NHÀ HÀNG</h2>
        <div class="col-12 d-flex justify-content-center mb-5">
            <iframe src="<?php echo $map->link; ?>" 
                width="80%" height="500" style="border:0;" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    <div>
    <!-- begin: form  -->

    <!-- end: form -->
    

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
