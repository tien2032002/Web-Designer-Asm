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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thông Tin Đặt Bàn</h5>
      </div>
      <div class="modal-body">
            <form action='#' method='post'>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group mt-3">
                            <label for="bookingDate" style="font-weight: 700;">NGÀY ĐẶT BÀN</label>
                            <div class="input-group">
                                <input type="date" class="form-control mt-3" 
                                        id="bookingDate" style="border-radius: 0;"
                                        min="2023-04-14"
                                        name="bookingDate" >
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
                            <label for="bookingTime" style="font-weight: 700;">GIỜ ĐẶT BÀN</label>
                            <div class="input-group">
                                <select name="bookingTime" class="form-control mt-3"  
                                        style="border-radius: 0;" id="bookingTime">
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-cancel" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-booking">Đặt Bàn</button>
      </div>
    </div>
  </div>
</div>