<div class="row bg_login">
    <div class="col-sm-6">
        <div class="frame_login">
                <h4 style="font-weight: 700;">ĐĂNG NHẬP VỚI TƯ CÁCH QUẢN TRỊ VIÊN</h4>
                <h6 class="mt-3 text-muted text-white" style="font-weight: 500;">Enter your details to login</h6>
                <form action='manager/login' method='post'>
                    <div class="form-group mt-5">
                        <label for="phonenumber" style="font-weight: 700;">SỐ ĐIỆN THOẠI</label>
                        <div class="input-group">
                            <input type="text" class="form-control mt-3" name='phone'
                                    id="phonenumber" style="border-radius: 0; padding-left: 40px;" 
                                    placeholder="Enter your phone number">
                            <span class="input-group-addon" 
                                    style="position: absolute; left: 15px; top: 23px;">
                                    <i class="fa fa-phone text-success"></i>
                            </span>
                        </div>
                        <p class='text-danger'>
                            <?php
                                switch ($loginErr) {
                                    case "missingBoth":
                                        echo "Hãy nhập số điện thoại!";
                                        break;
                                    case "missingPhone":
                                        echo "Hãy nhập số điện thoại!";
                                        break;
                                    case "phoneErr":
                                        echo "Số điện thoại chưa được đăng ký!";
                                        break;
                                    default: 
                                        break;
                                }
                            ?>
                        </p>
                        </div>                                  
                    <div class="form-group mt-3">
                        <label for="password" style="font-weight: 700;">MẬT KHẨU</label>
                        <div class="input-group">
                            <input type="password" class="form-control mt-3" name='password'
                                    id="password" style="border-radius: 0; padding-left: 40px;"
                                    placeholder="Enter your password">
                            <span class="input-group-addon" 
                                    style="position: absolute; left: 15px; top: 23px;">
                                    <i class="fa fa-lock text-success"></i>
                            </span>
                        </div>

                    </div>
                    <p class='text-danger'>
                            <?php
                                switch ($loginErr) {
                                    case "missingBoth":
                                        echo "Hãy nhập mật khẩu!";
                                        break;
                                    case "missingPassword":
                                        echo "Hãy nhập mật khẩu!";
                                        break;
                                    case "passwordErr":
                                        echo "Mật khẩu không chính xác!";
                                        break;
                                    default: 
                                        break;
                                }
                            ?>
                        </p>
                        <!-- <div class="form-group mt-3">
                            <label for="role" style="font-weight: 700;">ĐĂNG NHẬP DÀNH CHO</label><br>
                            <div class="form-check-inline mt-2">
                                <label>
                                    <input type="radio" class="form-check-input" name="role" value="manager" required> Manager
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label>
                                    <input type="radio" class="form-check-input" name="role" value="employee" required> Employee
                                </label>
                            </div>
                        </div> -->
                    <button type="submit" class="btn btn-danger mt-4" 
                            style="min-width: 13%; border-radius: 0;">
                            Đăng Nhập
                    </button>
                </form>
        </div>
    </div>
</div>