
<div class="row cart_tab">
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr class="text-header-cart">
                    <th>Món Ăn</th>
                    <th>Danh Mục</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Thành tiền</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $totalPrice = 0;
                        if (!isset($_COOKIE['cartArr'])) echo 'Chưa có sản phẩm trong giỏ hàng!';
                        else {
                            $cartList = json_decode($_COOKIE['cartArr'], true);
                            include_once('model\product_db.php');
                            $typeArr = array("starter" => "Khai vị",
                                             'main' => 'Món chính',
                                             'dessert' => 'Món tráng miệng');
                            foreach($cartList as $productID => $productQuantity) {
                                $productObj = json_decode(getProductById($productID));
                                $totalPrice = $totalPrice + (int)$productObj->price*(int)$productQuantity;
                                
                                echo '
                                    <tr class="text-item">
                                        <th class="d-flex align-items-center">
                                                <img class="me-4" src="'.$productObj->image.'"
                                                style="width:50%; max-width:100px" alt="Book">
                                                <div>'.$productObj->name.'<div>
                                        </th>
                                        <th class="align-middle">
                                            <p class="mb-0" style="font-weight: 500;">'.$typeArr[$productObj->type].'</p>
                                        </th>
                                        <td class="align-middle">
                                            <div class="d-flex flex-row">
                                                <input id="form_quantity" class="productID_'.$productObj->id.'" min="1" name="quantity" value="'.$productQuantity.'" type="number" onchange="changeQuantity(this  )"
                                                class="form-control form-control-sm" />
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <p id="price" class="mb-0 productID_'.$productObj->id.'" style="font-weight: 500;">'.number_format($productObj->price, 0, '.' , ',').'đ</p>
                                        </td>
                                        <td class="align-middle">
                                            <p class="mb-0 productID_'.$productObj->id.'" id="total" style="font-weight: 500;">'.number_format($productObj->price*$productQuantity, 0, '.' , ',').'đ</p>
                                        </td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <div style="font-weight:500; font-size:20px">Tổng cộng: 
                    <span class="price-item-tab total_bill"><?php echo number_format($totalPrice, 0, '.' , ','); ?>đ<span>
                </div>
                <a href="#" style="text-decoration:none;"><div class="cart-btn-tab">Xem Giỏ Hàng</div></a>
            </div>
        </div>
    </div>
</div>

<script>
    changeQuantity(element){
        console.log([element])
    }
</script>