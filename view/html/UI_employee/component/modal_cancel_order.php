<div class="modal fade" id="modal_cancel_order<?php echo $table->id?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Xác Nhận Hủy Đơn</h5>
      </div>
      <div class="modal-body">
            <h6>Bạn có chắc muốn hủy đơn hàng này?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
        <a href="cancel_order?tableId=<?php echo $table->id; ?>"><button type="button" class="btn btn-secondary">Xác Nhận</button></a>
      </div>
    </div>
  </div>
</div>