<div class="modal fade" id="addBlotter">
      <form method="POST" enctype="multipart/form-data" action="blotterAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                         Blotter
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                    <div class="card-body">
                        <div  class="row" style="color:black;">
                            
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Complainant: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="complainant" placeholder="Enter Complainant" size="100" autofocus required>
                                    </div>
                                    <!-- <div class="form-group col-sm-3">
                                        <label for="fn">Respondent: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="respondent" name="respondent" placeholder="Enter Respondent"  autofocus required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Location: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location"  autofocus required>
                                    </div> -->
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Age: <span style="color:red;">*</span></label>
                                         <input type="number" class="form-control" class="form-control" id="complainant" name="complainantAge" placeholder="Enter Age" size="100" autofocus required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Address: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="complainantAddress" placeholder="Enter Address" size="100" autofocus required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Contact: <span style="color:red;">*</span></label>
                                         <input type="tel" class="form-control" class="form-control" id="complainant" name="complainantContact" placeholder="Enter Contact" size="100" autofocus required>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Defendant: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="complainee" placeholder="Enter Defendant" size="100" autofocus required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Age: <span style="color:red;">*</span></label>
                                         <input type="number" class="form-control" class="form-control" id="complainant" name="complaineeAge" placeholder="Enter Age" size="100" autofocus required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Address: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control" class="form-control" id="complainant" name="complaineeAddress" placeholder="Enter Address" size="100" autofocus required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="fn">Contact: <span style="color:red;">*</span></label>
                                         <input type="tel" class="form-control" class="form-control" id="complainant" name="complaineeContact" placeholder="Enter Contact" size="100" autofocus required>
                                    </div>

                                </div>

                                <hr>

                                
                                <div class="row">
                                    <div class="form-group col-sm-3">
                                        <label for="date">Date: <span style="color:red;">*</span></label>
                                        <input type="date" class="form-control" id="date" name="date"  required>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="password">Time: <span style="color:red;">*</span></label>
                                        <input type="time" class="form-control" id="time" name="time"  required>
                                     </div>

                                     <div class="form-group col-sm-3">
                                        <label for="password">Location: <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" id="time" name="location"  required placeholder="Enter Location" >
                                     </div>
                                     <div class="form-group col-sm-3">
                                        <label for="text">Status: <span style="color:red;">*</span></label>
                                       <select class="form-control" name="status">
                                         <option disabled selected>Select. . .</option>
                                         <option value="Active">Active</option>
                                         <option value="Settled">Settled</option>
                                       </select>
                                     </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="password">Details: <span style="color:red;">*</span></label>
                                        <textarea type="text" class="form-control" id="details" name="details" placeholder="Enter Details" required rows="5"></textarea>
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
                  <button type="submit" class="btn btn-primary" name="btn_blotter"><i class="fa fa-check"></i> Submit</button>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>