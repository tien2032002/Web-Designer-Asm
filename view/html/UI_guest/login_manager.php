<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
     <!--  style -->
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/navbar_homepage.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/style_login.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/cart2.css">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <!-- ======= Scripts ====== -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/jquery/jquery-3.6.4.js"></script>

</head>
<body>
    <?php
        if (!isset($loginErr)) $loginErr='first';
    ?>
    <!-- Topbar Start -->
    <?php include 'component/topbar.php' ?>
    <!-- Topbar End -->

    <!-- Main Start -->
    <div class="container-fluid">
        <div class="row border-top px-3">
            <div class="col-lg-12">
                <!-- Navbar Start -->
                <?php $page = 'login_manager';
                include 'component/navbar.php'; ?>
                <!-- Navbar End -->

                <!-- Breadcrumb Start -->
                <div class="row mt-3 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/home_page">Trang chủ</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Quản Trị Viên</li>
                        </ol>
                    </nav>
                </div>
                <!-- Breadcrumb End -->
                
                <!-- Login QTV Form Start -->
                <?php include 'component/login_QTV_form.php'; ?>
                <!-- Login QTV Form End -->
            </div>
        </div>
    </div>
    <!-- Main End -->

    <footer>
        
    </footer>
    <!-- ======= Scripts ====== -->
    <script src="view/script/user_navbar.js"></script>
    <script src="view/script/cart.js"></script>
</body>
</html>