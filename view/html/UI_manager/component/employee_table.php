
<style>
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        margin-top: 1em;
        padding-top: 0.1em;
        padding-bottom: 0.1em;
        font-size: 0.7em;
    }
</style>
<div class="table-responsive">
    <table id="employee-table" class="table table-striped" >
        <thead>
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Tên</th>
                <th class="text-center">Giới tính</th>
                <th class="text-center">CMND</th>
                <th class="text-center">Địa chỉ</th>
                <th class="text-center">Email</th>
                <th class="text-center">SDT</th>
                <th class="text-center">Button</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $employeeList = json_decode($employeeList);
                foreach($employeeList as $employee) {
                    $employee = json_decode($employee);

                    // Update Button EDIT DELETE
                    echo '
                    <tr>
                        <td class="text-center">'.$employee->id.'</td>
                        <td class="text-center">'.$employee->name.'</td>
                        <td class="text-center">'.$employee->gender.'</td>
                        <td class="text-center">'.$employee->cmnd.'</td>
                        <td class="text-center">'.$employee->address.'</td>
                        <td class="text-center">'.$employee->email.'</td>
                        <td class="text-center">'.$employee->phone.'</td>
                        <td>             
                            <button class="btn btn-sm btn-dark" data-target="#confirm-edit-modal-'.$employee->id.'">Edit</button>
                            <div class="modal fade" id="confirm-edit-modal-'.$employee->id.'" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5>Chỉnh sửa thông tin nhân viên</h5>
                                    </div>
                                    <div class="modal-body">
                                    <form method="POST" action="index.php?controller=manager&action=update_employee&ID='.$employee->id.'" id="updateEmployee'.$employee->id.'">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="ID" style="font-weight: 500;">MÃ NHÂN VIÊN</label>
                                                    <input type="number" class="form-control mt-2" id="ID" name="ID"
                                                        placeholder="Enter ID" required value='.$employee->id.'>
                                                        <p class="text-danger">';
                                                    
                                                    if (isset($errResultUpd))
                                                    switch ($errResultUpd->idErrUpd) {
                                                        case "duplicate": 
                                                        echo "ID đã được đăng ký!";
                                                        break;
                                                        case 'missing':
                                                        echo "Vui lòng nhập ID nhân viên!";
                                                        break;
                                                        default: break;
                                                        }
                                                    
                                                echo '
                                                </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" style="font-weight: 500;">TÊN</label>
                                                    <input type="text" class="form-control mt-2" id="name" name="name" value="'.$employee->name.'"
                                                        placeholder="Enter name" required>
                                                        <p class="text-danger">';
                                                    
                                                        if (isset($errResultUpd))
                                                        switch ($errResultUpd->nameErrUpd) {
                                                        case "invalid": 
                                                            echo "Tên không hợp lệ";
                                                            break;
                                                        default: break;
                                                        }
                                                    
                                                    
                                                echo '
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="CMND" style="font-weight: 500;">CMND</label>
                                                    <input type="text" class="form-control mt-2" id="CMND" name="CMND" value="'.$employee->cmnd.'"
                                                        placeholder="Enter CMND" required>
                                                    <p class="text-danger">';
                                                
                                                    if (isset($errResultUpd))
                                                    switch ($errResultUpd->cmndErrUpd) {
                                                        case "invalid": 
                                                        echo "CMND không hợp lệ";
                                                        break;
                                                        default: break;
                                                    }
                                                    
                                                    
                                                echo '
                                                </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email" style="font-weight: 500;">EMAIL</label>
                                                        <input type="email" class="form-control mt-2" id="email" name="email" value="'.$employee->email.'"
                                                            placeholder="Enter email" required>
                                                    <p class="text-danger">';
                                        
                                                    if (isset($errResultUpd))
                                                    switch ($errResultUpd->emailErrUpd) {
                                                        case "duplicate": 
                                                        echo "Email đã được đăng ký!";
                                                        break;
                                                        case 'invalid':
                                                        echo "Email không hợp lệ!";
                                                        break;
                                                        default: break;
                                                        }
                                                    
                                                    
                                                echo '
                                                </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone" style="font-weight: 500;">SỐ ĐIỆN THOẠI</label>
                                                    <input type="tel" class="form-control mt-2" id="phone" name="phone" value="'.$employee->phone.'"
                                                        placeholder="Enter phone number" required>
                                                    <p class="text-danger">';
                                    
                                                    if (isset($errResultUdp))
                                                    switch ($errResultUpd->phoneErrUpd) {
                                                        case "duplicate": 
                                                        echo "Số điện thoại đã được đăng ký!";
                                                        break;
                                                        case 'invalid':
                                                        echo "Số điện thoại không hợp lệ!";
                                                        break;
                                                        default: break;
                                                        }
                                                    
                                                    
                                                echo '
                                                </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password" style="font-weight: 500;">MẬT KHẨU</label>
                                                        <input type="password" class="form-control mt-2" id="password'.$employee->id.'" name="password" value="'.$employee->password.'"
                                                            placeholder="Enter password" required>
                                                        <p class="text-danger">';
                                
                                                        if (isset($errResultUpd))
                                                            switch ($errResultUpd->passwordErrUpd) {
                                                            case "invalid": 
                                                                echo "Mật khẩu không hợp lệ";
                                                                break;
                                                            default: break;
                                                            }
                                                        
                                                        
                                                    echo '
                                                        </p>
                                                        <input type="checkbox" onclick="showPassword(\'password'.$employee->id.'\')">Show Password
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address" style="font-weight: 500;">ĐỊA CHỈ</label>
                                                        <input type="text" class="form-control mt-2" id="address" name="address" value="'.$employee->address.'"
                                                            placeholder="Enter address" required>
                                                        <p class="text-danger">';
                            
                                                        if (isset($errResultUpd))
                                                        switch ($errResultUpd->addressErrUpd) {
                                                            case "invalid": 
                                                            echo "Địa chỉ không hợp lệ";
                                                            break;
                                                            default: break;
                                                            }
                                                        
                                                        
                                                    echo '
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gender" style="font-weight: 500;">GIỚI TÍNH</label><br>
                                                    <div class="form-check-inline mt-1">
                                                        <label>
                                                            <input type="radio" class="form-check-input" name="gender" value="Nam" required ';if ($employee->gender=='Nam') echo 'checked'; echo '>Nam
                                                        </label>
                                                    </div>
                                                    <div class="form-check-inline">
                                                        <label>
                                                            <input type="radio" class="form-check-input" name="gender" value="Nữ" required ';if ($employee->gender=='Nữ') echo 'checked'; echo '>Nữ
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
                                        <button type="button" class="btn btn-primary" onclick="document.getElementById(\'updateEmployee'.$employee->id.'\').submit();">Lưu</button></a>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <button class="btn btn-sm btn-danger" data-target="#confirm-delete-modal-'.$employee->id.'">Delete</button>
                            <div class="modal fade" id="confirm-delete-modal-'.$employee->id.'" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5>Xác nhận xóa</h5>
                                    </div>
                                    <div class="modal-body">
                                    Bạn có chắc chắn muốn xóa thông tin nhân viên?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
                                        <a href="index.php?controller=manager&action=delete_employee&employeeID='.$employee->id.'"><button type="button" class="btn btn-danger">Xóa</button></a>
                                    </div>
                                </div>
                                </div>
                            </div>                
                        </td>
                    </tr>';
                }
            ?>
        </tbody>
        <tfoot>
        <tr>
            <th>Mã Nhân Viên</th>
            <th>Tên</th>
            <th>Giới tính</th>
            <th>CMND</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Button</th>
        </tr>
        </tfoot>
    </table>
    <!-- Update Button Add -->
    <button id="add-btn" class="btn btn-dark mt-2" data-target="#confirm-add-modal">Add Employee</button>
    <div class="modal fade" id="confirm-add-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Thêm thông tin nhân viên</h5>
            </div>
            <div class="modal-body">
            <form id='addEmployee' method="POST" action="/add_employee">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="ID" style="font-weight: 500;">MÃ NHÂN VIÊN</label>
                    <input type="number" class="form-control mt-2" id="ID" name="ID" <?php if (isset($_POST['ID'])) echo "value='".$_POST['ID']."'" ?>
                            placeholder="Enter ID" required>
                    <p class='text-danger'>
                        <?php
                        if (isset($errResultAdd))
                        switch ($errResultAdd->idErrAdd) {
                            case "duplicate": 
                            echo "ID đã được đăng ký!";
                            break;
                            case 'missing':
                            echo "Vui lòng nhập ID nhân viên!";
                            break;
                            default: break;
                            }
                        ?>
                    </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="name" style="font-weight: 500;">TÊN</label>
                    <input type="text" class="form-control mt-2" id="name" name="name" <?php if (isset($_POST['name'])) echo "value='".$_POST['name']."'" ?>
                            placeholder="Enter name" required>
                            <p class='text-danger'>
                            <?php
                            if (isset($errResultAdd))
                                switch ($errResultAdd->nameErrAdd) {
                                case "invalid": 
                                    echo "Tên không hợp lệ";
                                    break;
                                default: break;
                                }
                            ?>
                            </p>
                    </div>
                </div>
                </div>
                <div class="row mt-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="CMND" style="font-weight: 500;">CMND</label>
                        <input type="text" class="form-control mt-2" id="CMND" name="CMND" <?php if (isset($_POST['CMND'])) echo "value='".$_POST['CMND']."'" ?>
                            placeholder="Enter CMND" required>
                        <p class='text-danger'>
                        <?php
                        if (isset($errResultAdd))
                            switch ($errResultAdd->cmndErrAdd) {
                            case "invalid": 
                                echo "CMND không hợp lệ";
                                break;
                            default: break;
                            }
                        ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="email" style="font-weight: 500;">EMAIL</label>
                    <input type="email" class="form-control mt-2" id="email" name="email" <?php if (isset($_POST['email'])) echo "value='".$_POST['email']."'" ?>
                            placeholder="Enter email" required>
                    <p class='text-danger'>
                        <?php
                        if (isset($errResultAdd))
                        switch ($errResultAdd->emailErrAdd) {
                            case "duplicate": 
                            echo "Email đã được đăng ký!";
                            break;
                            case 'invalid':
                            echo "Email không hợp lệ!";
                            break;
                            default: break;
                            }
                        ?>
                    </p>
                    </div>
                </div>
                </div>
                <div class="row mt-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone" style="font-weight: 500;">SỐ ĐIỆN THOẠI</label>
                        <input type="tel" class="form-control mt-2" id="phone" name="phone" <?php if (isset($_POST['phone'])) echo "value='".$_POST['phone']."'" ?>
                            placeholder="Enter phone number" required>
                        <p class='text-danger'>
                            <?php
                            if (isset($errResultAdd))
                            switch ($errResultAdd->phoneErrAdd) {
                                case "duplicate": 
                                echo "Số điện thoại đã được đăng ký!";
                                break;
                                case 'invalid':
                                echo "Số điện thoại không hợp lệ!";
                                break;
                                default: break;
                                }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password" style="font-weight: 500;">MẬT KHẨU</label>
                            <input type="password" class="form-control mt-2" id="password-add" name="password" <?php if (isset($_POST['password'])) echo "value='".$_POST['password']."'" ?>
                                placeholder="Enter password" required>
                        <p class='text-danger'>
                            <?php
                            if (isset($errResultAdd))
                            switch ($errResultAdd->passwordErrAdd) {
                                case "invalid": 
                                echo "Mật khẩu không hợp lệ";
                                break;
                                default: break;
                                }
                            ?>
                        </p>
                        <input type="checkbox" onclick="showPassword('password-add')">Show Password
                    </div>
                </div>
                </div>                                          
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address" style="font-weight: 500;">ĐỊA CHỈ</label>
                                <input type="text" class="form-control mt-2" id="address" name="address" <?php if (isset($_POST['address'])) echo "value='".$_POST['address']."'" ?>
                                    placeholder="Enter address" required>
                            <p class='text-danger'>
                            <?php
                            if (isset($errResultAdd))
                                switch ($errResultAdd->addressErrAdd) {
                                case "invalid": 
                                    echo "Địa chỉ không hợp lệ";
                                    break;
                                default: break;
                                }
                            ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender" style="font-weight: 500;">GIỚI TÍNH</label><br>
                            <div class="form-check-inline mt-1">
                                <label>
                                    <input type="radio" class="form-check-input" name="gender" value="nam" <?php if (!isset($_POST['gender'])) echo "checked"; else {if ($_POST['gender']=='nam') echo "checked";} ?> required>Nam
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label>
                                    <input type="radio" class="form-check-input" name="gender" value="nữ" required  <?php if(isset($_POST['gender']) && $_POST['gender'] == "nữ") echo "checked";?>>Nữ
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
            <button type="button" class="btn btn-primary" onclick='document.getElementById("addEmployee").submit();'>Thêm</button>
        </div>
        </div>
    </div>               
</div>