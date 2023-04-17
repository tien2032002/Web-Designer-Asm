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
<div class="d-flex justify-content-end" onmouseover="showCartPopup()" onmouseout="hideCartPopup()">
    <a
        href="index.php?controller=user&action=view_cart" class="btn border btn-outline-secondary" 
        style="margin-right: 1%; border-radius: 0;">
        <div class="d-flex justify-content-end mt-1">
            <i class="fas fa-shopping-cart"></i>
            <span class="badge">0</span>
        </div>
    </a>
    <div id="popup"></div>
    <div id="cart-popup" class="p-3">
        <ul class="list-group">
            <li class="list-group-item d-flex align-items-center">
                <img src="https://beptueu.vn/hinhanh/tintuc/top-15-hinh-anh-mon-an-ngon-viet-nam-khien-ban-khong-the-roi-mat-1.jpg"
                        alt="products">
                <div class="inline-block">
                    <div class="name-item">Bánh Mì Đặc Biệt</div>
                    <div class="quantity-item">SL: 1</div>
                </div>
                <div class="price-item">30.000đ</div>
            </li>
            <li class="list-group-item d-flex align-items-center">
                <img src="https://cdnimg.vietnamplus.vn/uploaded/ngtnnn/2022_07_27/2707banhxeo.jpg"
                        alt="products">
                <div class="inline-block">
                    <div class="name-item">Bánh Xèo Tôm Thịt</div>
                    <div class="quantity-item">SL: 1</div>
                </div>
                <div class="price-item">40.000đ</div>
            </li>
            <li class="list-group-item d-flex align-items-center">
                <img src="https://lavenderstudio.com.vn/wp-content/uploads/2017/03/chup-san-pham.jpg"
                        alt="products">
                <div class="inline-block">
                    <div class="name-item">Shushi Cá Hồi</div>
                    <div class="quantity-item">SL: 1</div>
                </div>
                <div class="price-item">130.000đ</div>
            </li>
            <li class="list-group-item d-flex align-items-center">
                <img src="https://chuphinhmenu.com/wp-content/uploads/2019/05/chup-hinh-mon-an-menu-nha-hang-quan-2-2019.jpg"
                        alt="products">
                <div class="inline-block">
                    <div class="name-item">Cơm Chiên Hải Sản</div>
                    <div class="quantity-item">SL: 1</div>
                </div>
                <div class="price-item">60.000đ</div>
            </li>
        </ul>
        <hr>
        <div class="d-flex justify-content-between">
            <div style="font-weight:500;">Tổng cộng: 
                <span class="price-item">260.000đ<span>
            </div>
            <a href="index.php?controller=user&action=view_cart"><div class="cart-btn">Xem Giỏ Hàng</div></a>
        </div>
    </div> 
</div>