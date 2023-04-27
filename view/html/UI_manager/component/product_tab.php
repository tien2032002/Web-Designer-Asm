<style>
.product-content {
    border: 1px solid #cccccc;
    margin-bottom: 20px;
    margin-top: 12px;
    background: white;
    padding: 4px;
    
    box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
}
</style>
    <button type="button" class="btn border ms-3 mt-4"
        data-toggle="modal" data-target="#modal_addproduct"
        style="border-radius: 0; background: #F4A460;">
            <i class="bi bi-calendar-plus me-2"></i>
            <span style="font-weight: 500; color: black">Tạo Món</span>
    </button>
    <?php require "modal_addproduct.php"; ?>
<div class="container mt-3" id="product_list">
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
</div>
<div class="text-center mb-4"><button class="btn btn-primary" onclick="loadMore()">Xem thêm</button></div>
<script>
    var page = 2
    var end = 0
    function loadMore() {
        var link = "/product_page?page=" + page.toString()
        $.ajax({
            url: link,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                console.log(data)
                if(data == "") {
                    end = 1;
                }
                if (end == 0) {
                    document.getElementById("product_list").innerHTML += data;
                    page++;
                }
                
            }
        });
    }
</script>
<?php
      if (isset($_SESSION['addProductErr'])) echo '
      <script>
        var myModal = new bootstrap.Modal(document.getElementById("modal_addproduct"), {
          keyboard: false
        })
        myModal.show();
      </script>
      ';

      if (isset($_SESSION['updProductErr']) && $_SESSION['updProductErr']['checkAll'] == 0) echo '
      <script>
        console.log("show error")
        var myModal = new bootstrap.Modal(document.getElementById("modal_editproduct'.$_SESSION['curID'].'"), {
          keyboard: false
        })
        myModal.show();
      </script>
      '; 

      unset($_SESSION['addProductErr']);
      unset($_SESSION['updProductErr']);
      unset($_SESSION['errResultAdd']);
      unset($_SESSION['errResultUpd']);

    ?>
