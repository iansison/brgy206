<div class="modal fade" id="businessclearanceModal">
      <form method="POST" enctype="multipart/form-data" action="businessClearanceAdd.php">
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
                                     <label for="stats">Requestor: <span style="color:red;">*</span></label>
                                         <input type="text" class="form-control"  name="ufullname" >
                                   </div>
                              </div>

                              <div class="element">
                                  <label style="font-weight: 450;">Business Name <i class="fas fa-edit"></i></label></label> 
                                  <input type="text" name="businessName"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div>
                        
                              <div class="element">
                              <label style="font-weight: 450;"> Business Type <i class="fas fa-edit"></i></label></label>
                                  <input type="text" name="businessType"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sole Proprietorship/Partnership/Owner">
                              </div>
                              
                              <div class="element">
                              <label style="font-weight: 450;"> Business Address <i class="fas fa-edit"></i></label></label>
                                  <input type="text" name="businessAddress"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div>

                              <div class="element">
                                  <label style="font-weight: 450;"> Owner/Proprietor <i class="fas fa-edit"></i></label></label>
                                  <input type="text" name="businessOwner"   class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              </div>
                              
                              <hr style="border-top: 1px solid #e9ecef;">
                              <div style="padding: .1em 1.4em">
                                <span style="font-weight: 450; font-size: 16px; font-weight: bold; color: #4c6085" id="fee">  Fee: Php 200 - 500</span> <br>
                              </div> 

                              <hr style="border-top: 1px solid #e9ecef;">

                              <div style="padding: .1em 1.4em">
                                  <h4>Mode of Pick up</h4>
                                  <div class="form-check" style="padding-left: 1.5rem;">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="bpickup" checked>
                                      <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -.5px;">
                                          Walk in (Only)
                                      </label>
                                      </div>
                                  </div>                    
                           </div>
                       </div>
                   </div>
                     </form>
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