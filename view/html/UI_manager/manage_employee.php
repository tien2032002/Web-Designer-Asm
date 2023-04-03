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
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="view/css/UI_employee/style_table_employee.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_manager/style_navbar_manager.css"/>
    <!-- ======= Scripts ====== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
                                      <th>Button</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                      $employeeList = json_decode($employeeList);
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
                                      <td>
                                          <button class="btn btn-sm btn-dark" data-target="#confirm-edit-modal-'.$employee->id.'">Edit</button>
                                          <div class="modal fade" id="confirm-edit-modal-'.$employee->id.'" tabindex="-1" role="dialog">
                                              <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                  <h5>Chỉnh sửa thông tin nhân viên</h5>
                                                  </div>
                                                  <div class="modal-body">
                                                  <form method="POST">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="ID" style="font-weight: 500;">MÃ NHÂN VIÊN</label>
                                                                <input type="number" class="form-control mt-2" id="ID" name="ID" 
                                                                    placeholder="Enter ID" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="name" style="font-weight: 500;">TÊN</label>
                                                                <input type="text" class="form-control mt-2" id="name" name="name" 
                                                                    placeholder="Enter name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="CMND" style="font-weight: 500;">CMND</label>
                                                                <input type="text" class="form-control mt-2" id="CMND" name="CMND" 
                                                                    placeholder="Enter CMND" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email" style="font-weight: 500;">EMAIL</label>
                                                                    <input type="email" class="form-control mt-2" id="email" name="email" 
                                                                        placeholder="Enter email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone" style="font-weight: 500;">SỐ ĐIỆN THOẠI</label>
                                                                <input type="tel" class="form-control mt-2" id="phone" name="phone" 
                                                                    placeholder="Enter phone number" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="password" style="font-weight: 500;">MẬT KHẨU</label>
                                                                    <input type="password" class="form-control mt-2" id="password" name="password" 
                                                                        placeholder="Enter password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="address" style="font-weight: 500;">ĐỊA CHỈ</label>
                                                                    <input type="text" class="form-control mt-2" id="address" name="address" 
                                                                        placeholder="Enter address" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="gender" style="font-weight: 500;">GIỚI TÍNH</label><br>
                                                                <div class="form-check-inline mt-1">
                                                                    <label>
                                                                        <input type="radio" class="form-check-input" name="gender" value="male" required>Nam
                                                                    </label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <label>
                                                                        <input type="radio" class="form-check-input" name="gender" value="female" required>Nữ
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
                                                      <a href="#"><button type="button" class="btn btn-primary">Lưu</button></a>
                                                  </div>
                                              </div>
                                              </div>
                                          </div>
                                          
                                          <button class="btn btn-sm btn-danger" data-target="#confirm-delete-modal-'.$employee->id.'">Delete</button>
                                          <div class="modal fade" id="confirm-delete-modal-'.$employee->id.'" tabindex="-1" role="dialog">
                                              <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                  <h5>Xác nhận xóa</h5>
                                                  </div>
                                                  <div class="modal-body">
                                                  Bạn có chắc chắn muốn xóa thông tin nhân viên?
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
                                                      <a href="index.php?controller=manager&action=delete_employee&employeeID='.$employee->id.'"><button type="button" class="btn btn-danger">Xóa</button></a>
                                                  </div>
                                              </div>
                                              </div>
                                          </div>
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
                                      <th>Button</th>
                                    </tr>
                                  </tfoot>
                                </table>
                                  <button id="add-btn" class="btn btn-dark mt-2" data-target="#confirm-add-modal">Add Employee</button>
                                  <div class="modal fade" id="confirm-add-modal" tabindex="-1" role="dialog">
                                              <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                  <h5>Thêm thông tin nhân viên</h5>
                                                  </div>
                                                  <div class="modal-body">
                                                  <form method="POST">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="ID" style="font-weight: 500;">MÃ NHÂN VIÊN</label>
                                                                <input type="number" class="form-control mt-2" id="ID" name="ID" 
                                                                    placeholder="Enter ID" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="name" style="font-weight: 500;">TÊN</label>
                                                                <input type="text" class="form-control mt-2" id="name" name="name" 
                                                                    placeholder="Enter name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="CMND" style="font-weight: 500;">CMND</label>
                                                                <input type="text" class="form-control mt-2" id="CMND" name="CMND" 
                                                                    placeholder="Enter CMND" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="email" style="font-weight: 500;">EMAIL</label>
                                                                    <input type="email" class="form-control mt-2" id="email" name="email" 
                                                                        placeholder="Enter email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone" style="font-weight: 500;">SỐ ĐIỆN THOẠI</label>
                                                                <input type="tel" class="form-control mt-2" id="phone" name="phone" 
                                                                    placeholder="Enter phone number" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="password" style="font-weight: 500;">MẬT KHẨU</label>
                                                                    <input type="password" class="form-control mt-2" id="password" name="password" 
                                                                        placeholder="Enter password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="address" style="font-weight: 500;">ĐỊA CHỈ</label>
                                                                    <input type="text" class="form-control mt-2" id="address" name="address" 
                                                                        placeholder="Enter address" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="gender" style="font-weight: 500;">GIỚI TÍNH</label><br>
                                                                <div class="form-check-inline mt-1">
                                                                    <label>
                                                                        <input type="radio" class="form-check-input" name="gender" value="male" required>Nam
                                                                    </label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                    <label>
                                                                        <input type="radio" class="form-check-input" name="gender" value="female" required>Nữ
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </form>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
                                                      <a href="#"><button type="button" class="btn btn-primary">Thêm</button></a>
                                                  </div>
                                              </div>
                                              </div>
                                  </div>
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