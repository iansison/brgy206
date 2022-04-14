<div class="modal fade" id="editBlotterSession<?php echo $id?>">
      <form method="POST" enctype="multipart/form-data" action="staffEdit.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-eye"></i>
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
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Complainant: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="complainant" value="<?php echo $row['complainant'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Age: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="respondent" name="respondent" value="<?php echo $row['complainantAge'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Address: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="location" name="location" value="<?php echo $row['complainantAddress'] ?>" readonly>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="fn">Contact: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="location" name="location" value="<?php echo $row['complainantContact'] ?>" readonly>
                                    </div>

                                </div>

                                <hr>

                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Defendant: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="complainant" value="<?php echo $row['complainee'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Age: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="respondent" name="respondent" value="<?php echo $row['complaineeAge'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Address: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="location" name="location" value="<?php echo $row['complaineeAddress'] ?>" readonly>
                                    </div>

                                    <div class="form-group col-sm-3">
                                        <label for="fn">Contact: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="location" name="location" value="<?php echo $row['complaineeContact'] ?>" readonly>
                                    </div>

                                </div>
                                <hr>

                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="date">Date: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="date" name="date"  value="<?php echo $row['date'] ?>" readonly>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="password">Time: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="time" name="time"  value="<?php echo $row['time'] ?>" readonly>
                                </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                       <label for="text">Status: <span style="color:red;">*</span></label>
                                        <select class="form-control" name="status" >
                                          <option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                       <label for="text">Session No: <span style="color:red;">*</span></label>
                                       <input type="text" class="form-control"  value="<?php echo $row['session_no'] ?>" readonly>
                                    </div>
                                 
                                </div>
                         
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                            <label for="password">Details: <span style="color:red;">*</span></label>
                                            <textarea type="text" class="form-control" id="details" name="details" ><?php echo $row['details'] ?>
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