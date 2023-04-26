
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
     <!--  style -->
    <link rel="stylesheet" href="view/css/UI_user/sidebar.css">
    <link rel="stylesheet" href="view/css/UI_user/UI_home_page.css">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view\css\UI_user\product.css">

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
                    console.log("do")
                    const items = document.querySelectorAll(".carousel-menu");

                    items.forEach((el) => {
                        const minPerSlide = 4
                        let next = el.nextElementSibling
                        for (var i=1; i<minPerSlide; i++) {
                            if (!next) {
                                // wrap carousel by using first child
                                next = items[0]
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
    ?>
    <!-- Topbar Start -->
    <?php include 'component/topbar.php'; ?>
    <!-- Topbar End -->
    
    <!-- Main Start -->
    <div class="container-fluid">
        <div class="row border-top px-3">
            <!-- Sidebar Large Start -->
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
                <!-- Sidebar None Large Start -->

                <!-- Tab Content Start -->
                <div class="tab-content">
                    <!-- begin: daily news -->
                    <div class="card menu mt-4 mb-5">
                        <h4 class="card-title">Bài viết nổi bật</h4>
                            <!-- begin: article list -->
                            <div class="d-flex justify-content-around flex-wrap">
                            <?php
                                $tagArray = array('1' => 'Món ngon mỗi ngày',
                                                  '2' => 'Món ăn mùa xuân',
                                                  '3' => 'Món ăn mùa hè',
                                                  '4' => 'Món ăn mùa thu',
                                                  '5' => 'Món ăn mùa đông');
                                foreach($newsArray as $news) {
                                    echo '<!-- begin: first article -->
                                    <div class="menu__item card">
                                        <img src="'.$news->thumnail.'" class="item-img">
                                        <a href="/tag/'.UrlNormal($tagArray[$news->tag]).'/'.$news->tag.'" class="btn btn-outline-success ms-2 mt-2 p-1" style="max-width: 56%">'.$tagArray[$news->tag].'</a>
                                        <a style="all: unset; cursor: pointer;" href="news-detail/'.UrlNormal($news->title).'/'.$news->id.'"><h5 class="item-name ms-2 mt-2">'.$news->title.'</h5></a>
                                    </div>
                                    <!-- end: first article -->';
                                }
                            ?>

                        </div>
                        <!-- end: article list -->

                    </div>
                    <!-- end: daily news -->
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
                <!-- Tab Content End -->
            </div>
        </div>
    </div>
    <!-- Main End -->

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