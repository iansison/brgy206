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
            <h1>Businesses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Business_Request</li>
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
                
              <div class="card-header">
                  <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#addBusiness"><i class="fa fa-plus-circle"> Walk-in Request</i>
                     
                  </button>
                
                </div> 
              
              <?php     

              include("business_requestAddModal.php");?>
                
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

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Resident ID</th>
                    <th>Full Name</th>
                    <th>Business Name</th>
                    <th>Status</th>
                    <th>Date Request</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "businessRequest";
                  $i = 1;
                  
                      # code...
                      $query = mysqli_query($conn, "select * from business where status<>'Archive';") or die(mysqli_error($conn));
                  
                    while($row = mysqli_fetch_array($query)){
                    $id = $row['ID'];
                    $receipt = $row['businessImg'];
                  ?>
                  <tr>
                    <td><?php echo $row['urbi']; ?></td>
                    <td>
                        <?php echo $row['uname']; ?>
                    </td>
                    <td>
                        <?php echo $row['businessName']; ?>
                    </td>

                  
            
                  
                    <td style="text-align: center;">
                      <?php 
                      
                        if($row['bstatus']=='Pending') { ?>
                          <span class="badge badge-warning"> 
                            <?php echo $row['bstatus']; ?>
                          </span>
                   
                      <?php }
                      
                      else if ($row['bstatus'] == 'Approved'){ ?>
                        <span class="badge badge-success"> 
                        <?php echo $row['bstatus']; ?>
                        </span>
                     
                      <?php }else { ?>
                        <span class="badge badge-danger"> 
                        <?php echo $row['bstatus']; ?>
                        </span>
                      <?php } ?>
                      
                    </td>

                    <td>
                        <?php echo $row['date_set']; ?>
                    </td> 
                    <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#view<?php echo $id; ?>"><i class="fa fa-eye"></i>
                       View
                      </button>

                           
                      <?php
                        if($row['bstatus']=='Pending'){
                          ?>
                          <div style="cursor: not-allowed;"> 

                            <a href="businesses_request_archive.php?id=<?php echo $id;?>"  class="btn btn-danger btn-sm" style="pointer-events: none;"><i class="nav-icon fas fa-folder-open"></i> Archive</a>
                          </div>
                          <?php
                        }else {
                          ?><a href="businesses_request_archive.php?id=<?php echo $id;?>"  class="btn btn-danger btn-sm"><i class="nav-icon fas fa-folder-open"></i> Archive</a><?php
                        }
                      ?>

                      
                 
                     
                      </div>
                     
                    </td>
                  </tr>
                  <?php
                  
                include("deleteModal.php");
               include("businesses_requestViewmodal.php");      

                
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
      <!--ALL TARGET MODAL-->
    
       
      </div>
  <!-- /.content-wrapper -->
 <?php include('include/footer.php') ?>
