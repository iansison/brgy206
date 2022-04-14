<?php
include 'include/header.php';
include 'include/sidebar.php';
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-people-carry"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b>TOTAL POPULATION</b></span>
                <span class="info-box-number">
                  <?php
                       
                      // $query = mysqli_query($conn,"SELECT id FROM rbi ");
                      // $row = mysqli_num_rows($query);

                      $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant");
                      $row2 = mysqli_num_rows($query2);

                      // echo $row+$row2;
                      echo $row2;
                      
                     ?>
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-male"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b>TOTAL MALE</b></span>
                <span class="info-box-number">
                  <?php
                       
                    //  $query = mysqli_query($conn,"SELECT id FROM user_account where gender='Male' ORDER BY id");

                    //   $row = mysqli_num_rows($query);

                    //   echo $row;

                    // $query = mysqli_query($conn,"SELECT id FROM rbi WHERE gender='male'");
                    // $row = mysqli_num_rows($query);

                    $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE gender='male'");
                    $row2 = mysqli_num_rows($query2);

                    // echo $row+$row2;
                      
                    echo $row2;
                     ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-female"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b>TOTAL FEMALE</b></span>
                <span class="info-box-number">
                  <?php
                       
                  // $query = mysqli_query($conn,"SELECT id FROM user_account where gender='Female' ORDER BY id");

                  //     $row = mysqli_num_rows($query);

                  //     echo $row;
                      
                      // $query = mysqli_query($conn,"SELECT id FROM rbi WHERE gender='female'");
                      // $row = mysqli_num_rows($query);

                      $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE gender='female'");
                      $row2 = mysqli_num_rows($query2);

                      // echo $row+$row2;
                      echo $row2;
                     ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-registered"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="color: grey"><b>REGISTERED VOTERS</b></span>
                <span class="info-box-number">
                  <?php

                      // $query = mysqli_query($conn,"SELECT id FROM rbi WHERE voter_status='Registered' ORDER BY id");
                      // $row = mysqli_num_rows($query);

                      $query2 = mysqli_query($conn,"SELECT id FROM rbi_tenant WHERE voter_status='Registered' ORDER BY id");
                      $row2 = mysqli_num_rows($query2);

                 
                      // echo $row+$row2;
                      echo $row2;
                     ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
    
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

    

    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3> 
                   <?php 
                      $query = mysqli_query($conn,"SELECT id FROM application where permit_type='Barangay Clearance' AND ustatus='Pending'");
                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                     </h3>

                <p>Barangay Clearance</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="barangay_clearance.php " class="small-box-footer">Pending Request </a>
            </div>
          </div>

          
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
               $query = mysqli_query($conn,"SELECT id FROM application where permit_type='Business Clearance' AND ustatus='Pending'");

                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                </h3>

                <p>Business Clearance</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="#" class="small-box-footer">Pending Request </a>
            </div>
          </div>
          <!-- ./col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
               $query = mysqli_query($conn,"SELECT id FROM application where permit_type='Indigency' AND ustatus='Pending'");

                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                </h3>

                <p>Indigency Certificate</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="#" class="small-box-footer">Pending Request </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
                  $query = mysqli_query($conn,"SELECT id FROM business where bstatus='Pending'");

                      $row = mysqli_num_rows($query);

                      echo $row;
                     ?>
                </h3>

                <p>Business</p>
              </div>
              <div class="icon">
                <i class="far fa-sticky-note"></i>
              </div>
              <a href="#" class="small-box-footer">Pending Request </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
    
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                 <h3 class="card-title" style="margin-left: 39%"><b>LIST OF BARANGAY OFFICIALS</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Picture</th>
                    <th>Fullname</th>
                    <th>Contact No.</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "officials";
                  $i = 1;
                    $query = mysqli_query($conn, "select * from brgy_account where role='2';") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                       $staffImg = $row['image_picture'];

                  ?>
                  <tr>
                     <td>
                      <a href="officialsimg/<?php echo $staffImg;?>" target="_blank">
                      <img src="officialsimg/<?php echo $staffImg;?>" alt="" style="width: 70px; height: 70px; object-fit: cover;">
                      </a>
                    </td>
                    <td>
                      <?php echo $row['fullname']; ?>
                    </td>
                    <td>
                      <?php echo $row['contact_no']; ?>
                    </td>
                  </tr>
                  <?php
                } ?>
                  
                  </tbody>
                 
                </table>
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
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
<?php  include 'include/footer.php'; ?>


