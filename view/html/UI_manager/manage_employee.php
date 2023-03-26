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
    <script src="view/jquery/jquery-3.6.4.js"></script>
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    
</head>

<body>

    <div class="container-fluid">
        <!-- nav top -->
        <div class="row">
          <div class="col-md-12">
              <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
                  <div class="container-fluid">
                      <a class="navbar-brand ms-3" href="#">BRAND NAME</a>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                          <ul class="navbar-nav">
                              <li class="nav-item">
                                  <a class="nav-link nav-link-top btn border-white text-white" href="#">Thay đổi mật khẩu
                                    <span class="underline-white"></span>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link nav-link-top btn border-white text-white ms-2" href="index.php?controller=manager&action=logout">Đăng xuất
                                    <span class="underline-white"></span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div>
        <div class="row">
            <!-- menu bên trái -->
            <div class="col-md-3 col-lg-2 sidebar" style="margin-top: 60px;">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?controller=manage&action=home_page_manager">Thông tin chung</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="index.php?controller=manager&action=manage_employee">Nhân viên</a>
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
                <main class="mt-5 pt-3">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="card">
                            <div class="card-header">
                              <span><i class="bi bi-table me-2"></i></span> Data Table
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table id="employee-table" class="table table-striped" >
                                  <thead>
                                    <tr>
                                      <th>Mã Nhân Viên</th>
                                      <th>Tên</th>
                                      <th>Giới tính</th>
                                      <th>CMND</th>
                                      <th>Địa chỉ</th>
                                      <th>Email</th>
                                      <th>Số điện thoại</th>
                                      <th>Đánh Giá</th>
                                      <th>Button</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $employeeList = json_decode($employeeList);
                                      if (count($employeeList)==0) echo '<h2 class="text-center text-danger">M đuổi hết cmn nhân viên r !!!</h2>';
                                      foreach($employeeList as $employee) {
                                          $employee = json_decode($employee);
                                          echo '
                                          <tr">
                                      <td class="text-center">'.$employee->id.'</td>
                                      <td class="text-center">'.$employee->name.'</td>
                                      <td class="text-center">'.$employee->gender.'</td>
                                      <td class="text-center">'.$employee->cmnd.'</td>
                                      <td class="text-center">'.$employee->address.'</td>
                                      <td class="text-center">'.$employee->email.'</td>
                                      <td class="text-center">'.$employee->phone.'</td>
                                      <td class="text-center">good</td>
                                      <td>
                                        <a href="index.php?controller=manager&action=editEmployee&employeeID='.$employee->id.'"><button class="btn btn-sm btn-dark edit-btn">Edit</button></a>
                                        <a href="index.php?controller=manager&action=delete_employee&employeeID='.$employee->id.'"><button class="btn btn-sm btn-danger delete-btn">Delete</button></a>
                                      </td>
                                    </tr>';
                                      }
                                    ?>
                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <th>Mã Nhân Viên</th>
                                      <th>Tên</th>
                                      <th>Giới tính</th>
                                      <th>CMND</th>
                                      <th>Địa chỉ</th>
                                      <th>Email</th>
                                      <th>Số điện thoại</th>
                                      <th>Đánh Giá</th>
                                      <th>Button</th>
                                    </tr>
                                  </tfoot>
                                </table>
                                <button id="add-btn" class="btn btn-dark mt-2">Add Employee</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <?php
    ?>
    <!-- ======= Scripts ====== -->
    <script src="view/script/employee_table.js"></script>

</body>

</html>