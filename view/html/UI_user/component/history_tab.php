<div class="card p-4">
<?php
    $typeArray = array("starter" => "Khai vị",
    "main" => "Món chính",
    "dessert" => "Tráng miệng");
    $statusArray = array("request" => "Lên đơn",
                         "canceled" => "Hủy",
                         "paid" => "Đã thanh toán");
    if (count($tableList) == 0) echo "<h3 class='text-center'>Chưa có lịch sử mua hàng!</h3>";
    foreach($tableList as $table) {
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
                                <th class="align-middle">Tình trạng</th>
                                <th class="align-middle">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>';
                        $sumBill = 0;
                        foreach($table->orderList as $bill) {
                            if($bill->status!="canceled")
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
                                    <div style="font-weight: 500;">'.$statusArray[$bill->status].'</div>
                                </td>
                                <td class="align-middle">
                                    <div style="font-weight: 500;">';
                                    if ($bill->status!="canceled") echo number_format($bill->price, 0); else echo 0;
                                    echo 'đ</div>
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
</div>