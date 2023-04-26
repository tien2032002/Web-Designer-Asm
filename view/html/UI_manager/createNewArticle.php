<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
      <!-- style -->
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="view/css/UI_manager/style_manager.css"/>
    <link rel="stylesheet" type="text/css" href="view/css/UI_manager/style_navbar_manager.css"/>
    <!-- ======= Scripts ====== -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/jquery/jquery-3.6.4.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <style>
    .btn-override:hover{
        background-color: #B38B91;
        color: #fff;
        border: #B38B91 ;
    }

    .btn-override{
        color: #905e65 ;
        background-color: #fff;
        border: solid 1px #B38B91 ;
    }
    .activeDropImg {
        border: 1px solid black;
    }

    .dropImageCss{

        width: 280px;
        height: 180px;
        overflow: hidden;
        background-size: cover;
        background-position: center center;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
      <!-- Topbar Start -->
      <?php include 'component/topbar.php'; ?>
      <!-- Topbar End -->
        
      <div class="row">
        
        <!-- Sidebar Start -->
        <div class="col-md-3 col-lg-2 sidebar" style="margin-top: 60px;">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="/home_page_manager">Thông tin chung</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/manage_employee">Nhân viên</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Đơn hàng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Feedback</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Doanh thu</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="add_news">Thêm bài viết</a>
                </li>
            </ul>
          </div>
        </div>
        <!-- Sidebar End -->  

        <!-- Main Start -->
        <div class="col-md-9 col-lg-10" >
          <!-- begin: text editor -->
                
          <form class="text-editor mt-5 pt-3" method="POST" action='save_news' enctype="multipart/form-data">
                    <h3>Tạo bài viết mới</h3>
                    <div class="d-flex w-100 justify-content-between">
                        <div style="width: 40%">
                            <h5>Thumbnail</h5>
                            <div id="dropZone" style="width: 300px; height: 200px; border: 1px dashed #ccc; padding: 10px">
                                <span id="dropMessage">Drop image here or click here to choose from file</span>
                                <input type="file" id="dropImageInput" style="display: none" name="thumnail">
                            </div>
                            <p class='text-danger'>
                                <?php
                                    if(isset($uploadErr)) {
                                        switch ($uploadErr) {
                                            case "notImage": 
                                                echo "Sai định dạng ảnh!";
                                                break;
                                            case "not update":
                                                echo "Hãy thêm thumnail cho bài viết!";
                                                break;
                                            default:
                                                break;
                                        }
                                    }
                                ?>
                            </p>
                        </div>
                        
                        <div style="width: 60%">
                            <h5>Tiêu đề: </h5>
                            <input type="text" id="news-title" class="form-control mb-5" name='title'>
                            <p class='text-danger'>
                                <?php
                                    if(isset($titleErr)) {
                                        switch ($titleErr) {
                                            case "invalid": 
                                                echo "Hãy thêm tiêu đề cho bài viết";
                                                break;
                                            default:
                                                break;
                                        }
                                    }
                                ?>
                            </p>

                            <!-- begin: select tag for news -->
                            <h5>Gắn tag cho bài viết: </h5>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select class="form-select" id="inputGroupSelect01" name="tag">
                                    <option value ="" selected></option>
                                    <option value="1">Món ngon mỗi ngày</option>
                                    <option value="2">Món ăn mùa xuân</option>
                                    <option value="3">Món ăn mùa hè</option>
                                    <option value="4">Món ăn mùa thu</option>
                                    <option value="5">Món ăn mùa đông</option>
                                    
                                </select>
                                
                            </div>
                            <p class='text-danger'>
                                <?php
                                    if(isset($tagErr)) {
                                        switch ($tagErr) {
                                            case "invalid": 
                                                echo "Hãy thêm thẻ cho bài viết";
                                                break;
                                            default:
                                                break;
                                        }
                                    }
                                ?>
                            </p>
                            <!-- end: select tag for news -->
                        </div>
                    </div>
                    

                    <!-- begin: text editor area -->
                    <h5>Thêm nội dung cho bài viết</h5>
                    <textarea name="editor1" id="editor-textarea">
                    
                    </textarea>
                    <p class='text-danger'>
                        <?php
                            if(isset($contentErr)) {
                                switch ($contentErr) {
                                    case "invalid": 
                                        echo "Hãy thêm nội dung cho bài viết";
                                        break;
                                    default:
                                        break;
                                }
                            }
                        ?>
                    </p>
                    <h2 class='text-success'>
                        <?php
                            if(isset($contentErr) && ($uploadErr == 'good' && $titleErr != 'invalid' && $tagErr != 'invalid' && $contentErr != 'invalid')) 
                                echo "Đã thêm bài viết thành công!";
                        ?>
                    </h2>

                    <script>
                        CKEDITOR.replace( 'editor1' );
                    </script>
                    <!-- end: text editor area -->

                    <div class="d-flex justify-content-end mt-2">
                        <input type="submit" value="Tạo bài viết mới" class="btn btn-override">
                    </div>
                </form>
                <!-- end: text editor -->
        </div>
        <!-- Main End -->

      </div>
    </div>

    <!-- ======= Scripts ====== -->
    <script>
        $(document).ready(function(){
            $(window).scroll(function () {
                    if ($(this).scrollTop() > 50) {
                        $('#back-to-top').fadeIn();
                    } else {
                        $('#back-to-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-to-top').click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 400);
                    return false;
                });
        });
        
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
    </script>
    <!-- <script src="view/script/user_navbar.js"></script> -->
</body>

</html>