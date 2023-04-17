<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
     <!--  style -->
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/UI_home_page.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/UI_login.css">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <!-- ======= Scripts ====== -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/jquery/jquery-3.6.4.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <?php
        if (!isset($firstNameErr)) $firstNameErr='first';
        if (!isset($lastNameErr )) $lastNameErr ='first';
        if (!isset($phoneErr )) $phoneErr ='first';
        if (!isset($emailErr )) $emailErr ='first';
        if (!isset($passwordErr )) $passwordErr ='first';
        if (!isset($password2Err )) $password2Err ='first';
    ?>
    <!-- Topbar Start -->
    <?php include 'component/topbar.php' ?>
    <!-- Topbar End -->
    
    <!-- Main Start -->
    <div class="container-fluid">
        <div class="row border-top px-3">
            <div class="col-lg-12">
                <!-- Navbar Start -->
                <?php $page = 'signup';
                include 'component/navbar.php'; ?>
                <!-- Navbar End -->

                <!-- Breadcrumb Start -->
                <div class="row mt-3 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.php?controller=guest&action=home_page">Trang chủ</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Đăng Ký</li>
                        </ol>
                    </nav>
                </div>
                <!-- Breadcrumb End -->

                <!-- Register Form Start -->
                <?php include 'component/register_form.php'; ?>
                <!-- Register Form End -->
            </div>
        </div>
    </div>
    <!-- Main End -->

    <footer>
        
    </footer>
    <!-- ======= Scripts ====== -->
    <script src="view/script/cart.js"></script>
</body>
</html>