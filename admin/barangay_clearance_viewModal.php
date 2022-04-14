<div class="modal fade" id="view<?php echo $id?>">
      <form  id="myForm" action="barangay_clearanceDenied.php" method="POST" enctype="multipart/form-data" >
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-eye"></i>
                        View Request
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: white;">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                     <!--  <h4 class="sent-notification"></h4> -->
                        <div  class="row" style="color:black;">
                        <input name="id" type="hidden" value="<?php echo $id ?>"/>
                            <div class="col-sm-12">

                            <div class="row">
                               <div class="form-group col-sm-6">
                                    <label for="stats">RBI: <span style="color:red;">*</span></label>
                                    <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $row['urbi'] ?>" readonly>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="stats">Resident ID: <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" maxlength="100" id="cn" name="cnumber" value="<?php echo $residentId?>" readonly>
                                </div>
                              
                            </div>
                        
                            <hr>

                            <div class="row">
                            <div class="form-group col-sm-6">
                                  <label for="stats">Requestor: <span style="color:red;">*</span></label>
                                      <input type="text" class="form-control"  name="usersFullname" value="<?php echo $row['uname'] ?>" readonly>
                                </div>
                              <div class="form-group col-sm-6">
                                  <label for="stats">Contact Number: <span style="color:red;">*</span></label>
                                  <input type="number" class="form-control" maxlength="100" id="cn" name="cnumber" value="0<?php echo $row['ucontactno'] ?>" readonly>
                                </div>


                              </div>

                              <div class="row">
                                
                              <div class="form-group col-sm-6">
                                    <label for="cn">Email: <span style="color:red;">*</span></label>
                                    <input type="email" class="form-control" id="email" maxlength="100" id="cn" name="usersEmail" value="<?php echo $row['uemail'] ?>" readonly >
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="stats">Type of claim: <span style="color:red;">*</span></label>
                                    <input type="text" class="form-control" maxlength="100" id="cn" name="pickup" value="<?php echo $row['pickupMode'] ?>" readonly>
                                </div>
                              </div>
                              <hr>
                              
                            <div class="row">
                            
                              <div class="form-group col-sm-6">
                                <label for="stats">Request Purpose: <span style="color:red;">*</span></label>
                                <textarea type="text" class="form-control" name="usersPurpose" readonly><?php echo $row['upurpose'] ?></textarea>
                              </div>

                              <?php 
                                if($receipt == 'none') {
                                  ?>
                                  
                                  <div class="form-group col-sm-6" style="display: none">
                                      <label for="stats">Gcash Receipt: <span style="color:red;">*</span></label>
                                      <br>
                                      <a href="../resident/gcash/<?php echo $receipt;?>" target="_blank">
                                        <img src="../resident/gcash/<?php echo $receipt;?>" alt="" style="width: 70px; height: 70px; object-fit: cover;">
                                      </a>
                                  </div>
                                  <?php
                                }else {
                                  ?>
                                  <div class="form-group col-sm-6">
                                      <label for="stats">Gcash Receipt: <span style="color:red;">*</span></label>
                                      <br>
                                      <a href="../resident/gcash/<?php echo $receipt;?>" target="_blank">
                                        <img src="../resident/gcash/<?php echo $receipt;?>" alt="" style="width: 70px; height: 70px; object-fit: cover;">
                                      </a>
                                  </div>
                                  
                                  <?php
                                }
                              ?>
                           
                            </div>
                       
                               

                               
                                <!-- <div class="row">
                                </div> -->

                                <input type="hidden" class="form-control" id="denied" value="Your barangay clearance request has been denied.">
                                <input type="hidden" class="form-control" id="approved" value="Your barangay clearance request has been approved.">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                     <button type="submit" class="btn btn-warning" name="denied" onclick="sendEmail();myFunction()"><i class="fa fa-ban"></i> Denied</button>
                     <button type="submit" class="btn btn-success" id="abtn" name="approved" onclick="approve();myFunction()"><i class="fa fa-check"></i> Approved</button>
                 
                     
                 <?php
                  if($row['ustatus'] <> 'Approved'){
                    ?>
                    <div style="cursor: not-allowed;"> 
                       <a href="barangay_clearance_print.php?id=<?php echo $id ?>" type="submit" class="btn btn-primary" name="btn_print" target="_blank" style="pointer-events: none;"><i class="fa fa-print"></i> Print</a>
                    </div>
                    <?php
                  }else {
                    ?>
                      <a href="barangay_clearance_print.php?id=<?php echo $id ?>" type="submit" class="btn btn-primary" name="btn_print" target="_blank"><i class="fa fa-print"></i> Print</a>
                    <?php
                  }
                 ?>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
          function sendEmail() {
              var email = $("#email");
              var body = $("#denied");

              if (isNotEmpty(email) && isNotEmpty(body)) {
                  $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        email: email.val(),
                        body: body.val()
                    }, success: function (response) {
                          $('#myForm')[0].reset();
                        /* $('.sent-notification').text("Message Sent Successfully.");*/
                    }
                  });
              }
          }

          function approve() {
              var email = $("#email");
              var body = $("#approved");

              if (isNotEmpty(email) && isNotEmpty(body)) {
                  $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        email: email.val(),
                        body: body.val()
                    }, success: function (response) {
                          $('#myForm')[0].reset();
                        /* $('.sent-notification').text("Message Sent Successfully.");*/
                    }
                  });
              }
          }
          function isNotEmpty(caller) {
              if (caller.val() == "") {
                  caller.css('border', '1px solid red');
                  return false;
              } else
                  caller.css('border', '');

              return true;
          }





      </script>


<script>
    function myFunction() {
      alert("Message sent to the resident email!");
    }

x

</script>