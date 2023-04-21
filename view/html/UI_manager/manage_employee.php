<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
      <!--  style -->
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="view/css/UI_manager/style_navbar_manager.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="view/css/UI_employee/style_table_employee.css">
    <!-- ======= Scripts ====== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
      function showPassword(id) {
        var x = document.getElementById(id);
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      //get content using ajax
      /* function getMainContent(link, elementID) {
          $.ajax({
              // The link we are accessing.
              url: link,
                  
              // The type of request.
              type: "get",
                  
              // The type of data that is getting returned.
              dataType: "html",
              success: function( strData ){
                  document.getElementById(elementID).innerHTML = strData;
                  carousel()
              }
          });
      } */
    </script>

</head>

<body>
    <?php
      if (isset($errResultAdd)) {
        $errResultAdd = json_decode($errResultAdd);
      }
      if (isset($errResultUpd)) {
        $errResultUpd = json_decode($errResultUpd);
      }
    ?>

    <div class="container-fluid">
      <!-- Topbar Start -->
      <?php include 'component/topbar.php'; ?>
      <!-- Topbar End -->

      <div class="row">
          <!-- menu bên trái -->
          <div class="col-md-3 col-lg-2 sidebar" style="margin-top: 60px;">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="/home_page_manager">Thông tin chung</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/manage_employee">Nhân viên</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sản phẩm</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Đơn hàng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Feedback</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Doanh thu</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-9 col-lg-10 mt-3">
            <div class="container-fluid mt-5 pt-3">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-header">
                      <span><i class="bi bi-table me-2"></i></span> Data Table
                    </div>
                    <div class="card-body">
                      <!-- Employee Table Start -->
                      <?php include 'component/employee_table.php'; ?>
                      <!-- Employee Table End -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- ======= Scripts ====== -->
    <script src="view/script/employee_table.js"></script>

    <?php
      /*  if (isset($errResultAdd)) echo '
      <script>
        var myModal = new bootstrap.Modal(document.getElementById("confirm-add-modal"), {
          keyboard: false
        })
        myModal.show();
      </script>
      ';

      if (isset($errResultUpd)) echo '
      <script>
        var myModal = new bootstrap.Modal(document.getElementById("confirm-edit-modal-'.$curID.'"), {
          keyboard: false
        })
        myModal.show();
      </script>
      ';  */
    ?>
    
</body>

</html>