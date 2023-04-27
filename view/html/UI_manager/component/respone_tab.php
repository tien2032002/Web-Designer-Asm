<div class="row d-flex justify-content-center m-4">
    <div class="card text-dark">
        <h4 class="mt-3 ms-3">Thông Tin Nhà Hàng</h4>
        <div class="h2 p-3">
            <img class="border border-light p-2" src="view\images\utensils-solid.svg" style="width: 50px" alt="restaurantIcon">
            DISFRUTAR
        </div>
        <div class="row p-3">
            <div class="col-7">
                        Lorem Ipsum is simply dummy text
                        Lorem Ipsum is simply dummy text
                        Lorem Ipsum is simply dummy text
            </div>
            <div class="col-5">
                <ul class="list-unstyled">
                    <li class="d-flex align-items-center mt-2">
                        <div style="width: 30px; height: 30px" class="d-flex justify-content-center align-items-center border rounded-circle me-2 p-1">
                            <i style="color: #b38b91" class="'.$contact->icon.'"></i>
                        </div>
                        
                        <p class="mb-0">link</p>
                    </li>
                    <li class="d-flex align-items-center mt-2">
                        <div style="width: 30px; height: 30px" class="d-flex justify-content-center align-items-center border rounded-circle me-2 p-1">
                            <i style="color: #b38b91" class="'.$contact->icon.'"></i>
                        </div>
                        
                        <p class="mb-0">link</p>
                    </li>
                    <li class="d-flex align-items-center mt-2">
                        <div style="width: 30px; height: 30px" class="d-flex justify-content-center align-items-center border rounded-circle me-2 p-1">
                            <i style="color: #b38b91" class="'.$contact->icon.'"></i>
                        </div>
                        <p class="mb-0">link</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="d-flex mb-4">
            <button data-toggle="modal" data-target="#modal_addcontact"
                class="btn btn-success" style="border-radius:0; width:33%">Thêm Liên Hệ</button>
                <?php require "modal_addcontact.php"; ?>
            <button data-toggle="modal" data-target="#modal_editcontact"
                class="btn btn-primary" style="border-radius:0; width:33%; margin: 0 2% 0 2%">Sửa Liên Hệ</button>
                <?php require "modal_editcontact.php"; ?>
            <button data-toggle="modal" data-target="#modal_deletecontact"
                class="btn btn-danger" style="border-radius:0; width:33%">Xóa Liên Hệ</button>
                <?php require "modal_deletecontact.php"; ?>
        </div>
    </div> 
    <div class="card text-dark mt-4">
        <h4 class="mt-3 ms-3">Phản Hồi Mới Nhất</h4>
        <hr class="mt-0">
        <div class="ms-3 d-flex">
            <div><span class="fw-bold">Guest: </span>Minh Lee</div>
            <div class="ms-4"><span class="fw-bold">Email: </span>minh.le106@hcmut.edu.vn</div>
            <div class="ms-4 text-muted">March 07, 2021</div>
        </div>
        <div class="ms-3 mb-3 mt-3">
            Lorem Ipsum is simply dummy text
            Lorem Ipsum is simply dummy text
            Lorem Ipsum is simply dummy text
        </div>
        <hr class="mt-0">
        <div class="ms-3 d-flex">
            <div><span class="fw-bold">Guest: </span>Minh Lee</div>
            <div class="ms-4"><span class="fw-bold">Email: </span>minh.le106@hcmut.edu.vn</div>
            <div class="ms-4 text-muted">March 07, 2021</div>
        </div>
        <div class="ms-3 mb-3 mt-3">
            Lorem Ipsum is simply dummy text
            Lorem Ipsum is simply dummy text
            Lorem Ipsum is simply dummy text
        </div>
        <hr class="mt-0">
        <div class="ms-3 d-flex">
            <div><span class="fw-bold">Guest: </span>Minh Lee</div>
            <div class="ms-4"><span class="fw-bold">Email: </span>minh.le106@hcmut.edu.vn</div>
            <div class="ms-4 text-muted">March 07, 2021</div>
        </div>
        <div class="ms-3 mb-3 mt-3">
            Lorem Ipsum is simply dummy text
            Lorem Ipsum is simply dummy text
            Lorem Ipsum is simply dummy text
        </div>
    </div>
    
</div>

    