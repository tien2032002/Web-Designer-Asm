<nav class="navbar navbar-expand-lg bg-light navbar-light p-2" style="height: 62px;">
    <a href="/home_page_user" class="d-block d-lg-none">
        <img src="view/images/logo.jpg" style="width: 100px;" alt="logo">
    </a>
    <button type="button" 
            class="navbar-toggler" 
            data-toggle="collapse" 
            data-target="#navbarCollapse"
            style="border-radius: 0;">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="/home_page_user" class="nav-item nav-link active">Trang Chủ</a>
            <a href="/menu" class="nav-item nav-link">Thực Đơn</a>
            <a href="/news" class="nav-item nav-link">Tin Tức</a>
            <a href="#" class="nav-item nav-link">Liên Hệ</a>
        </div>
        <div class="navbar-nav ml-auto nav_main">
            <div>
                <a href="/profile_user" class="nav-item nav-link">
                    <div style="display: inline-block;">
                        <div style="display: inline-block; margin-right: 10px;">
                            <img src="<?php echo $userObj->image?>.jpg" 
                                style="width: 30px; height: 30px; border-radius: 50%; 
                                        object-fit: cover; margin-bottom: 3px;" 
                                alt="avatar">
                        </div>
                        <div style="display: inline-block; font-weight: 500; margin-top: 7px;">
                            Chào, <?php echo $userObj->name;?>
                        </div>
                    </div>
                </a>
            </div>
            <div>
                <a href="/logout" class="nav-item nav-link">
                    <i class="bi bi-box-arrow-right text-dark"></i>
                    Đăng xuất
                </a>
            </div>
        </div>
    </div>
</nav>