<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <?php
      if (isset($errResultAdd)) {
        $errResultAdd = json_decode($errResultAdd);
      }
      if (isset($errResultUpd)) {
        $errResultUpd = json_decode($errResultUpd);
      }
    ?>

      <div class="row me-0 ms-2 mt-4" >
        <div class="col-md-12 mb-3">
            <div class="card">
            <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Data Table
            </div>
            <div class="card-body">
                <!-- Employee Table Start -->
                <?php 
                include("view/html/UI_manager/component/employee_table.php"); 
                ?>
                <!-- Employee Table End -->
            </div>
            </div>
        </div>
    </div>

    <!-- ======= Scripts ====== -->
    <script src="view/script/employee_table.js"></script>

    <?php
      if (isset($_SESSION['errResultAdd'])) echo '
      <script>
        var myModal = new bootstrap.Modal(document.getElementById("confirm-add-modal"), {
          keyboard: false
        })
        myModal.show();
      </script>
      ';

      if (isset($_SESSION['errResultUpd']) && $_SESSION['errResultUpd']['checkAll'] == 0) echo '
      <script>
        console.log("show error")
        var myModal = new bootstrap.Modal(document.getElementById("confirm-edit-modal-'.$_SESSION['curID'].'"), {
          keyboard: false
        })
        myModal.show();
      </script>
      '; 

      unset($_SESSION['errResultUpd']);
      unset($_SESSION['errResultAdd']);
      unset($_SESSION['curID']);

    ?>
    