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
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/UI_manager/style_navbar_manager.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../../css/UI_employee/style_table_employee.css">
    <!-- ======= Scripts ====== -->
    <script src="../../jquery/jquery-3.6.4.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
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
                                  <a class="nav-link nav-link-top btn border-white text-white ms-2" href="#">Đăng xuất
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
                    <a class="nav-link" href="manager.html">Thông tin chung</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="manage_employee.html">Nhân viên</a>
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
                                      <th>CMND</th>
                                      <th>Địa chỉ</th>
                                      <th>Tuổi</th>
                                      <th>Ngày Vào</th>
                                      <th>Lương</th>
                                      <th>Đánh Giá</th>
                                      <th>Button</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>001</td>
                                      <td>Nguyen Van A</td>
                                      <td>123456789</td>
                                      <td>Ha Noi</td>
                                      <td>25</td>
                                      <td>2020-01-01</td>
                                      <td>5000000</td>
                                      <td>Good</td>
                                      <td>
                                        <button class="btn btn-sm btn-dark edit-btn">Edit</button>
                                        <button class="btn btn-sm btn-danger delete-btn">Delete</button>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>002</td>
                                      <td>Tran Thi B</td>
                                      <td>987654321</td>
                                      <td>Ho Chi Minh</td>
                                      <td>30</td>
                                      <td>2019-06-01</td>
                                      <td>7000000</td>
                                      <td>Excellent</td>
                                      <td>
                                        <button class="btn btn-sm btn-dark edit-btn">Edit</button>
                                        <button class="btn btn-sm btn-danger delete-btn">Delete</button>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>003</td>
                                      <td>Le Van C</td>
                                      <td>567890123</td>
                                      <td>Da Nang</td>
                                      <td>28</td>
                                      <td>2018-02-01</td>
                                      <td>6000000</td>
                                      <td>Good</td>
                                      <td>
                                        <button class="btn btn-sm btn-dark edit-btn">Edit</button>
                                        <button class="btn btn-sm btn-danger delete-btn">Delete</button>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>004</td>
                                      <td>Pham Thi D</td>
                                      <td>345678912</td>
                                      <td>Binh Duong</td>
                                      <td>35</td>
                                      <td>2017-11-01</td>
                                      <td>8000000</td>
                                      <td>Excellent</td>
                                      <td>
                                        <button class="btn btn-sm btn-dark edit-btn">Edit</button>
                                        <button class="btn btn-sm btn-danger delete-btn">Delete</button>
                                      </td>
                                    </tr>
                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <th>Mã Nhân Viên</th>
                                      <th>Tên</th>
                                      <th>CMND</th>
                                      <th>Địa chỉ</th>
                                      <th>Tuổi</th>
                                      <th>Ngày Vào</th>
                                      <th>Lương</th>
                                      <th>Đánh Giá</th>
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

    <!-- ======= Scripts ====== -->
    <script src="../../script/employee_table.js"></script>

</body>

</html>