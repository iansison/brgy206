<?php
include('fetch.php');
include('include/header.php');
include('include/sidebar.php');
?>
 <head>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>RBI Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">RBI_Report</li>
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
                
                <div class="card-header" style="padding-top:0px;">
                  
                   <form action="nyark.php" method="get">
                  <div class="row">
                  <div class="form-group col-sm-3">

                  </div>
                  <div class="form-group col-sm-3">

                  </div>
                  <div class="form-group col-sm-3" style="top:36px">

                  </div>
                  <div class="form-group col-sm-3" style="top:36px;margin-bottom:50px;">
                        <form method="post" action="export.php">
                         <input type="submit" name="export" class="btn btn-success" value="Export" style="padding:3px 9px; margin-left:12rem;"/>
                        </form>
      
                   <a href="javascript:Clickheretoprint()" style="float: right;" class="btn btn-success btn-sm"><span><i class="fa fa-print" aria-hidden="true"></i> Print</span></a>
                    </div>
                </div>
                </form>
                </div> 
              
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="table-responsive">
                       <div class="content" id="content">
             
                <center>
                 <div class="header">
                <div class="box logo">
                    <img src="img/Barangay.svg" alt="" width="100" style="float: left"> 
                </div>
                <div class="box logo" style="margin-right: 50px">
                    <img src="img/lungsod.png" alt="" width="100" style="float: right; ">
                </div>
                <div class="box txt">
                    <h3>Republic of the Philippines</h3>
                    <h2>OFFICE OF THE </h2>
                    <h2>BARANGAY CHAIRMAN</h2>
                    <h3 style="margin-right: 65px">BARANGAY 206, ZONE 19, DISCRICT 11, MANILA</h3>
                </div>
                <h2 class="title" style="margin-right: 65px">Resident Barangay Inhabitants Report</h2>
            </div>
            </center>
            <br>
                    <table class="table table-bordered table-striped">  
                          <tr>  
                               <th class="text-center">Resident_ID</th>
                               <th class="text-center">Full Name</th>  
                               <th class="text-center">Address</th>  
                               <th class="text-center">Birth Place</th>  
                               <th class="text-center">Birthday</th>  
                               <th class="text-center">Sex</th>    
                               <th class="text-center">Civil Status</th>    
                               <th class="text-center">Tenant</th>    
                               <th class="text-center">Occupation</th>    
                               <th class="text-center">Relationship to Household Head</th>  
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($r))  
                     {  
                     ?>  
                        <tr>
                            <td class="text-center"><?php echo $row["resident_no"]; ?></td>   
                            <td class="text-center"><?php echo $row["firstname"] . " ". $row["lastname"]; ?></td>  
                            <td class="text-center"><?php echo $row["address"]; ?></td>  
                            <td class="text-center"><?php echo $row["birth_place"]; ?></td>  
                            <td class="text-center"><?php echo $row["birth_date"]; ?></td>  
                            <td class="text-center"><?php echo $row["gender"]; ?></td>  
                            <td class="text-center"><?php echo $row["civil_status"]; ?></td>  
                            <td class="text-center"><?php echo $row["tenant"]; ?></td>  
                            <td class="text-center"><?php echo $row["occupation"]; ?></td>  
                            <td class="text-center"><?php echo $row["relationship"]; ?></td>  
                        </tr>  
                     <?php  
                     }  
                     ?>
                    </table>  
              </div>
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

 <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=1100px, height=1000px, left=150, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size:11px; font-family:arial; font-weight:normal; margin-left: 5%;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
