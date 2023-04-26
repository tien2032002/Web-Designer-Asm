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

<!-- Style Cart Dropdown -->
<style>
    #cart-popup {
        position:absolute;
        top: 65px;
        background-color: #ffffff;
        z-index: 100;
        width: 360px;
        border: 1px solid rgba(0, 0, 0, 0.11);
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.144);
        display:none;
        min-height: 200px;
    }
    #cart-popup:after {
        position:absolute;
        bottom: 100%;
        left: 85%;
        border: 12px solid transparent;
        width: 24px;
        content: "";
        border-bottom-color: #ffffff;
        pointer-events: none;
    }

    #cart-popup .list-group .list-group-item{
        padding: 10px 0px 10px 0px;
        border: 0;
    }
    #cart-popup .list-group .list-group-item:hover{
        background-color: #f2f2f2b9;
        color: black;
    }
    #cart-popup .list-group .list-group-item img{
        margin-right: 10px;
        width: 20%;
    }
    .searchBar{
        display: none;
        width: 100%;     
        position: absolute;
        top: 100%;
        z-index:99;
        background-color: #fff;
        border: solid 1px #ccc;
    }

    #popup{
        z-index: 0;
        position: absolute;
        background-color: rgba(0, 0, 0, 0);
        width: 66px;
        top:57px;
        height: 10px;
    }

    .quantity-item{
        font-size: 12px;
        font-weight: 400;
        color: #868484;
    }
    .price-item{
        color: rgba(224, 60, 1, 0.781);
        font-weight: 500;
        margin-left: auto;
    }

    #cart-popup div a{
        text-decoration: none;
    }

    a .cart-btn{
        color: white;
        border: 1px solid rgb(224, 60, 1);
        background-color: rgb(224, 60, 1);
        padding: 5px;
    }
    a .cart-btn:hover{
        background-color: rgb(194, 54, 3);
    }

    .alert-cart{
        text-align: center;
        margin-top: 20%;
        font-weight: 500;
        color: rgb(224, 60, 1);
    }

    
</style>
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
                    <form class="form-inline " style="margin-right: 1%;">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for products" style="border-radius: 0;" id="searchKey" 
                            onkeyup="getSearchResult()" onfocus="showSearchResult()">
                            <div class="input-group-append">
                                <button class="btn border btn-outline-secondary" type="button" style="height: 100%">
                                <i class="fa fa-search"></i>
                                </button>
                            </div>
                            <div class="d-none searchBar" id="search" >
                                <script>
                                    var searchElement = document.getElementById('search')
                                    var searchPatternElement = document.getElementById('searchKey')
                                    console.log(document.getElementById('searchKey').value);
                                    function getSearchResult() {
                                        var link = "/search_result?pattern=" + searchPatternElement.value
                                        console.log(link)
                                        $.ajax({
                                            // The link we are accessing.
                                            url: link,
                                                
                                            // The type of request.
                                            type: "get",
                                                
                                            // The type of data that is getting returned.
                                            dataType: "html",

                                            success: function( strData ){
                                                console.log(strData)
                                                document.getElementById("search").innerHTML = strData;
                                                // console.log("do")

                                            }
                                        });
                                    }

                                    function showSearchResult() {
                                        searchElement.className = "searchBar d-block"
                                    }

                                    function hideSearchResult(){
                                        searchElement.className = "searchBar d-none"
                                    }
                                </script>
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
                    <div class="d-flex justify-content-end" onmouseover="showCartPopup()" onmouseout="hideCartPopup()">
                        <a
                            href="/login" class="btn border btn-outline-secondary" 
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