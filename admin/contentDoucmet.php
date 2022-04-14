<?php
include('include/header.php');
include('include/sidebar.php');
?>

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Document Fees</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Document_FEe</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
           
              <!-- /.card-header -->
              <div class="card-body">
                  <?php if (isset($_SESSION['error'])) { ?>
                  <div class="alert alert-warning text-center">
                    <?php echo $_SESSION['error']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['error']);
                  ?>

                <?php if (isset($_SESSION['success'])) { ?>
                  <div class="alert alert-success text-center">
                    <?php echo $_SESSION['success']; ?>
                  </div>
                  <?php }
                  unset($_SESSION['success']);
                  ?>

                    <?php

                        $query = mysqli_query($conn, "SELECT * FROM content");
                        $row = mysqli_fetch_array($query);

                        $barangay_clearance = $row["barangay_clearance"];
                        $business_clearance = $row["business_clearance"];
                        $indigency = $row["indigency"];
                        $delivery_fee = $row["delivery_fee"];

                    ?>
                <form id="viewFOrm">

                    <label for="" style="font-size: 1rem">Barangay Clearance Fee</label>
                    <div class="row">
                        <div class="col col-md-6">
                          <input type="text" class="form-control" name="barangay_clearance" value="<?php echo $barangay_clearance;?>" readonly>
                        </div>
                    </div>
                    <hr>


                    <label for="" style="font-size: 1rem">Business Clearance Fee</label>
                    <div class="row">
                        <div class="col col-md-6">
                          <input type="text" class="form-control" name="business_clearance" value="<?php echo $business_clearance;?>" readonly>
                        </div>
                    </div>
                    <hr>
                    <label for="" style="font-size: 1rem">Indigency Fee</label>
                    <div class="row">
                        <div class="col col-md-6">
                          <input type="text" class="form-control"  name="indigency" value="<?php echo $indigency;?>" readonly>
                        </div>
                    </div>
                    <hr>

                    <label for="" style="font-size: 1rem">Delivery Fee</label>
                    <div class="row">
                        <div class="col col-md-6">
                          <input type="text" class="form-control" name="delivery_fee" value="<?php echo $delivery_fee;?>" readonly>
                        </div>
                    </div>

                    <hr>
                    <button type="button" class="btn btn-primary" onclick="editFee()">Edit</button>
                

                </form>


                <form id="editForm" style="display: none" action="contentDoucmetEdit.php" method="post">

                    <label for="" style="font-size: 1rem">Barangay Clearance Fee</label>
                    <div class="row">
                        <div class="col col-md-6">
                        <input type="text" class="form-control" name="barangay_clearance" value="<?php echo $barangay_clearance;?>" >
                        </div>
                    </div>
                    <hr>


                    <label for="" style="font-size: 1rem">Business Clearance Fee</label>
                    <div class="row">
                        <div class="col col-md-6">
                        <input type="text" class="form-control" name="business_clearance" value="<?php echo $business_clearance;?>" >
                        </div>
                    </div>
                    <hr>
                    <label for="" style="font-size: 1rem">Indigency Fee</label>
                    <div class="row">
                        <div class="col col-md-6">
                        <input type="text" class="form-control"  name="indigency" value="<?php echo $indigency;?>" >
                        </div>
                    </div>
                    <hr>

                    <label for="" style="font-size: 1rem">Delivery Fee</label>
                    <div class="row">
                        <div class="col col-md-6">
                        <input type="text" class="form-control" name="delivery_fee" value="<?php echo $delivery_fee;?>" >
                        </div>
                    </div>

                    <hr>
                    <button type="button" class="btn btn-primary" onclick="cancel()">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary" onclick="editFee()">Save</button>


                    </form>
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      <!--ALL TARGET MODAL-->
 
       
      </div>
      <script>
        function editFee(){
            document.getElementById('viewFOrm').style.display = "none";  
            document.getElementById('editForm').style.display = "block";
        }

        function cancel(){
            document.getElementById('viewFOrm').style.display = "block";  
            document.getElementById('editForm').style.display = "none";
        }
    </script>
    
  <!-- /.content-wrapper -->
 <?php include('include/footer.php') ?>
