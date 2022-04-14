<?php
include('include/header.php');
include('include/sidebar.php');
$id = $_GET['id'];
$familyNo = $_GET['familyNo'];

  // $rbi_id = mysqli_query($conn, " select * from rbi_tenant where id = '$id'") or die (mysqli_error($conn));
  // $rbiRow = mysqli_fetch_assoc($rbi_id);
  // // $full_name = $rbiRow['full_name'];
  // // $address = $rbiRow['address'];
  
  $query = mysqli_query($conn, "select * from rbi_tenant where rbi_id = '$id' and family_no='$familyNo' ;") or die(mysqli_error($conn));
  while($row = mysqli_fetch_array($query)){
    // $address = $row['address'];
    // $householeno = $row['house_hold_no'];
    $street = $row['streetno'];
    // $familyNo = $row['family_no'];
    $fam_no = $row['family_no'];

    $famId = $id.'-'.$fam_no;
    // $relationship = $row['relationship'];
  }
 
?>

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>RBI: <?php echo $id; ?></h1>
            <br>
            <h5>Family ID: <?php echo $famId;?></h5>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Family Member</li>
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
               <button class="btn bg-primary btn-md" data-toggle="modal" data-target="#addTenant" style="float: right" onclick="familyAdd()"><i class="fa fa-plus-circle"></i>
                   Member
                </button>
                 <a href="rbiMember.php?id=<?php echo$id;?>" class="btn bg-dark btn-md" style="float: left">
                    <i class="fa fa-arrow-left"></i> Back
                </a>
              </div>

             


              <?php include_once("rbiMemberFamilyAddModal.php"); ?>
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
                    <th>RBI</th>
                    <th>Resident ID</th>
                    <th>Full name</th>
                    <!-- <th>Address</th>
                    <th>Birth Place</th>
                    <th>Birth Date</th>
                    <th>Gender</th> -->
                    <!-- <th>Civil Status</th> -->
                    <th>Voter Status</th>
                    <!-- <th>Relationship to Household</th> -->
                    <th style="text-align: center">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php

                  $page = "Familymember";
                  $i = 1;
                  $rbi = $_GET['id'];
                  $famId = $_GET['familyNo'];
                  // $familyNo = $_GET['familyNo'];
                    $query = mysqli_query($conn, "select * from rbi_tenant where rbi_id ='$rbi' and family_no = '$familyNo' and status='Active' order by family_no") or die(mysqli_error($conn));
                    while($row = mysqli_fetch_array($query)){
                      $id = $row['id'];
                    //   $familyNo = $row['family_no'];
                        $rbi_id = $row['rbi_id'];
                        $residentNo= $row['resident_no'];

                        // $relationship = $row['relationship'];
                        $position = $row['position'];


                  ?>
                  <tr>
              
                  <td>
                    <?php echo $rbi_id;?>
                  </td>
                    
                    <td>
                      <?php echo $residentNo; ?>
                    </td>
                    <td>
                      <?php echo $row['full_name']; ?>
                    </td>
                    
                    <td> 
                    <?php echo $row['voter_status']; ?>
                    </td>
                
                   
                    <td style="text-align: center">
                      <div class="btn-group">
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit<?php echo $id; ?>">
                        <i class="fa fa-eye"></i>  Details 
                      </button>
                     
                  

                      </div>
                    </td>
                  </tr>
                  <?php
                // include("deleteModal.php");
               include("rbiMemberFamilyEditModal.php");
              /*  include("complaintUpdateModal.php");*/
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