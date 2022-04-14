<div class="modal fade" id="brgyclearanceModal">
      <form method="POST" enctype="multipart/form-data" action="bgyClearanceAdd.php">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-center">
                        <i class="fa fa-plus-circle"></i>
                        Barangay Clearance
                    </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color: white">&times;</span>
                  </button>
                </div>
                <div class="card card-primary">
                  <!-- form start -->
                  <div class="card-body">
                     <!--  <h4 class="sent-notification"></h4> -->
                     <form>



                       <div  class="row" style="color:black;">
                           <div class="col-sm-12">
                             <div class="row">
                                   <div class="form-group col-sm-6">
                                     <label for="stats">Full Name: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control"  name="ufullname" >
                                   </div>
                              </div>
                              <div class="form-group">
                                 <label for="Purpose">Purpose <i class="fas fa-edit"></i></label>
                                 <textarea class="form-control" id="Purpose" rows="3" required name="purpose" autofocus></textarea>
                              </div>
                    
                               <input type="hidden" class="form-control" id="approved" value="Your barangay clearance request has been approved.">
                           </div>
                       </div>
                   </div>
                     </form>
                    <!-- /.card-body -->
                  </div>
                <div class="modal-footer">
                  <div class="btn-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                  <button type="submit" class="btn btn-primary" name="submit"><i class="fa fa-check"></i> Submit</button>



                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </form>
      </div>