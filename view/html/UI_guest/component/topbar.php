<div class="container-fluid">
    <div class="row align-items-center" style="background-color: #f2f2f2; height:80px;">
        <div class="col-lg-3 d-none d-lg-block px-5">
            <a href="home_page">
                <img src="view/images/logo.jpg" style="width: 150px;" alt="logo">
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-tablet-7 col-mobile-5">
                <form class="form-inline" style="margin-right: 1%;">
                    <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products" style="border-radius: 0;">
                    <div class="input-group-append">
                        <button class="btn border btn-outline-secondary" type="button">
                        <i class="fa fa-search"></i>
                        </button>
                    </div>
                    </div>
                </form>
                </div>
                <div class="col-tablet-3 col-mobile-5 navbar_ic d-flex justify-content-end">
                    <a href="#" class="btn border btn-outline-secondary" 
                        style="margin-right: 1%; border-radius: 0;">
                        <div class="d-flex justify-content-end mt-1">
                            <i class="fas fa-heart"></i>
                            <span class="badge">0</span>
                        </div>
                    </a>
                    <!-- Cart Popup Start -->
                    <div class="d-flex justify-content-end" onmouseover="showCartPopup()" onmouseout="hideCartPopup()">
                        <a
                            href="login" class="btn border btn-outline-secondary" 
                            style="margin-right: 1%; border-radius: 0;">
                            <div class="d-flex justify-content-end mt-1">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="badge">0</span>
                            </div>
                        </a>
                        <div id="popup"></div>
                        <div id="cart-popup" class="p-3">
                            <div class="alert-cart">Bạn phải đăng nhập<br>mới có thể sử dụng tính năng giỏ hàng!</div>
                        </div> 
                    </div>
                    <!-- Cart Popup End -->
                </div>
            </div>
        </div>
    </div>
</div>