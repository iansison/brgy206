<div class="modal fade" id="addBusiness" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" >Add Business</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      
                    </div>
                    <div class="modal-body">
                        <div class="form">

                            <form action="business_requestAdd.php" method="POST" enctype="multipart/form-data">

                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Requestor's Name</label>
                                    <input type="text" class="form-control"  name="ufullname" placeholder = "Full Name" >
                                </div>

                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Business Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bname" required placeholder="Business Name">
                                </div>

                             

                                <input type="hidden" name="uname" value="<?php echo $fullname;?>">
                                <input type="hidden" name="uemail" value="<?php echo $uemail;?>">

                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Contact No.</label>
                                    <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bcontactno"required placeholder="Contact">
                                </div>
                        
                                
                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Business Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bemail"required placeholder="Contact">
                                </div>

                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Location</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lacation" required style="text-transform: ;" placeholder="Location">
                                </div>
                            
                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Business Photo</label>
                                    <input type="file" class="form-control" id="img" name="img"> 
                                </div>
                                <div class="element" style="margin-bottom: 1em">
                                    <label for="">Description</label>
                                    <textarea class="form-control" id="Purpose" rows="3" required name="description" autofocus></textarea>
                                </div>
                                <br>
                                <div class="btn-footer" style="float: right">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                                    <input type="hidden" name="businessId" value="<?php echo $businessId;?>">
                                    <button type="submit" class="btn btn-primary" name="submit">ADD</button>
                                </div>
                            </form>
                        </div>
                    </div>
                   
                    </div>
                </div>
            </div>