<div class="tab-pane active" id="profile">
    <form method='post' action='index.php?controller=user&action=change_info&id=<?php echo $userObj->id ?>' enctype="multipart/form-data">
        <div class="card p-4">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo $userObj->image ?>.jpg" alt="avatar"
                    style="width: 100%; object-fit: cover; border-radius: 50%;"
                    >
                </div>
                <div class="col-md-6 mt-4">
                    <div class="row mt-2">
                        <div class="col-md-12 d-flex">
                            <h3 class="me-4"><?php echo $userObj->name ?></h3>
                            <i class="bi bi-geo-alt mt-1 me-1"></i>
                            <h6 class="mt-2"><?php echo $userObj->address ?></h6>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="custom-file mt-4">
                            <label class="custom-file-label" for="customFile">
                                <h6>Change your avatar</h6>
                            </label><br>
                                <input type="file" class="custom-file-input mt-2" id="customFile" name='avatar'>
                                <p class='text-danger'>
                                    <?php
                                        if (isset($uploadErr))
                                            switch ($uploadErr) {
                                                case 'notImage': 
                                                    echo 'Không đúng định dạng ảnh!';
                                                    break;
                                                default: break;
                                            }
                                    ?>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                
                    <h5>THÔNG TIN TÀI KHOẢN</h5>
                    <div class="row mt-3">
                        <div class="form-group col-md-6">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control mt-2" id="name" value="<?php echo $userObj->name ?>" name='name'>
                            <p class='text-danger'>
                                <?php
                                    if (isset($nameErr))
                                        switch ($nameErr) {
                                            case 'length': 
                                                echo 'Tên phải có độ dài từ 2-30 ký tự!';
                                                break;
                                            default: break;
                                        }
                                ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Địa Chỉ</label>
                            <input type="text" class="form-control mt-2" id="address" value="<?php echo $userObj->address ?>" name='address'>
                            <p class='text-danger'>
                                <?php
                                    if (isset($addressErr))
                                        switch ($addressErr) {
                                            case 'length': 
                                                echo 'Địa chỉ phải có độ dài từ 2-30 ký tự!';
                                                break;
                                            default: break;
                                        }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-md-6">
                            <label for="phone">Số Điện Thoại</label>
                            <input type="tel" class="form-control mt-2"id="phone" value="<?php echo $userObj->phone ?>" name='phone'>
                            <p class='text-danger'>
                                <?php
                                    if (isset($phoneErr))
                                        switch ($phoneErr) {
                                            case 'length': 
                                                echo 'Số điện thoại phải có độ dài từ 8-16 số!';
                                                break;
                                            case 'hasUsed':
                                                echo 'Số điện thoại đã được sử dụng!';
                                                break;
                                            default: break;
                                        }
                                ?>
                            </p>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control mt-2" id="email" value="<?php echo $userObj->email ?>" name='email'>
                        <p class='text-danger'>
                            <?php
                                if (isset($emailErr))
                                    switch ($emailErr) {
                                        case 'missing': 
                                            echo 'Không được để trống email!';
                                            break;
                                        case 'hasUsed':
                                            echo 'Email đã được sử dụng!';
                                            break;
                                        default: break;
                                    }
                            ?>
                        </p>
                    </div>
                    <div class="form-group mt-3">
                        <label for="gender">Giới Tính</label><br>
                        <div class="form-check-inline mt-2">
                            <label>
                                <input type="radio" class="form-check-input" <?php echo ($userObj->gender == 'Nam')?'checked':''; ?> name="gender" value="Nam" required>
                                <span style="font-weight: 400;">Nam</span>
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label>
                                <input type="radio" class="form-check-input" name="gender" <?php echo ($userObj->gender != 'Nam')?'checked':''; ?> value="Nữ" required>
                                <span style="font-weight: 400;">Nữ</span>
                            </label>
                        </div>
                    </div>
                    
                    <h5 class="mt-5">THAY ĐỔI MẬT KHẨU</h5>
                    <div class="form-group mt-3">
                        <label for="password">Mật Khẩu Cũ</label>
                        <input type="password" class="form-control mt-2" id="password" placeholder="Nhập mật khẩu cũ" name='oldPassword'>
                        <p class='text-danger'>
                            <?php
                                if (isset($emailErr))
                                    switch ($emailErr) {
                                        case 'wrong old password': 
                                            echo 'Sai mật khẩu cũ';
                                            break;
                                        case 'wrong confirm password':
                                            echo 'Xác nhận mật khẩu không khớp!';
                                            break;
                                        default: break;
                                    }
                            ?>
                        </p>
                    </div>
                    <div class="form-group mt-3">
                        <label for="newpassword">Mật Khẩu Mới</label>
                        <input type="password" class="form-control mt-2" id="newpassword" placeholder="Nhập mật khẩu mới" name='newPassword'>
                    </div>
                    <div class="form-group mt-3">
                        <label for="newpassword_confirm">Xác Nhận Mật Khẩu</label>
                        <input type="password" class="form-control mt-2" id="newpassword_confirm" placeholder="Nhập mật khẩu mới" name='newPassword2'>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="submit" class="btn mt-5">Lưu Thay Đổi</button>
                        </div>
                    </div>
                
            </div>
        </div>
    </form>
</div>