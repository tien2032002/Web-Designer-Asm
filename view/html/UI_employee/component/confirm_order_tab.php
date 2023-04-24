<div class="p-4 me-0 ms-0" id='confirm_tab'>
    <button type="button" class="btn border btn-outline-secondary"
        data-toggle="modal" data-target="#modal_table"
        style="border-radius: 0;">
        <div class="d-flex justify-content-end">
            <i class="bi bi-calendar-plus me-2"></i>
            <span style="font-weight: 500; color: black">Tạo Đơn</span>
        </div>
    </button>
    <?php include('view\html\UI_employee\component\modal_table.php') ?>
    <?php
        $typeArray = array("starter" => "Khai vị",
                           "main" => "Món chính",
                           "dessert" => "Tráng miệng");
        foreach($inuseTableList as $table) {
            echo '
            <div class="col-12 card mt-4">
                <div class="d-flex align-items-center">
                    <h4 class="flex-grow-1 pt-3 ps-3">XÁC NHẬN ĐƠN HÀNG</h4>
                    <h5 class="pt-3 ps-3 me-3"><span class="text-muted ">ID Table: '.$table->table_number.'</span></h5>
                </div>
                <div class="pt-3 ps-3" style="font-weight: 500;">
                    <div class="row">
                        <div class="col-4">
                            <span class="text-muted">Tên Khách Hàng: </span>'.$table->customer_name.'
                        </div>
                        <div class="col-4">
                            <span class="text-muted">Số Điện Thoại: </span>'.$table->customer_phone.'
                        </div>
                        <div class="col-4">
                            <span class="text-muted">Email: </span>'.$table->customer_email.'
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <span class="text-muted">Ngày Đặt Bàn: </span>'.$table->reservation_date.'
                        </div>
                        <div class="col-4">
                            <span class="text-muted">Giờ Đặt Bàn: </span>'.$table->time.'
                        </div>
                        <div class="col-4">
                            <span class="text-muted">Số Lượng Khách: </span>'.$table->number_of_guests.'
                        </div>
                    </div>  
                </div>
                <hr>
                <div class="card-body">';
                $total = 0;
                if (count($table->bill) != 0){
                    echo'
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
                            <tbody>';
                                
                                foreach($table->bill as $product) {
                                    $total += $product->price;
                                    echo '
                                <tr>
                                    <th class="d-flex align-items-center">
                                            <img class="me-4" src="'.$product->productObj->image.'"
                                            style="width:50%; max-width:100px" alt="Book">
                                            <div>'.$product->productObj->name.'<div>
                                    </th>
                                    <td class="align-middle">
                                        <div style="font-weight: 500;">'.$typeArray[$product->productObj->type].'</div>
                                    </td>
                                    <td class="align-middle">
                                        <div style="font-weight: 500;">'.$product->quantity.'</div>
                                    </td>
                                    <td class="align-middle">
                                        <div style="font-weight: 500;">'.number_format($product->price, 0).'</div>
                                    </td>
                                    <td class="align-middle">
                                        <div onclick="updateData(\'cancel_bill&billId='.$product->id.'\', \'confirm_tab\')" class="btn btn-danger" style="border-radius: 0px;">Xóa</div>
                                    </td>
                                </tr>';
                                }
                                
                                echo'
                            </tbody>
                        </table>';
                    }
                    else 
                        echo'<h5 class="text-center">
                                <span style="color: #da5619;">Chưa Có Sản Phẩm</span>
                                <hr>
                            </h5>';
                        echo '
                        <div class="d-flex justify-content-between">
                            <div style="font-weight:500; font-size:20px" class="ms-2">Tổng cộng: 
                                <span style="color: #da5619;">'.number_format($total, 0).'đ<span>
                            </div>
                            <div>
                                <button type="button" data-toggle="modal" data-target="#modal_cancel_order'.$table->id.'"
                                    class="btn btn-secondary" style="border-radius: 0;">HỦY ĐƠN</button>';
                                require "modal_cancel_order.php";
                                echo'
                                <button type="button" data-toggle="modal" data-target="#modal_add_food'.$table->id.'"
                                    class="btn btn-primary" style="border-radius: 0;">THÊM MÓN</button>';
                                require "modal_add_food.php";
                                echo'  
                                <button type="button" data-toggle="modal" data-target="#modal_payment'.$table->id.'"
                                    class="btn btn-bill">XÁC NHẬN THANH TOÁN</button>';
                                require "modal_payment.php";
                                echo'
                            </div>
                        </div>
                    </div>
                </div>
            
            ';
        }
    ?>
    
    
</div>

<script>
    function updateData(link, id) {
        $.ajax({
            // The link we are accessing.
            url: link,
                
            // The type of request.
            type: "get",
                
            // The type of data that is getting returned.
            dataType: "html",

            success: function( strData ){
                console.log(strData)
                document.getElementById(id).outerHTML = strData;
                // console.log("do")

            }
        });
    }
</script>