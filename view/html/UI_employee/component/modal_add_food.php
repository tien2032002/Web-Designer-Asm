<div class="modal fade" id="modal_add_food" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Xác Nhận Thêm Món</h5>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group input-group">
              <input type="text" class="form-control " placeholder="Search for products" style="border-radius: 0;">
              <div class="input-group-append">
                  <button class="btn border btn-outline-secondary " type="button" style="border-radius: 0;">
                    <i class="fa fa-search"></i>
                  </button>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group mt-3">
                    <label for="food" style="font-weight: 700;">MÃ MÓN ĂN</label>
                    <div class="input-group">
                        <input type="text" min="1" class="form-control mt-1" 
                                id="food" style="border-radius: 0;"
                                placeholder="Enter your ID food"
                                name="food">
                    </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group mt-3">
                    <label for="quantity_food" style="font-weight: 700;">SỐ LƯỢNG</label>
                    <div class="input-group">
                        <input type="number" min="1" class="form-control mt-1" 
                                id="quantity_food" style="border-radius: 0;"
                                placeholder="Enter your quantity"
                                name="quantity_food">
                    </div>
                </div>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary">Thêm</button>
      </div>
    </div>
  </div>
</div>