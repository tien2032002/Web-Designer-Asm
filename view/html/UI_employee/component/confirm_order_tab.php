<div class="p-4 me-0 ms-0">
    <button type="button" class="btn border btn-outline-secondary"
        data-toggle="modal" data-target="#modal_table"
        style="border-radius: 0;">
        <div class="d-flex justify-content-end">
            <i class="bi bi-calendar-plus me-2"></i>
            <span style="font-weight: 500; color: black">Tạo Đơn</span>
        </div>
    </button>
    <?php require 'modal_table.php'; ?>
    <div class="col-12 card mt-4">
        <div class="d-flex align-items-center">
            <h4 class="flex-grow-1 pt-3 ps-3">XÁC NHẬN ĐƠN HÀNG</h4>
            <h5 class="pt-3 ps-3 me-3"><span class="text-muted ">ID Table: 01</span></h5>
        </div>
        <div class="pt-3 ps-3" style="font-weight: 500;">
            <div class="row">
                <div class="col-4">
                    <span class="text-muted">Tên Khách Hàng: </span>Minh Lee
                </div>
                <div class="col-4">
                    <span class="text-muted">Số Điện Thoại: </span>0123456789
                </div>
                <div class="col-4">
                    <span class="text-muted">Email: </span>minh.le106@hcmut.edu.vn
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <span class="text-muted">Ngày Đặt Bàn: </span>2023-04-20
                </div>
                <div class="col-4">
                    <span class="text-muted">Giờ Đặt Bàn: </span>10:00
                </div>
                <div class="col-4">
                    <span class="text-muted">Số Lượng Khách: </span>6
                </div>
            </div>  
        </div>
        <hr>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr class="text-header-cart">
                        <th>Món Ăn</th>
                        <th>Danh Mục</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="d-flex align-items-center">
                                    <img class="me-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8EFQi7R0uGWN8G-jfTQvTDBiisbFzHok-vIA11aTz&s"
                                    style="width:50%; max-width:100px" alt="Book">
                                    <div>Bánh Xèo Tôm Thịt<div>
                            </th>
                            <td class="align-middle">
                                <div style="font-weight: 500;">Món Chính</div>
                            </td>
                            <td class="align-middle">
                                <div style="font-weight: 500;">1</div>
                            </td>
                            <td class="align-middle">
                                <div style="font-weight: 500;">70.000đ</div>
                            </td>
                            <td class="align-middle">
                                <div class="btn btn-danger" style="border-radius: 0px;">Xóa</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="d-flex align-items-center">
                                    <img class="me-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8EFQi7R0uGWN8G-jfTQvTDBiisbFzHok-vIA11aTz&s"
                                    style="width:50%; max-width:100px" alt="Book">
                                    <div>Bánh Xèo Tôm Thịt<div>
                            </th>
                            <td class="align-middle">
                                <div style="font-weight: 500;">Món Chính</div>
                            </td>
                            <td class="align-middle">
                                <div style="font-weight: 500;">1</div>
                            </td>
                            <td class="align-middle">
                                <div style="font-weight: 500;">70.000đ</div>
                            </td>
                            <td class="align-middle">
                                <div class="btn btn-danger" style="border-radius: 0px;">Xóa</div>
                            </td>
                        </tr>
                        <tr>
                            <th class="d-flex align-items-center">
                                    <img class="me-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8EFQi7R0uGWN8G-jfTQvTDBiisbFzHok-vIA11aTz&s"
                                    style="width:50%; max-width:100px" alt="Book">
                                    <div>Bánh Xèo Tôm Thịt<div>
                            </th>
                            <td class="align-middle">
                                <div style="font-weight: 500;">Món Chính</div>
                            </td>
                            <td class="align-middle">
                                <div style="font-weight: 500;">1</div>
                            </td>
                            <td class="align-middle">
                                <div style="font-weight: 500;">70.000đ</div>
                            </td>
                            <td class="align-middle">
                                <div class="btn btn-danger" style="border-radius: 0px;">Xóa</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <div style="font-weight:500; font-size:20px" class="ms-2">Tổng cộng: 
                        <span style="color: #da5619;">210.000đ<span>
                    </div>
                    <div>
                        <button type="button" data-toggle="modal" data-target="#modal_cancel_order"
                            class="btn btn-secondary" style="border-radius: 0;">HỦY ĐƠN</button>
                        <?php require "modal_cancel_order.php"; ?>
                        <button type="button" data-toggle="modal" data-target="#modal_add_food"
                            class="btn btn-primary" style="border-radius: 0;">THÊM MÓN</button>
                            <?php require "modal_add_food.php"; ?>    
                        <button type="button" data-toggle="modal" data-target="#modal_payment"
                            class="btn btn-bill">XÁC NHẬN THANH TOÁN</button>
                        <?php require "modal_payment.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 card mt-4">
        <div class="d-flex align-items-center">
            <h4 class="flex-grow-1 pt-3 ps-3">XÁC NHẬN ĐƠN HÀNG</h4>
            <h5 class="pt-3 ps-3 me-3"><span class="text-muted ">ID Table: 02</span></h5>
        </div>
        <div class="pt-3 ps-3" style="font-weight: 500;">
            <div class="row">
                <div class="col-4">
                    <span class="text-muted">Tên Khách Hàng: </span>Minh Lee
                </div>
                <div class="col-4">
                    <span class="text-muted">Số Điện Thoại: </span>0123456789
                </div>
                <div class="col-4">
                    <span class="text-muted">Email: </span>minh.le106@hcmut.edu.vn
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <span class="text-muted">Ngày Đặt Bàn: </span>2023-04-20
                </div>
                <div class="col-4">
                    <span class="text-muted">Giờ Đặt Bàn: </span>10:00
                </div>
                <div class="col-4">
                    <span class="text-muted">Số Lượng Khách: </span>6
                </div>
            </div>  
        </div>
        <hr>
        <div class="card-body">
            <div class="table-responsive">
                <h5 class="text-center">
                    <span style="color: #da5619;">Chưa Có Sản Phẩm</span>
                    <hr>
                </h5>
                <div class="d-flex justify-content-between">
                    <div style="font-weight:500; font-size:20px" class="ms-2">Tổng cộng: 
                        <span style="color: #da5619;">0đ<span>
                    </div>
                    <div>
                        <button type="button" data-toggle="modal" data-target="#modal_cancel_order"
                            class="btn btn-secondary" style="border-radius: 0;">HỦY ĐƠN</button>
                        <?php require "modal_cancel_order.php"; ?>
                        <button type="button" data-toggle="modal" data-target="#modal_add_food"
                            class="btn btn-primary" style="border-radius: 0;">THÊM MÓN</button>
                            <?php require "modal_add_food.php"; ?>    
                        <button type="button" data-toggle="modal" data-target="#modal_payment"
                            class="btn btn-bill">XÁC NHẬN THANH TOÁN</button>
                        <?php require "modal_payment.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>