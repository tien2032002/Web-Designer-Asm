<head>
  <style>
    .searchBarDisplayResult{
      display: none;
      width: 100%;     
      position: absolute;
      top: 100%;
      z-index:99;
      background-color: #fff;
      border: solid 1px #ccc;
    }
  </style>
</head>
<div class="modal fade" id="modal_add_food<?php echo $table->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Xác Nhận Thêm Món</h5>
      </div>
      <div class="modal-body">
        <form class='searchBar' method='POST' action="/add_food?tableId=<?php echo $table->id?>" id="add_food_<?php echo $table->id?>">
            <div class="form-group input-group">
              <input type="text" class="form-control " placeholder="Search for products" style="border-radius: 0;"
              id="searchKey<?php echo $table->id?>" onkeyup="getSearchResult(<?php echo $table->id?>)" onfocus="showSearchResult(<?php echo $table->id?>)">
              <div class="input-group-append">
                  <button class="btn border btn-outline-secondary " type="button" style="border-radius: 0; height: 100%" >
                    <i class="fa fa-search"></i>
                  </button>
              </div>
              <div class="searchBarDisplayResult" id="search<?php echo $table->id?>">
                <!-- begin: search results -->
                
                
                <!-- end: search results -->
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <div class="form-group mt-3">
                    <label for="food" style="font-weight: 700;">MÃ MÓN ĂN</label>
                    <div class="input-group">
                        <input type="text" min="1" class="form-control mt-1" 
                                id="food<?php echo $table->id?>" style="border-radius: 0;"
                                placeholder="Enter your ID food"
                                name="food">
                    </div>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group mt-3">
                    <label for="quantity_food" style="font-weight: 700;">SỐ LƯỢNG</label>
                    <div class="input-group">
                        <input type="number" min="1" class="form-control mt-1" min=0
                                id="quantity_food<?php echo $table->id?>" style="border-radius: 0;"
                                placeholder="Enter your quantity" value="1" onchange="debugZero(this)"
                                name="quantity_food">
                    </div>
                </div>
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary" onclick="document.getElementById('add_food_<?php echo $table->id?>').submit()">Thêm</button>
      </div>
    </div>
  </div>
</div>

<script>
  function debugZero(element) {
    if (element.value < 0) element.value = 0;
  }
</script>