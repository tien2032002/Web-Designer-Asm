
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
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/style_profile_user.css"> 
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/style_navbar_homepage.css">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <!-- ======= Scripts ====== -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/jquery/jquery-3.6.4.js"></script>
</head>
<body>
    <div class="container-fluid">
        <?php  
            $userObj = json_decode($_SESSION['userObj']);
        ?>
        <div class="row align-items-center py-3 pd_mobile" style="background-color: #f2f2f2;">
            <div class="col-lg-3 d-none d-lg-block px-5">
                <a href="index.php?controller=user&action=home_page_user">
                    <img src="view/images/logo.jpg" style="width: 70%;" alt="logo">
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-tablet-7 col-mobile-5">
                      <form class="form-inline" style="margin-right: 1%;">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for products" style="border-radius: 0;">
                          <div class="input-group-append">
                            <button class="btn border btn-outline-secondary" type="button">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-tablet-3 col-mobile-5 navbar_ic d-flex justify-content-end">
                      <a href="#" class="btn border btn-outline-secondary" style="margin-right: 1%; border-radius: 0;">
                        <i class="fas fa-heart"></i>
                        <span class="badge">0</span>
                      </a>
                      <a href="" class="btn border btn-outline-secondary" style="margin-right: 1%; border-radius: 0;">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge">0</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row border-top px-3">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light p-2" style="height: 62px;">
                    <a href="index.php?controller=user&action=home_page_user" class="d-block d-lg-none">
                        <img src="view/images/logo.jpg" style="width: 100px;" alt="logo">
                    </a>
                    <button type="button" 
                            class="navbar-toggler" 
                            data-toggle="collapse" 
                            data-target="#navbarCollapse"
                            style="border-radius: 0;">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="index.php?controller=user&action=home_page_user" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="index.php?controller=user&action=menu" class="nav-item nav-link">Thực Đơn</a>
                            <a href="#" class="nav-item nav-link">Đặt Bàn</a>
                            <a href="#" class="nav-item nav-link">Tin Tức</a>
                        </div>
                        <div class="navbar-nav ml-auto nav_main">
                            <div>
                                <a href="index.php?controller=user&action=profile_user" class="nav-item nav-link">
                                    <div style="display: inline-block;">
                                        <div style="display: inline-block; margin-right: 10px;">
                                            <img src="<?php echo $userObj->image ?>.jpg" 
                                                style="width: 30px; height: 30px; border-radius: 50%; 
                                                        object-fit: cover; margin-bottom: 3px;" 
                                                alt="avatar">
                                        </div>
                                        <div style="display: inline-block; font-weight: 500; margin-top: 7px;">
                                            Chào, <?php echo $userObj->name ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="index.php?controller=user&action=logout" class="nav-item nav-link">
                                    <i class="bi bi-box-arrow-right text-dark"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="row">
                    <!-- List TAB -->
                    <div class="col-md-3 mt-2">
                        <div class="card">
                            <div class="list-group" id="myList">
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="index.php?controller=user&action=home_page_user">Trang chủ</a>
                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#profile">Hồ sơ</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#cart">Giỏ hàng</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#bill">Đơn mua</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 mt-2">
                        <div class="tab-content">
                            <!-- Tab Profile -->
                            <div class="tab-pane active" id="profile">
                                <form method='post' action='index.php?controller=user&action=change_info&id=<?php echo $userObj->id ?>' enctype="multipart/form-data">
                                    <div class="card p-4">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img src="<?php echo $userObj->image ?>.jpg" alt="avatar"
                                                style="width: 100%; object-fit: cover; border-radius: 50%;"
                                                >
                                            </div>
                                            <div class="col-md-6 mt-4">
                                                <div class="row mt-2">
                                                    <div class="col-md-12 d-flex">
                                                        <h3 class="me-4"><?php echo $userObj->name ?></h3>
                                                        <i class="bi bi-geo-alt mt-1 me-1"></i>
                                                        <h6 class="mt-2"><?php echo $userObj->address ?></h6>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="custom-file mt-4">
                                                        <label class="custom-file-label" for="customFile">
                                                            <h6>Change your avatar</h6>
                                                        </label><br>
                                                            <input type="file" class="custom-file-input mt-2" id="customFile" name='avatar'>
                                                            <p class='text-danger'>
                                                                <?php
                                                                    if (isset($uploadErr))
                                                                        switch ($uploadErr) {
                                                                            case 'notImage': 
                                                                                echo 'Không đúng định dạng ảnh!';
                                                                                break;
                                                                            default: break;
                                                                        }
                                                                ?>
                                                            </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            
                                                <h5>THÔNG TIN TÀI KHOẢN</h5>
                                                <div class="row mt-3">
                                                    <div class="form-group col-md-6">
                                                        <label for="name">Tên</label>
                                                        <input type="text" class="form-control mt-2" id="name" value="<?php echo $userObj->name ?>" name='name'>
                                                        <p class='text-danger'>
                                                            <?php
                                                                if (isset($nameErr))
                                                                    switch ($nameErr) {
                                                                        case 'length': 
                                                                            echo 'Tên phải có độ dài từ 2-30 ký tự!';
                                                                            break;
                                                                        default: break;
                                                                    }
                                                            ?>
                                                        </p>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="address">Địa Chỉ</label>
                                                        <input type="text" class="form-control mt-2" id="address" value="<?php echo $userObj->address ?>" name='address'>
                                                        <p class='text-danger'>
                                                            <?php
                                                                if (isset($addressErr))
                                                                    switch ($addressErr) {
                                                                        case 'length': 
                                                                            echo 'Địa chỉ phải có độ dài từ 2-30 ký tự!';
                                                                            break;
                                                                        default: break;
                                                                    }
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="form-group col-md-6">
                                                        <label for="phone">Số Điện Thoại</label>
                                                        <input type="tel" class="form-control mt-2"id="phone" value="<?php echo $userObj->phone ?>" name='phone'>
                                                        <p class='text-danger'>
                                                            <?php
                                                                if (isset($phoneErr))
                                                                    switch ($phoneErr) {
                                                                        case 'length': 
                                                                            echo 'Số điện thoại phải có độ dài từ 8-16 số!';
                                                                            break;
                                                                        case 'hasUsed':
                                                                            echo 'Số điện thoại đã được sử dụng!';
                                                                            break;
                                                                        default: break;
                                                                    }
                                                            ?>
                                                        </p>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control mt-2" id="email" value="<?php echo $userObj->email ?>" name='email'>
                                                    <p class='text-danger'>
                                                        <?php
                                                            if (isset($emailErr))
                                                                switch ($emailErr) {
                                                                    case 'missing': 
                                                                        echo 'Không được để trống email!';
                                                                        break;
                                                                    case 'hasUsed':
                                                                        echo 'Email đã được sử dụng!';
                                                                        break;
                                                                    default: break;
                                                                }
                                                        ?>
                                                    </p>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="gender">Giới Tính</label><br>
                                                    <div class="form-check-inline mt-2">
                                                        <label>
                                                            <input type="radio" class="form-check-input" <?php echo ($userObj->gender == 'Nam')?'checked':''; ?> name="gender" value="Nam" required>
                                                            <span style="font-weight: 400;">Nam</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <label>
                                                            <input type="radio" class="form-check-input" name="gender" <?php echo ($userObj->gender != 'Nam')?'checked':''; ?> value="Nữ" required>
                                                            <span style="font-weight: 400;">Nữ</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                
                                                <h5 class="mt-5">THAY ĐỔI MẬT KHẨU</h5>
                                                <div class="form-group mt-3">
                                                    <label for="password">Mật Khẩu Cũ</label>
                                                    <input type="password" class="form-control mt-2" id="password" placeholder="Nhập mật khẩu cũ" name='oldPassword'>
                                                    <p class='text-danger'>
                                                        <?php
                                                            if (isset($emailErr))
                                                                switch ($emailErr) {
                                                                    case 'wrong old password': 
                                                                        echo 'Sai mật khẩu cũ';
                                                                        break;
                                                                    case 'wrong confirm password':
                                                                        echo 'Xác nhận mật khẩu không khớp!';
                                                                        break;
                                                                    default: break;
                                                                }
                                                        ?>
                                                    </p>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="newpassword">Mật Khẩu Mới</label>
                                                    <input type="password" class="form-control mt-2" id="newpassword" placeholder="Nhập mật khẩu mới" name='newPassword'>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="newpassword_confirm">Xác Nhận Mật Khẩu</label>
                                                    <input type="password" class="form-control mt-2" id="newpassword_confirm" placeholder="Nhập mật khẩu mới" name='newPassword2'>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn mt-5">Lưu Thay Đổi</button>
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Tab Giỏ Hàng -->
                            <div class="tab-pane" id="cart">Đây là Tab giỏ hàng</div>
                            <!-- Tab Đơn Mua -->
                            <div class="tab-pane" id="bill">Đây là Tab đơn mua</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Scripts ====== -->

    <script>
        $('#myList a').on('click', function () {
            $(this).tab('show')
        })
    </script>
</body>
</html>