<!-- begin: search results -->
<?php
    $typeArray = array("starter" => "Khai vị",
                       "main" => "Món chính",
                       "dessert" => "Món tráng miệng");
    if ($searchResult!="not match") {
        foreach($searchResult as $result){
            echo'
            <a style="all:unset;cursor: pointer;" href="dish-detail/'.UrlNormal($result->name).'/'.$result->id.'" class="d-flex align-items-center justify-content-between p-2">
                <div class="d-flex" style="height: 50px">
                    <img src="'.$result->image.'" alt="" style="width: 100px; height: 100% ;object-fit: cover;">
                    <div class="ms-2">
                        <h6>'.$result->name.'</h6>
                        <p>'.$typeArray[$result->type].'</p>
                    </div>
                </div>
                <div class="font-weight-bold text-danger me-4">
                    '.number_format($result->price, 0).'Đ
                </div>
            </a>
            ';
        }
    }
    
?>
