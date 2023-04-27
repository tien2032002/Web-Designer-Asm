<style>
/* ======================= Cards ====================== */
.col-md-6 .card {
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: transform 0.5s;
}

.details .cardHeader {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.cardHeader .btn:hover{
    color: white;
}
.cardHeader .btn{
    background-color: #a3cef8;
}

.col-md-6 .card:hover {
    transform: translateY(-5px);
}
.card-1 {
    background-color: #f7a1a1;
}  
.card-2 {
    background-color: #a3cef8;
}
.card-3 {
    background-color: #96eed8;
}
.card-4 {
    background-color: #f5d57d;
}
.numbers {
    color: black;
    font-size: 28px;
    font-weight: 500;
    margin-bottom: 10px;
}

.card-name {
    color: black;
    font-size: 18px;
    font-weight: 500;
}

</style>

    <div class="container-fluid pt-3">
        <div class="row">
        <div class="col-md-6 col-lg-3 mt-3">
            <div class="card card-1">
            <div class="card-body">
                <i class="bi bi-basket3 text-dark fa-2x"></i>
                <div class="numbers"><?php echo $numberOfProducts; ?></div>
                <div class="card-name">Sản Phẩm</div>
            </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mt-3">
            <div class="card card-2">
            <div class="card-body">
                <i class="bi bi-receipt fa-2x"></i>
                <div class="numbers"><?php echo $numberOfBill; ?></div>
                <div class="card-name">Hóa Đơn</div>
            </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mt-3">
            <div class="card card-3">
            <div class="card-body">
                <i class="bi bi-chat-dots fa-2x"></i>
                <div class="numbers"><?php echo $numberOfFeedback; ?></div>
                <div class="card-name">Đánh Giá</div>
            </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mt-3">
            <div class="card card-4">
            <div class="card-body">
                <i class="bi bi-cash-stack fa-2x"></i>
                <div class="numbers"><?php echo number_format($revenue, 0); ?> Đ</div>
                <div class="card-name">Doanh Thu</div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <?php
        $typeArray = array("starter" => "Khai vị",
        "main" => "Món chính",
        "dessert" => "Tráng miệng");
        foreach($allPaidTable as $table) {
            echo'
            <div class="card mt-5 me-3 ms-3" style="border-radius: 0;">
                <div class="d-flex align-items-center">
                    <h4 class="flex-grow-1 pt-3 ps-4">Hóa Đơn</h4>
                    <h5 class="pt-3 pe-4 me-3"><span class="text-muted ">ID Hóa Đơn: '.$table->id.'</span></h5>
                </div>
                <div class="pt-3 ps-3" style="font-weight: 500;">
                    <div class="row m-0">
                        <div class="col-4">
                            <span class="text-muted">Tên Khách Hàng: '.$table->customer_name.'</span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted">Số Điện Thoại: '.$table->customer_phone.'</span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted">Email: '.$table->customer_email.'</span>
                        </div>
                    </div>
                    <div class="row m-0 mt-2">
                        <div class="col-4">
                            <span class="text-muted">Ngày Đặt Bàn: '.$table->reservation_date.'</span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted">Giờ Đặt Bàn: '.$table->time.'</span>
                        </div>
                        <div class="col-4">
                            <span class="text-muted">Số Lượng Khách: '.$table->number_of_guests.'</span>
                        </div>
                    </div>  
                </div>
                <hr>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="text-header-cart">
                                    <th class="align-middle">Tên món ăn</th>
                                    <th class="align-middle">Hình ảnh</th>
                                    <th class="align-middle">Danh Mục</th>
                                    <th class="align-middle">Số Lượng</th>
                                    <th class="align-middle">Đơn Giá</th>
                                    <th class="align-middle">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>';
                            $sumBill = 0;
                            foreach($table->bills as $bill) {
                                $sumBill+=$bill->price;
                                echo '
                                <tr>
                                    <td class="align-middle">
                                        <div style="font-weight: 500;">'.$bill->productObj->name.'</div>
                                    </td>
                                    <th class="d-flex align-items-center">
                                            <img class="me-4" src="'.$bill->productObj->image.'"
                                            style="width:50%; max-width:100px" alt="Book">
                                            <div><div>
                                    </th>
                                    <td class="align-middle">
                                        <div style="font-weight: 500;">'.$typeArray[$bill->productObj->type].'</div>
                                    </td>
                                    <td class="align-middle">
                                        <div style="font-weight: 500;">'.$bill->quantity.'</div>
                                    </td>
                                    <td class="align-middle">
                                        <div style="font-weight: 500;">'.number_format($bill->productObj->price, 0).'đ</div>
                                    </td>
                                    <td class="align-middle">
                                        <div style="font-weight: 500;">'.number_format($bill->price, 0).'đ</div>
                                    </td>
                                </tr>';
                            }
                            
                            echo'
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between">
                            <div style="font-weight:500; font-size:20px" class="ms-2">Tổng cộng: 
                                <span style="color: #da5619;">'.number_format($sumBill, 0).'VNĐ<span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
    ?>

    