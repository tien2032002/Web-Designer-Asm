<div class="modal fade" id="modal_deleteproduct<?php echo $product->id;?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Xóa Món Ăn</h5>
      </div>
      <div class="modal-body">
            Bạn có chắc chắn muốn xóa?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
        <a href="/delete_product?id=<?php echo $product->id;?>"><button type="button" class="btn btn-danger">Xóa</button></a>
      </div>
    </div>
  </div>
</div>