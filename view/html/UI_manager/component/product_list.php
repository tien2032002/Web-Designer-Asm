<?php
    foreach($productList as $index => $product) {
        if ($index % 2 == 0) {
            echo '<div class="row">';
        }
        echo'
        <div class="col-6" >
            <div class="product-content">
                <div class="row">
                    <div class="col-md-5">
                        <div class="product-image"> 
                            <img src="'.$product->image.'" 
                                style="width: 100%; height: 150px; object-fit: cover;" alt="food"> 
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h5>'.$product->name.'</h5>

                        <div class="row" style="font-weight:500;">
                            <div class="col-6">
                                <span style="color: #da5619;font-weight:500; font-size: 18px">'.number_format($product->price, 0).'</span>
                            </div>
                            <div class="col-6">
                                <span>Rating: '.number_format($product->rating, 1).' <i class="bi bi-star-fill" style="color: #da5619;"></i></span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mt-2" style="border-radius: 0;"
                                data-toggle="modal" data-target="#modal_editproduct'.$product->id.'">Sửa Món</button>';
                                require "modal_editproduct.php";
                        echo'
                        <button type="button" class="btn btn-danger mt-2" style="border-radius: 0;"
                                data-toggle="modal" data-target="#modal_deleteproduct'.$product->id.'">Xóa Món</button>';
                                require "modal_deleteproduct.php";
                        echo'
                    </div>
                </div>
            </div>
        </div>
        ';
        if ($index % 2 != 0) {
            echo '</div>';
        }
    }
?>