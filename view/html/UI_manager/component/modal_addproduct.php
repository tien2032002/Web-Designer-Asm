<style>
    .btn-payment{
        background-color: rgb(224, 60, 1);
        color: white;
    }
    .btn-payment:hover{
        background-color: rgb(180, 52, 5);
        color: white;
    }

</style>
<div class="modal fade" id="modal_addproduct" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Điền Thông Tin Món Ăn</h5>
      </div>
      <div class="modal-body">
      <form method='post' action='add_product' enctype="multipart/form-data" id='add_form'>
          <label for="image" style="font-weight: 500;">Ảnh sản phẩm</label>
          <div id="dropZone" style="width: 100%; height: 200px; border: 1px dashed #ccc; padding: 10px">
              <span id="dropMessage">Drop image here or click here to choose from file</span>
              <input type="file" id="dropImageInput" style="display: none" name="image">
          </div>
          <p class="text-danger">
            <?php
              if(isset($_SESSION['addProductErr'])){
                switch ($_SESSION['addProductErr']['uploadErr']){
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

          <label for="name" style="font-weight: 500;">TÊN SẢN PHẨM</label>
          <input type="text" class="form-control mt-2" id="name" name="name"
                  placeholder="Nhập tên sản phẩm" required>
          <p class="text-danger">
            <?php
                if(isset($_SESSION['addProductErr'])){
                switch ($_SESSION['addProductErr']['nameErr']){
                  case "missing":
                    echo "Hãy nhập tên cho món ăn!";
                    break;
                  default:
                    break;
                }
              }
            ?>
          </p>

          <label for="type" style="font-weight: 500;">LOẠI</label>
          <select class="form-select" aria-label="Default select example" name="type" id="type">
            <option value="starter">Khai vị</option>
            <option value="main">Món chính</option>
            <option value="dessert">Tráng miệng</option>
            <option value="sweet">Đồ ngọt</option>
            <option value="drink">Đồ uống</option>
          </select>

          <label for="price" style="font-weight: 500;">GIÁ</label>
          <input type="number" class="form-control mt-2" id="price" name="price"
                  placeholder="Nhập giá sản phẩm" required>
          <p class="text-danger">
            <?php
              if(isset($_SESSION['addProductErr'])){
                switch ($_SESSION['addProductErr']['priceErr']){
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
                  placeholder="Nhập mô tả cho sản phẩm" required></textarea >
          <p class="text-danger">
            <?php
              if(isset($_SESSION['addProductErr'])){
                switch ($_SESSION['addProductErr']['descriptionErr']){
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
        <button type="button" class="btn btn-payment" onclick="document.getElementById('add_form').submit()">Thêm Món</button>
      </div>
    </div>
  </div>
</div>

<!-- <script>
  // drag and drop thumbnail functions
  const dropZone = document.getElementById("dropZone");
    
    const dropImageInput = document.getElementById("dropImageInput");
    
    //because input is hide, add click event for dropZone 
    dropZone.addEventListener("click", (event) => {
    dropImageInput.click();
  });

    // if an image has added to input, update the thumbnail
    dropImageInput.addEventListener("change",(event)=>{ 
        updateThumbnail(dropZone, dropImageInput.files[0]);
    });

    dropZone.addEventListener("dragover", (event) => {
    event.preventDefault();
    dropZone.classList.add("activeDropImg");
  });
    
    ["dragleave", "dragend"].forEach((type) => {
        dropZone.addEventListener(type, (event) => {
            dropZone.classList.remove("activeDropImg");
        });
    });

    dropZone.addEventListener("drop", (event) => {
        event.preventDefault();

        if (event.dataTransfer.files.length) {
            dropImageInput.files = event.dataTransfer.files;
            updateThumbnail(dropZone, event.dataTransfer.files[0]);
        }

        // dropZone.classList.remove("");
    });

    function updateThumbnail(dropZone,file){
        
        let dropMessage = document.getElementById("dropMessage");
        if (dropMessage) {
            dropMessage.remove();
        }

        let thumbnailElement = dropZone.querySelector(".dropSuccessImage");
        if (!thumbnailElement) {
            thumbnailElement = document.createElement("div");
            thumbnailElement.classList.add("dropImageCss");
            dropZone.appendChild(thumbnailElement);
        }
        thumbnailElement.dataset.label = file.name;

        
        if (file.type.startsWith("image/")) {
            const reader = new FileReader();

            reader.readAsDataURL(file);
            reader.onload = () => {
                thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
            };
        } else {
            thumbnailElement.style.backgroundImage = null;
        }
    }
</script> -->