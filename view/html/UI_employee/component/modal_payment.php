<style>
    .btn-payment{
        background-color: rgb(224, 60, 1);
        color: white;
    }
    .btn-payment:hover{
        background-color: rgb(180, 52, 5);
        color: white;
    }
</style>
<div class="modal fade" id="modal_payment" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Xác Nhận Thanh Toán</h5>
      </div>
      <div class="modal-body">
            <h6>Đơn hàng này đã được thanh toán?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-payment">Xác Nhận</button>
      </div>
    </div>
  </div>
</div>