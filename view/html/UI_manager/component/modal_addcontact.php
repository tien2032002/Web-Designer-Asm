<div class="modal fade" id="modal_addcontact" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Điền Thông Tin Liên Hệ</h5>
      </div>
      <div class="modal-body">
        <form method='post' action="add_contact" id="add_contact_form">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group mt-3">
                        <label for="platform" style="font-weight: 700;">PLATFORM</label>
                        <div class="input-group">
                            <input type="text" class="form-control mt-3" style="border-radius: 0;"
                                    id="platform" name="platform" >
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="ic" style="font-weight: 700;">THẺ ICON</label>
                        <div class="input-group">
                            <input type="text" class="form-control mt-3" style="border-radius: 0;"
                                    id="ic" name="ic" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                <div class="form-group mt-3">
                        <label for="link" style="font-weight: 700;">LINK PLATFORM</label>
                        <div class="input-group">
                            <input type="text" class="form-control mt-3" style="border-radius: 0;"
                                    id="link" name="link" >
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-success" onclick="$('#add_contact_form').submit()">Thêm Liên Hệ</button>
      </div>
    </div>
  </div>
</div>