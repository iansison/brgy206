<div class="modal fade" id="view<?php echo $id?>">
      <form method="POST" enctype="multipart/form-data" action="complaintEdit.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-eye" style="margin-right: 3px"></i>
                        Complain
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                        <input name="id" type="hidden" value="<?php echo $id ?>"/>
                            <div class="col-sm-12">

                                <div class="row">
                                   <div class="form-group col-sm-6">
                                        <label for="fn">RBI <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="fullname" value="<?php echo $row['urbi'] ?>" readonly>
                                    </div>
                                </div>  
                                <hr>

                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="fn">Resident Name <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="fullname" value="<?php echo $row['fullname'] ?>" readonly>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="fn">Contact No. <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="fullname" value="<?php echo $row['contactno'] ?>" readonly>
                                    </div>

                                    <div class="form-group col-sm-4">
                                        <label for="fn">Email <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="fullname" value="<?php echo $row['email'] ?>" readonly>
                                    </div>
                                </div>
                                
                                <hr>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="date">Narration: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="date" name="dates"  value="<?php echo $row['narration'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="password">Date: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="time" name="timee"  value="  <?php echo date("M d(D), Y",strtotime($row['dates'])); ?>" readonly>
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="">Details <span style="color:red;">*</span></label>
                                        <textarea type="text" class="form-control" id="details_session" name="details_session" readonly><?php echo $row['details'] ?>
                                        </textarea>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                 <!--  <button type="submit" class="btn btn-primary" name="btn_edit"><i class="fa fa-check"></i> Submit</button> -->
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>