<div class="modal fade" id="view<?php echo $id?>">
      <form  id="myForm" action="businessRequestScript.php" method="POST" enctype="multipart/form-data" >
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
                                         <label for="stats">Requestor: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control"  name="usersFullname" value="<?php echo $row['uname'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="cn">Business Name: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" maxlength="100" id="cn" name="businessName" value="<?php echo $row['businessName'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="cn">Business Email: <span style="color:red;">*</span></label>
                                        <input type="email" class="form-control" id="bbbemail" maxlength="100" name="usersEmail" value="<?php echo $row['uemail'] ?>" readonly >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="stats">Contact Number: <span style="color:red;">*</span></label>
                                        <input type="number" class="form-control" maxlength="100" id="cn" name="businessContactno" value="0<?php echo $row['businessContactno'] ?>" readonly>
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                        <label for="stats">Location: <span style="color:red;">*</span></label>

                                        <?php $location = $row['location'];?>

                                        <textarea type="text" class="form-control" name="usersPurpose" readonly><?php $location = str_replace("+", " ", $location); echo $location;?></textarea>
                                    </div>
                                </div>


                                


                               
                                <input type="hidden" class="form-control" id="businessRequestdenied" value="Your business request has been denied.">
                                <input type="hidden" class="form-control" id="businessRequestapproved" value="Your business request has been approved.">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                     <button type="submit" class="btn btn-warning" name="denied" onclick="sendEmail();myFunction()"><i class="fa fa-ban"></i> Denied</button>
                     <button type="submit" class="btn btn-success" id="abtn" name="approved" onclick="approve();myFunction()"><i class="fa fa-ban"></i> Approved</button>
                 
                                 <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#editBusiness<?php echo $buid;?>" style="display: flex; align-items: center; background-color: #4c6085; border-color:#4c6085; outline: none; padding: 5px"><i class="fas fa-edit"></i></label>
                                    Edit
                                    </button>
                      <?php include('Modal_editBusiness.php');?>
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
              var email = $("#bbbemail");
              var body = $("#businessRequestdenied");

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
              var email = $("#bbbemail");
              var body = $("#businessRequestapproved");

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

</script>