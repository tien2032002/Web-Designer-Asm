<style>
    div.modal-footer > button.btn-cancel{
        background-color: black;
        color: white;
    }
    div.modal-footer > button.btn-booking{
        background-color: rgb(179, 93, 107);
        color: white;
    }
</style>
<div class="modal fade" id="modal_table" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Thông Tin Đơn Hàng</h5>
      </div>
      <div class="modal-body">
            <form action='/add_table' method='post' id='addTableForm'>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group mt-3">
                            <label for="date" style="font-weight: 700;">NGÀY TẠO ĐƠN</label>
                            <div class="input-group">
                                <input type="date" class="form-control mt-3" 
                                        id="date" style="border-radius: 0;"
                                        min="2023-04-14"
                                        name="date" >
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="quantity" style="font-weight: 700;">SỐ LƯỢNG KHÁCH</label>
                            <div class="input-group">
                                <input type="number" min="1" class="form-control mt-3" 
                                        id="quantity" style="border-radius: 0;"
                                        placeholder="Enter your quantity"
                                        name="quantity">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group mt-3">
                            <label for="bookingTime" style="font-weight: 700;">GIỜ TẠO ĐƠN</label>
                            <input type="time" class="form-control mt-3" 
                                id="time" style="border-radius: 0;"
                                placeholder="Enter order time"
                                name="time">
                        </div>
                        <div class="form-group mt-3">
                            <label for="table" style="font-weight: 700;">ID BÀN</label>
                            <select class="form-control mt-3" style="border-radius: 0;" id="table" name="table" required>
                            <?php
                                for ($i=1;$i<=16;$i++){
                                    if (!in_array($i, $inuseTableNumber)) echo '<option value="'.$i.'">Bàn '.$i.'</option>';
                                }
                            ?>
                                
                            </select>
                        </div>
                    </div>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-cancel" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-booking" onclick='document.getElementById("addTableForm").submit()'>Tạo Đơn</button>
      </div>
    </div>
  </div>
</div>