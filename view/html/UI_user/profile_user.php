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
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/navbar_homepage.css">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/cart2.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/cart.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/style_profile_user.css">

    <!-- ======= Scripts ====== -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/jquery/jquery-3.6.4.js"></script>
</head>
<body>
  
    <?php
        $userObj = json_decode($userObj);
        $jsonString = json_encode($userObj);
    ?>
    <!-- Topbar Start -->
    <?php include 'component/topbar.php'; ?>
    <!-- Topbar End -->

    <div class="container-fluid">
      <div class="row border-top px-3">
          <div class="col-lg-12">
              <!-- Navbar Start -->
              <?php $page = 'profile_user';
              include 'component/navbar.php'; ?>
              <!-- Navbar End -->
              <div class="row">
                  <!-- List TAB -->
                  <div class="col-md-3 mt-2">
                      <div class="card">
                          <div class="list-group" id="myList">
                              <a class="list-group-item active" href="#" data-url="/profile_user_tab">Hồ sơ</a>
                              <a class="list-group-item" href="#" data-url="view/html/UI_user/component/cart_tab.php">Giỏ hàng</a>
                              <a class="list-group-item" href="#" data-url="#">Đơn mua</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-9 mt-2">
                      <div id="tab-content"></div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- ======= Scripts ====== -->
    <script>   
      $(document).ready(function() {
        var userObj = <?php echo $jsonString; ?>;
        $('#tab-content').load($('a.list-group-item.active').data('url'), { userObj: userObj });
        $('a.list-group-item').click(function() {
          var url = $(this).data('url');
          var clickedTab = $(this);
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
            data: { userObj: userObj },
            success: function(data) {
              $('#tab-content').html(data);
              $('a.list-group-item').removeClass('active');
              clickedTab.addClass('active');
            }
          });
          return false;
        });
      });
    </script>
</body>
</html>