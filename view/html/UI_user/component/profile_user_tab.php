<div class="tab-pane active" id="profile">
    <div class="card p-4">
        <div class="row">
            <div class="col-md-3">
                <img src="view/images/avt_user.jpg" alt="avatar"
                style="width: 100%; object-fit: cover; border-radius: 50%;"
                >
            </div>
            <div class="col-md-6 mt-4">
                <div class="row mt-2">
                    <div class="col-md-12 d-flex">
                        <h3 class="me-4">Minh Lee</h3>
                        <i class="bi bi-geo-alt mt-1 me-1"></i>
                        <h6 class="mt-2">Khánh Hòa</h6>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="custom-file mt-4">
                        <label class="custom-file-label" for="customFile">
                            <h6>Change your avatar</h6>
                        </label><br>
                        <input type="file" class="custom-file-input mt-2" id="customFile">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <form>
                <h5>THÔNG TIN TÀI KHOẢN</h5>
                <div class="row mt-3">
                    <div class="form-group col-md-6">
                        <label for="name">Email</label>
                        <input type="text" class="form-control mt-2" id="name" value="Minh Lee">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="address">Địa Chỉ</label>
                        <input type="text" class="form-control mt-2" id="address" value="Khánh Hòa">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-group col-md-6">
                        <label for="phone">Số Điện Thoại</label>
                        <input type="tel" class="form-control mt-2"id="phone" value="0123456789">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control mt-2" id="email" value="minh.le106@hcmut.edu.vn">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="gender">Giới Tính</label><br>
                    <div class="form-check-inline mt-2">
                        <label>
                            <input type="radio" class="form-check-input" name="gender" value="Nam" required>
                            <span style="font-weight: 400;">Nam</span>
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label>
                            <input type="radio" class="form-check-input" name="gender" value="Nữ" required>
                            <span style="font-weight: 400;">Nữ</span>
                        </label>
                    </div>
                </div>
                
                <h5 class="mt-5">THAY ĐỔI MẬT KHẨU</h5>
                <div class="form-group mt-3">
                    <label for="password">Mật Khẩu Cũ</label>
                    <input type="password" class="form-control mt-2" id="password" placeholder="Nhập mật khẩu cũ">
                </div>
                <div class="form-group mt-3">
                    <label for="newpassword">Mật Khẩu Mới</label>
                    <input type="password" class="form-control mt-2" id="newpassword" placeholder="Nhập mật khẩu mới">
                </div>
                <div class="form-group mt-3">
                    <label for="newpassword_confirm">Xác Nhận Mật Khẩu</label>
                    <input type="password" class="form-control mt-2" id="newpassword_confirm" placeholder="Nhập mật khẩu mới">
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-end">
                        <button type="submit" class="btn mt-5">Lưu Thay Đổi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>