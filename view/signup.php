<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style_trangchu.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <title>Sign up</title>
</head>
<body>
    <?php
        require("../control/register.php");
        if (!isset($_POST["username"]) || !isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["phone"])) {
            $userNameErr = 'first';
            $emailErr = 'fisrt';
            $passwordErr = 'fisrt';
            $phoneErr = "fisrt";
        }
        else {
            $userNameErr = checkUserName($_POST["username"]);
            $emailErr = checkEmail($_POST["email"]);
            $passwordErr = checkPassword($_POST["password"]);
            $phoneErr = checkPhone($_POST["phone"]);
        }
    ?>
    <nav class="navbar navbar-expand-md navbar-light nav1">
        <div class="container">
            <a href="trangchu.html" class="navbar-brand">
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
                        <a href="login.html" class="nav-link">
                            <img 
                                src="images/user.png" alt="user"
                                style="width: 18px; padding-bottom: 2px;" 
                            >
                            Đăng nhập
                        </a>
                    </li>
                    <li>
                        <a href="signup.html" class="nav-link">
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
                            <a href="trangchu.html" class="nav-link">TRANG CHỦ</a>
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
                      <li class="breadcrumb-item"><a href="trangchu.html">Trang chủ</a></li>
                      <li class="breadcrumb-item active" aria-current="page" a href="#">Đăng ký</a></li>
                    </ol>
                  </nav>
                <div class="col-md-12">
                      <div class="row">
                        <h6 class="text-center">Đăng ký tài khoản</h6>
                        <div class="container">
                            <form action="?php echo $_SERVER['PHP_SELF'];?>" method="post">
                                <div class="form-row d-flex ">
                                    <div class="form-group col-md-6" style="margin-right: 30px;">
                                        <label for="username" class="mb-2 mt-1">Tên đăng nhập:</label>
                                        <input 
                                            type="text" class="form-control" id="username"
                                            placeholder="Nhập tên đăng nhập" name="username"
                                        >
                                        <?php
                                            switch ($userNameErr) {
                                                case "missing":
                                                    echo "<p class='text-danger'>Hãy nhập tên đăng nhập!</p>";
                                                    break;
                                                case "length":
                                                    echo "<p class='text-danger'>Tên đăng nhập phải có 8-16 ký tự!</p>";
                                                    break;
                                                case "hasUsed":
                                                    echo "<p class='text-danger'>Tên đăng nhập đã được sử dụng!</p>";
                                                    break;
                                                default: 
                                                    break;
                                            }
                                        ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email" class="mb-2 mt-1">Email:</label>
                                        <input 
                                            type="email" class="form-control" id="email"
                                            placeholder="Nhập email" name="email"
                                        >
                                        <?php
                                            switch ($emailErr) {
                                                case "missing":
                                                    echo "<p class='text-danger'>Hãy nhập Email!</p>";
                                                    break;
                                                case "length":
                                                    echo "<p class='text-danger'>Email phải có 8-16 ký tự!</p>";
                                                    break;
                                                case "hasUsed":
                                                    echo "<p class='text-danger'>Email đã được sử dụng!</p>";
                                                    break;
                                                case "invalid":
                                                    echo "<p class='text-danger'>Email không chính xác!</p>";
                                                    break;
                                                default: 
                                                    break;
                                            }
                                        ?>
                                    </div>
                                </div>

                                <div class="form-row d-flex">
                                    <div class="form-group col-md-6" style="margin-right: 30px;">
                                      <label for="password" class="mb-2 mt-3">Mật khẩu:</label>
                                      <input type="password" class="form-control" id="password"
                                            placeholder="Nhập mật khẩu" name="password"
                                      >
                                      <?php
                                            switch ($passwordErr) {
                                                case "missing":
                                                    echo "<p class='text-danger'>Hãy nhập mật khẩu!</p>";
                                                    break;
                                                case "length":
                                                    echo "<p class='text-danger'>Mật khẩu phải có 8-16 ký tự!</p>";
                                                    break;
                                                default: 
                                                    break;
                                            }
                                        ?>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="phone" class="mb-2 mt-3">Số điện thoại:</label>
                                      <input type="tel" class="form-control" id="phone"
                                            placeholder="Nhập số điện thoại" name="phone"
                                      >
                                      <?php
                                            switch ($phoneErr) {
                                                case "missing":
                                                    echo "<p class='text-danger'>Hãy nhập số điện thoại!</p>";
                                                    break;
                                                case "invalid":
                                                    echo "<p class='text-danger'>Hãy nhập đúng số điện thoại!</p>";
                                                    break;
                                                default: 
                                                    break;
                                            }
                                        ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Đăng ký</button>
                            </form>
                          </div>
                          
                          
                      </div>
                </div>

            </div>
        </div>
    </section>

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

    <?php
        if ($userNameErr == "good" &&
            $emailErr == "good" &&
            $passwordErr == "good" &&
            $phoneErr == "good") {
                $addInfo = 'INSERT INTO customers (username, password, email, phone)
                            Value ($_POST["username"], $_POST["password"], $_POST["email"], $_POST["phone"])';
            }
    ?>

</body>
</html>