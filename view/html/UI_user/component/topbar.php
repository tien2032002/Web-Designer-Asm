<!-- Style Topbar -->
<style>
    @media (min-width: 320px) {
        .row .col-mobile-1{
            flex: 0 0 auto;
            width: 10%;
        }
        .row .col-mobile-2{
            flex: 0 0 auto;
            width: 20%;
        }
        .row .col-mobile-3{
            flex: 0 0 auto;
            width: 30%;
        }
        .row .col-mobile-4{
            flex: 0 0 auto;
            width: 40%;
        }
        .row .col-mobile-5{
            flex: 0 0 auto;
            width: 50%;
        }
        .row .col-mobile-6{
            flex: 0 0 auto;
            width: 60%;
        }
        .row .col-mobile-7{
            flex: 0 0 auto;
            width: 70%;
        }
        .row .col-mobile-8{
            flex: 0 0 auto;
            width: 80%;
        }
        .row .col-mobile-9{
            flex: 0 0 auto;
            width: 90%;
        }
        .row .col-mobile-10{
            flex: 0 0 auto;
            width: 100%;
        }
    }
    @media (min-width: 768px) {
        .row .col-tablet-1{
            flex: 0 0 auto;
            width: 10%;
        }
        .row .col-tablet-2{
            flex: 0 0 auto;
            width: 20%;
        }
        .row .col-tablet-3{
            flex: 0 0 auto;
            width: 30%;
        }
        .row .col-tablet-4{
            flex: 0 0 auto;
            width: 40%;
        }
        .row .col-tablet-5{
            flex: 0 0 auto;
            width: 50%;
        }
        .row .col-tablet-6{
            flex: 0 0 auto;
            width: 60%;
        }
        .row .col-tablet-7{
            flex: 0 0 auto;
            width: 70%;
        }
        .row .col-tablet-8{
            flex: 0 0 auto;
            width: 80%;
        }
        .row .col-tablet-9{
            flex: 0 0 auto;
            width: 90%;
        }
        .row .col-tablet-10{
            flex: 0 0 auto;
            width: 100%;
        }
    }

    .btn .badge{
        color: black;
    }
    .form-control {
        border-radius: 0;
    }
    .input-group-append .btn {
        border-radius: 0;   
        color: rgb(179, 93, 107);
    }
    .navbar_ic .btn{
        color: rgb(179, 93, 107);
    }
</style>
<div class="container-fluid">
    <div class="row align-items-center" style="background-color: #f2f2f2;  height:80px;">
        <div class="col-lg-3 d-none d-lg-block px-5">
            <a href="/home_page_user">
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
                    <button type="button" class="btn border btn-outline-secondary"
                        data-toggle="modal" data-target="#exampleModal"
                        style="margin-right: 1%; border-radius: 0;">
                        <div class="d-flex justify-content-end">
                            <i class="bi bi-calendar-plus me-2"></i>
                            <span style="font-weight: 500; color: black">Đặt Bàn</span>
                        </div>
                    </button>
                    <!-- Modal -->
                    <?php include 'modal_booking.php'; ?>
                    <!-- Modal -->

                    <!-- Cart Popup Start -->
                    <div id="cart_drop">
                        <script>
                            loadXMLDoc('index.php?controller=user&action=cart_dropdown', 'cart_drop');
                        </script>
                    </div>
                    <!-- Cart Popup End -->
                </div>
            </div>
        </div>
    </div>
</div>