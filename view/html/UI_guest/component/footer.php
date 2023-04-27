
        <div class="row p-5">
            <!-- begin: restaurant summary -->
            <div class="col">
                <div class="h2" >
                    <img class="border border-light p-2" src="view\images\utensils-solid.svg" style="width: 50px" alt="restaurantIcon">
                    DISFRUTAR
                </div>
                <p>
                    Disfrutar vinh dự được bình chọn top 10 nhà hàng được yêu thích nhất của Tp.HCM. <br>
                    Với đội ngũ đầu bếp tài năng được chọn lọc kỹ càng, sẽ phục vụ
                    cho thực khách những tuyệt phẩm ẩm thực từ khắp nơi trên thế giới. <br>
                    Thực khách không chỉ được thưởng thức những món ăn tuyệt hảo mà còn được trải
                    nghiệm không gian ẩm thực được lấy cảm hứng từ kiến trúc hoàng gia Tây Ban Nha
                    hứa hẹn sẽ đem lại cho thực khách những trải nghiệm không thể nào quên. <br>
                </p>
                <ul class = "list-unstyled">
                <?php
                foreach($contactArray as $contact) {
                    echo '
                    <li class="d-flex align-items-center mt-2">
                        <div style="width: 30px; height: 30px" class="d-flex justify-content-center align-items-center border rounded-circle me-2 p-1">
                            <i style="color: #b38b91" class="'.$contact->icon.'"></i>
                        </div>
                        
                        <p class="mb-0">'.$contact->link.'</p>
                    </li>
                    ';

                }
            ?>
                </ul>
            </div>
            <!-- end: restaurant summary -->

            <!-- begin: quick link -->
            <div class="col ms-4 mt-2">
                <h5>Quick links</h5>

                <!-- begin: list of links -->
                <ul class = "list-unstyled">
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="/">
                            <i class="bi bi-caret-right-fill"></i>
                            Trang chủ
                        </a>
                    </li>
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="/menu">
                            <i class="bi bi-caret-right-fill"></i>    
                            Thực đơn
                        </a>
                    </li>
                    <li class="mt-2">
                        <a style="text-decoration: none;" class="link-dark" href="contact_page">
                            <i class="bi bi-caret-right-fill"></i>    
                            Liên hệ
                        </a>
                    </li>
                </ul>
                <!-- begin: end of links -->
            </div>
            <!-- end: quick link -->

            <!-- begin: form -->
            <div class="col mt-2">
                <h5>LIÊN HỆ</h5>
                <h7>Hãy gửi phản hồi đến chúng tôi để cải thiện chất lượng dịch vụ</h7>
                <form action="save_response" method="POST">
                    <input class="mt-3 border-0 p-3 w-100" type="text" placeholder="Tên" name="name">
                    <input class="mt-3 border-0 p-3 w-100" type="text" placeholder="Email" name="email">
                    <input class="mt-3 border-0 p-3 w-100" type="text" placeholder="Lời nhắn" name="message">
                    <input class="mt-3 border-0 p-3 w-100" type="submit" style="background-color: #b38b91; font-weight: 500;" value="Gửi Phản Hồi">
                </form>
            </div>
            <!-- end: form  -->
        </div>
