<div class="row d-flex justify-content-center mt-4 me-4 ms-4">
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
                        if (isset($_SESSION['saveNewsErr'])) extract($_SESSION['saveNewsErr']);
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
                <input type="text" id="news-title" class="form-control mb-3" name='title'>
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
    
    
</script>
<?php
    unset($_SESSION['saveNewsErr']);
?>