<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style_trangchu.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <title>Login</title>
    <script src="login.js"></script>
</head>

<body>
    <?php
        require("../control/checkLogin.php");
        if (!isset($_POST["username"]) || !isset($_POST["password"])) {
            $loginErr = 'first';
        }
        else $loginErr = checkLogin($_POST["username"], $_POST["password"]);
    ?>
    <nav class="navbar navbar-expand-md navbar-light nav1">
        <div class="container">
            <a href="trangchu.php" class="navbar-brand">
                <img src="images/logo.png" alt="logo" style="width: 200px;">
            </a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li>
                        <a href="#" class="nav-link">
                            <img 
                                src="images/hotline.png" alt="hotline"
                                style="width: 15px; padding-bottom: 5px;"
                            >
                            1900 1000
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            <img 
                                src="images/search.png" alt="search"
                                style="width: 15px; padding-bottom: 2px;"
                            >
                            Tìm kiếm
                        </a>
                    </li>
                    <li>
                        <a href="login.php" class="nav-link">
                            <img 
                                src="images/user.png" alt="user"
                                style="width: 18px; padding-bottom: 2px;" 
                            >
                            Đăng nhập
                        </a>
                    </li>
                    <li>
                        <a href="signup.php" class="nav-link">
                            <img 
                                src="images/register.png" alt="register"
                                style="width: 15px; padding-bottom: 2px;"
                            >
                            Đăng ký
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link">
                            <img 
                                src="images/cart.png" alt="cart"
                                style="width: 15px; padding-bottom: 4px;"
                            >
                            Giỏ hàng
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark nav2" style="height: 45px">
        <div class="container">
                <div class="navbar-collapse">
                    <ul class="navbar-nav">
                        <li>
                            <a href="trangchu.php" class="nav-link">TRANG CHỦ</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">GIỚI THIỆU</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">SẢN PHẨM</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">BẢN ĐỒ</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <section class="bg-light text-dark" style="padding-top: 5px;">
        <div class="container">
            <div class="row">
                <nav style="margin-top: 20px;">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="trangchu.php">Trang chủ</a></li>
                      <li class="breadcrumb-item active" aria-current="page" a href="#">Đăng nhập</a></li>
                    </ol>
                  </nav>
                <div class="col-md-6">
                      <div class="row">
                        <h6 class="text-center">Đăng nhập tài khoản</h6>
                        <form action="?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <div class="form-group">
                                <label for="username" class="mb-2 mt-1">Tên đăng nhập:</label>
                                <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập" name="username" onfocusout="ValidateUserName(this.value)">
                                <p class='text-danger' id="userNameWarning">
                                    <?php
                                        switch ($loginErr) {
                                            case "missingBoth":
                                                echo "Hãy nhập tên đăng nhập!";
                                                break;
                                            case "missingUserName":
                                                echo "Hãy nhập tên đăng nhập!";
                                                break;
                                            case "userNameErr":
                                                echo "Tên đăng nhập chưa được đăng ký!";
                                                break;
                                            default: 
                                                break;
                                        }
                                    ?>
                                </p>
                            </div>
                            <div class="form-group">
                              <label for="password" class="mb-2 mt-3">Mật khẩu:</label>
                              <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password" onfocusout="ValidatePassword(this.value)">
                              <p class='text-danger' id="passwordWarning">
                                    <?php
                                        switch ($loginErr) {
                                            case "missingBoth":
                                                echo "Hãy nhập mật khẩu!";
                                                break;
                                            case "missingPassword":
                                                echo "Hãy nhập mật khẩu!";
                                                break;
                                            case "passwordErr":
                                                echo "Mật khẩu không chính xác!";
                                                break;
                                            default: 
                                                break;
                                        }
                                    ?>
                                </p>
                            </div>
                            <div class="row mt-3 mb-2">
                                <a href="#">Quên mật khẩu?</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                          </form>
                      </div>
                </div>
                <div class="col-md-6">
                    <h6 class="text-center">Bản chưa có tài khoản</h6>
                    Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển.<br>
                    Cập nhật các tin tức sự kiện và các chương trình giảm giá của chúng tôi.
                </div>
            </div>
        </div>
    </section>
    <?php
    if($loginErr == 'good') echo "Đăng nhập thành công!"
    ?>

    <footer class="p-3 text-dark text-center mt-5" style="background-color: #e4d2ca;">
        <div class="container">
            <h5>Footer Information...</h5>
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:black;">Link 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:black;">Link 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color:black;">Link 3</a>
              </li>
            </ul>
        </div>
    </footer>

</body>

</html>