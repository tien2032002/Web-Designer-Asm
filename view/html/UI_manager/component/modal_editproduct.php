<div class="modal fade" id="modal_editproduct<?php echo $product->id;?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sửa Thông Tin Món Ăn</h5>
      </div>
      <div class="modal-body">
        <form method='post' action='/update_product?curID=<?php echo $product->id ;?>' enctype="multipart/form-data" id="update_form<?php echo $product->id;?>">
          <div class="card p-4 mb-2">
            <img src="<?php echo $product->image ?>" alt="image"
            style="width: 100%; object-fit: cover;"
            >
            <div class="custom-file mt-4">
              <label class="custom-file-label" for="customFile">
                  <h6>Đổi ảnh sản phẩm</h6>
              </label><br>
                  <input type="file" class="custom-file-input mt-2" id="customFile" name='image'>
              <p class="text-danger">
                <?php
                  if($_SESSION['updProductErr']){
                    switch ($_SESSION['updProductErr']['uploadErr']){
                      case "missing":
                        echo "Hãy thêm ảnh cho món ăn!";
                        break;
                      case "notImage":
                        echo "Sai định dạng ảnh!";
                        break;
                      default:
                        break;
                    }
                  }
                ?>
              </p>
            </div>
          </div>
          <label for="name" style="font-weight: 500;">TÊN SẢN PHẨM</label>
          <input type="text" class="form-control mt-2" id="name" name="name" value="<?php echo $product->name; ?>"
                  placeholder="Nhập tên sản phẩm" required>
          <p class="text-danger">
            <?php
              if($_SESSION['updProductErr']){
                switch ($_SESSION['updProductErr']['nameErr']){
                  case "missing":
                    echo "Hãy thêm tên cho món ăn!";
                    break;
                  default:
                    break;
                }
              }
            ?>
          </p>

          <label for="type" style="font-weight: 500;">LOẠI</label>
          <select class="form-select" aria-label="Default select example" name="type" id="type">
            <option value="starter" <?php if($product->type == "starter") echo "selected";?>>Khai vị</option>
            <option value="main" <?php if($product->type == "main") echo "selected";?>>Món chính</option>
            <option value="dessert" <?php if($product->type == "dessert") echo "selected";?>>Tráng miệng</option>
            <option value="sweet" <?php if($product->type == "sweet") echo "selected";?>>Đồ ngọt</option>
            <option value="drink" <?php if($product->type == "drink") echo "selected";?>>Đồ uống</option>
          </select>

          <label for="price" style="font-weight: 500;">GIÁ</label>
          <input type="number" class="form-control mt-2" id="price" name="price" value="<?php echo $product->price;?>"
                  placeholder="Nhập giá sản phẩm" required>
          <p class="text-danger">
            <?php
              if($_SESSION['updProductErr']){
                switch ($_SESSION['updProductErr']['priceErr']){
                  case "invalid":
                    echo "Giá món ăn không hợp lệ!";
                    break;
                  default:
                    break;
                }
              }
            ?>
          </p>
          <label for="description" style="font-weight: 500;">MÔ TẢ</label>
          <textarea class="form-control mt-2" id="description" name="description"
                  placeholder="Nhập mô tả cho sản phẩm" required><?php echo $product->description;?></textarea >
          <p class="text-danger">
            <?php
              if($_SESSION['updProductErr']){
                switch ($_SESSION['updProductErr']['descriptionErr']){
                  case "missing":
                    echo "Hãy nhập mô tả cho món ăn!";
                    break;
                  default:
                    break;
                }
              }
            ?>
          </p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary" onclick="document.getElementById('update_form<?php echo $product->id;?>').submit()">Lưu</button>
      </div>
    </div>
  </div>
</div>

