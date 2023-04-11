<div class="container-fluid">
    <div class="row align-items-center" style="background-color: #f2f2f2;  height:80px;">
        <div class="col-lg-3 d-none d-lg-block px-5">
            <a href="index.php?controller=user&action=home_page_user">
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
                    <a href="#" class="btn border btn-outline-secondary" style="margin-right: 1%; border-radius: 0;">
                        <i class="fas fa-heart"></i>
                        <span class="badge">0</span>
                    </a>
                    <!-- Cart Popup Start -->
                    <?php include 'cart_dropdown.php'; ?>
                    <!-- Cart Popup End -->
                </div>
            </div>
        </div>
    </div>
</div>