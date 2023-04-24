<?php
    $typeArray = array("starter" => "Khai vị",
    "main" => "Món chính",
    "dessert" => "Món tráng miệng");
    if ($searchResult!="not match") {
        foreach($searchResult as $result) {
            echo '
            <div class="d-flex align-items-center justify-content-between p-2" style="cursor: pointer;" onclick="getProductId(\''.$result->id.'\', \''.$tableId.'\')">
                <div class="d-flex" style="height: 50px">
                    <img src="'.$result->image.'" alt="" style="width: 100px; height: 100%;object-fit: cover;">
                    <div class="ms-2">
                        <h6>'.$result->name.'</h6>
                        <p>'.$typeArray[$result->type].'</p>
                    </div>
                </div>
                <div class="font-weight-bold text-danger">
                    '.number_format($result->price, 0).'đ
                </div>
            </div>
            <hr class="m-0">
            ';
    
        }
    }
    
?>
