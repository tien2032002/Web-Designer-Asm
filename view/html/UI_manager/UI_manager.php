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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="view/css/UI_employee/style_table_employee.css">
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <!-- style -->
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="view/css/UI_manager/UI_manager.css"/>  
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/product.css"> 
    
    <!-- ======= Scripts ====== -->
    <script src="view/jquery/jquery-3.6.4.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <style>
    .activeDropImg {
        border: 1px solid black;
    }

    .dropImageCss{

        width: 100%;
        height: 180px;
        overflow: hidden;
        background-size: cover;
        background-position: center center;
    }
    </style>
</head>

<body>

    <div class="d-flex">
        <!-- Sidebar Start -->
        <div class="sidebar sidebarwidth" id="sidebar">
            <div class="list-gr">
                <div class="text-muted" id="navigation">Navigation</div>
                <a id="tab1" class="list-gr-item" href="#" data-url="statistical_tab">
                    <i class="fas fa-chevron-right text-muted me-2"></i>Thống Kê Chung</a>
                <a id="tab2" class="list-gr-item" href="#" data-url="add_news">
                    <i class="fas fa-chevron-right text-muted me-2"></i>Thêm Tin Tức</a>
                <a id="tab3" class="list-gr-item active" href="#" data-url="/manage_product?page=1">
                    <i class="fas fa-chevron-right text-muted me-2"></i>Quản Lý Sản Phẩm</a>
                <a id="tab4" class="list-gr-item" href="#" data-url="/manage_employee">
                    <i class="fas fa-chevron-right text-muted me-2"></i>Quản Lý Nhân Viên</a>
                <a id="tab5" class="list-gr-item" href="#" data-url="feedback_tab">
                    <i class="fas fa-chevron-right text-muted me-2"></i>Quản Lý Đánh Giá</a>
                <a id="tab5" class="list-gr-item" href="#" data-url="contact_tab">
                    <i class="fas fa-chevron-right text-muted me-2"></i>Quản Lý Liên Hệ</a>
            </div>
        </div>
        <!-- Sidebar End -->
        <div class="main">
            <!-- NavBar Start -->
            <?php
                
            ?>
            <nav class="navbar navbar-expand-md" style="background-color: white;">
                <div class="container align-items-center">
                    <button class="toggle-btn ms-4" onclick="toggleSidebar()">
                        <span class="fas fa-bars"></span>
                    </button>
            
                    <a href="#">
                        <img src="view/images/logo.jpg" style="width: 25vw; max-width: 120px;" alt="logo">
                    </a>
            
                    <button class="toggle-btn d-md-none" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="fas fa-bars"></span>
                    </button> 
            
                    <div id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="index.php?controller=manager&action=logout" class="nav-link me-2">
                                    <i class="bi bi-box-arrow-right me-1"></i>
                                    Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Tab Start -->
            <div id="tab-content"></div>
            <!-- Tab End -->
        <div>
    </div>
    <!-- ======= Scripts ====== -->
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var aElements = document.getElementsByClassName('list-gr-item'); 

            if (sidebar.classList.contains('hidden')) {
                sidebar.classList.remove('hidden');
            } else {
                sidebar.classList.add('hidden');
            } 

            for (var i = 0; i < aElements.length; i++) {
                if (aElements[i].classList.contains('hidden')) {
                    aElements[i].classList.remove('hidden');
                } else {
                    aElements[i].classList.add('hidden'); 
                }
            }
        }
    </script>
    <script>
        /* AJAX */
        $(document).ready(function() {
            // $('#tab-content').load($('a.list-gr-item.active').data('url'));
            $('a.list-gr-item').click(function() {
                var url = $(this).data('url');
                var clickedTab = $(this);
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html',
                    success: function(data) {
                        $('#tab-content').html(data);
                        $('a.list-gr-item').removeClass('active');
                        clickedTab.addClass('active');
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
                    }
                });
                return false;
            });
        }); 

        function changeTab(tabName){
            console.log('change tab')
            var url = $('#'+tabName).data('url');
                var clickedTab = $('#'+tabName);
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html',
                    success: function(data) {
                        $('#tab-content').html(data);
                        $('a.list-gr-item').removeClass('active');
                        clickedTab.addClass('active');
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
                    }
                });
                
        }
        <?php
            if (isset($_SESSION['errResultUpd']) || isset($_SESSION['errResultAdd'])) echo "changeTab('tab4');";
            else if (isset($_SESSION['addProductErr']) || isset($_SESSION['updProductErr'])) echo "changeTab('tab3');";
            else if (isset($_SESSION['saveNewsErr'])) echo "changeTab('tab2');";
            else echo "changeTab('tab1');";
        ?>
    </script>
</body>

</html>