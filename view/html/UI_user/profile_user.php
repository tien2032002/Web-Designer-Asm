<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <!-- ======= Styles ====== -->
      <!--  icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
     <!--  style -->
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/navbar_homepage.css">
    <link rel="stylesheet" type="text/css" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/cart2.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/cart.css">
    <link rel="stylesheet" type="text/css" href="view/css/UI_user/style_profile_user.css">

    <!-- ======= Scripts ====== -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
    <script src="view/jquery/jquery-3.6.4.js"></script>
    <script>
      function loadXMLDoc(link, id)
        {
            $.ajax({
                // The link we are accessing.
                url: link,
                    
                // The type of request.
                type: "get",
                    
                // The type of data that is getting returned.
                dataType: "html",

                success: function( strData ){
                    document.getElementById(id).innerHTML = strData;
                    console.log("do")
                    const items = document.querySelectorAll(".carousel-menu");

                    items.forEach((el) => {
                        const minPerSlide = 4
                        let next = el.nextElementSibling
                        for (var i=1; i<minPerSlide; i++) {
                            if (!next) {
                                // wrap carousel by using first child
                                next = items[0]
                            }
                            let cloneChild = next.cloneNode(true)
                            el.appendChild(cloneChild.children[0])
                            next = next.nextElementSibling
                        }
                    })
                }
            });
        }
    </script>
</head>
<body>
  
    <?php
        $userObj = json_decode($userObj);
        $jsonString = json_encode($userObj);
    ?>
    <!-- Topbar Start -->
    <?php include 'component/topbar.php'; ?>
    <!-- Topbar End -->

    <div class="container-fluid">
      <div class="row border-top px-3">
          <div class="col-lg-12">
              <!-- Navbar Start -->
              <?php $page = 'profile_user';
              include 'component/navbar.php'; ?>
              <!-- Navbar End -->
              <div class="row">
                  <!-- List TAB -->
                  <div class="col-md-3 mt-2">
                      <div class="card">
                          <div class="list-group" id="myList">
                              <a class="list-group-item active" id='profile' href="#" data-url="/profile_user_tab">Hồ sơ</a>
                              <a class="list-group-item " id='cart' href="#" data-url="/cart_tab">Giỏ hàng</a>
                              <a class="list-group-item" id='bill' href="#" data-url="#">Đơn mua</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-9 mt-2">
                      <div id="tab-content"></div>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- ======= Scripts ====== -->
    <script>   
      $(document).ready(function() {
        var userObj = <?php echo $jsonString; ?>;
        $('#tab-content').load($('a.list-group-item.active').data('url'), { userObj: userObj });
        $('a.list-group-item').click(function() {
          var url = $(this).data('url');
          var clickedTab = $(this);
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
            data: { userObj: userObj },
            success: function(data) {
              $('#tab-content').html(data);
              $('a.list-group-item').removeClass('active');
              clickedTab.addClass('active');
            }
          });
          return false;
        });
      });

      function changeQuantity(element) {
        var priceElement = document.querySelector('#price' + '.' + element.className)
        var totalElement = document.querySelector('#total' + '.' + element.className)
        var totalBillElement = document.querySelector('.total_bill')
        totalElement.innerText = ((parseInt(element.value) * parseInt(priceElement.innerText))*1000).toLocaleString('en-US') + 'đ'
        var total = 0;
        document.querySelectorAll('#total').forEach((totalElement) => {
          total+=parseInt(totalElement.innerText)
        })
        totalBillElement.innerText = (total*1000).toLocaleString('en-US') + 'đ'
        var xmlLink = 'index.php?controller=user&action=addToCart&productID=' + element.className.substr(10) + '&productQuantity=' + element.value.toString()
        loadXMLDoc(xmlLink, 'cart_drop')
      }

      function changeTab(tabName = 'profile'){
        tabElements = document.querySelectorAll('.list-group-item');
        tabElements.forEach((tab) => {
          tab.className = 'list-group-item';
        })
        document.getElementById(tabName).className = 'list-group-item active'
      }

      <?php
        if (isset($active)) echo 'changeTab("'.$active.'")';
      ?>
    </script>
</body>
</html>