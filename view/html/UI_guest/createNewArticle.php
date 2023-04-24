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
    <!-- ======= Scripts ====== -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/jquery/jquery-3.6.4.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
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
    <style>
    .btn-override:hover{
        background-color: #B38B91;
        color: #fff;
        border: #B38B91 ;
    }

    .btn-override{
        color: #905e65 ;
        background-color: #fff;
        border: solid 1px #B38B91 ;
    }
    .activeDropImg {
        border: 1px solid black;
    }

    .dropImageCss{

        width: 280px;
        height: 180px;
        overflow: hidden;
        background-size: cover;
        background-position: center center;
    }
    </style>
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
                <?php $page = 'home_page_user';
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
                <!-- Sidebar None Large End -->
                    
                <!-- begin: text editor -->
                
                <form class="text-editor">
                    <h3>Tạo bài viết mới</h3>
                    <div class="d-flex w-100 justify-content-between">
                        <div style="width: 40%">
                            <h5>Thumbnail</h5>
                            <div id="dropZone" style="width: 300px; height: 200px; border: 1px dashed #ccc; padding: 10px">
                                <span id="dropMessage">Drop image here or click here to choose from file</span>
                                <input type="file" id="dropImageInput" style="display: none">
                            </div>
                        </div>
                        
                        <div style="width: 60%">
                            <h5>Tiêu đề: </h5>
                            <input type="text" id="news-title" class="form-control mb-5">

                            <!-- begin: select tag for news -->
                            <h5>Gắn tag cho bài viết: </h5>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option value ="" selected></option>
                                    <option value="1">Món ngon mỗi ngày</option>
                                    <option value="2">Món ăn mùa xuân</option>
                                    <option value="3">Món ăn mùa hè</option>
                                    <option value="4">Món ăn mùa thu</option>
                                    <option value="5">Món ăn mùa đông</option>
                                    
                                </select>
                            </div>
                            <!-- end: select tag for news -->
                        </div>
                    </div>
                    

                    <!-- begin: text editor area -->
                    <h5>Thêm nội dung cho bài viết</h5>
                    <textarea name="editor1" id="editor-textarea">
                    
                    </textarea>
                    <script>
                        CKEDITOR.replace( 'editor1' );
                    </script>
                    <!-- end: text editor area -->

                    <div class="d-flex justify-content-end mt-2">
                        <input type="submit" value="Tạo bài viết mới" class="btn btn-override">
                    </div>
                </form>
                <!-- end: text editor -->
            </div>
        </div>
    </div>

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
        
        // drag and drop thumbnail functions
        const dropZone = document.getElementById("dropZone");
        
        const dropImageInput = document.getElementById("dropImageInput");
        
        //because input is hide, add click event for dropZone 
        dropZone.addEventListener("click", (event) => {
		    dropImageInput.click();
	    });

        // if an image has added to input, update the thumbnail
        dropImageInput.addEventListener("change",(event)=>{ 
            updateThumbnail(dropZone, dropImageInput.files[0]);
        });

        dropZone.addEventListener("dragover", (event) => {
		    event.preventDefault();
		    dropZone.classList.add("activeDropImg");
	    });
        
        ["dragleave", "dragend"].forEach((type) => {
            dropZone.addEventListener(type, (event) => {
                dropZone.classList.remove("activeDropImg");
            });
        });

        dropZone.addEventListener("drop", (event) => {
            event.preventDefault();

            if (event.dataTransfer.files.length) {
                dropImageInput.files = event.dataTransfer.files;
                updateThumbnail(dropZone, event.dataTransfer.files[0]);
            }

            // dropZone.classList.remove("");
        });

        function updateThumbnail(dropZone,file){
            
            let dropMessage = document.getElementById("dropMessage");
            if (dropMessage) {
                dropMessage.remove();
            }

            let thumbnailElement = dropZone.querySelector(".dropSuccessImage");
            if (!thumbnailElement) {
                thumbnailElement = document.createElement("div");
                thumbnailElement.classList.add("dropImageCss");
                dropZone.appendChild(thumbnailElement);
            }
            thumbnailElement.dataset.label = file.name;

            
            if (file.type.startsWith("image/")) {
                const reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = () => {
                    thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
                };
            } else {
                thumbnailElement.style.backgroundImage = null;
            }
        }
    </script>
    <!-- <script src="view/script/user_navbar.js"></script> -->

</body>
</html>
