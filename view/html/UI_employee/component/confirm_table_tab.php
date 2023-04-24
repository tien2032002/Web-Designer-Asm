<div class="p-4 ms-0 mt-1 me-0">
    <?php
        foreach($unconfirmTableList as $table) {
            echo '
            <div class="col-12 card mt-4">
                <h4 class="pt-3 ps-3">XÁC NHẬN ĐẶT BÀN</h4>
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
                <div class="card-body">
                    <div class="row d-flex align-items-center">
                        <div class="col-4">
                            <form action="/confirm_table?id='.$table->id.'" method="POST" id="confirmTable'.$table->id.'">
                                <select class="form-control" style="border-radius: 0;" id="table" name="table" required>';
                                for($i = 1; $i <= 16; $i++) {
                                    if(!in_array($i, $inUsetableList)) echo '<option value="'.$i.'">Bàn '.$i.'</option>';
                                }
                                
                                echo'
                                </select>
                            </form>
                        </div>
                        <div class="col-4">
                            <div style="border-radius: 0;" class="btn btn-danger w-100 fw-bold">Hủy</div>
                        </div>
                        <div class="col-4">
                            <div style="border-radius: 0;" class="btn btn-success w-100 fw-bold" onclick="$(\'#confirmTable'.$table->id.'\').submit()" >Xác Nhận</div>
                        </div>
                    </div>
                </div>
            </div>
            ';
        }
        if(count($unconfirmTableList) == 0) 
            echo '<h5 class="text-center">
                    <span style="color: #da5619;">CHƯA CÓ ĐẶT BÀN</span>
                    <hr>
                </h5>';
    ?>
    
    
</div>

