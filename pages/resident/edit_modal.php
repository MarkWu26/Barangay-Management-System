<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">

<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Resident Information</h4>
        </div>
        <div class="modal-body">';

        $edit_query = mysqli_query($con,"SELECT *, substring(num, 3, 1000) as newnum from tblresident where id = '".$row['id']."' ");
   
        $erow = mysqli_fetch_array($edit_query);
  

        echo '
            <div class="row">
                <div class="container-fluid">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">

                        <input type="hidden" value="'.$erow['id'].'" name="hidden_id" id="hidden_id"/>
                            <label class="control-label">Name:</label><br>
                            <div class="col-sm-4">
                                <input style="text-transform: capitalize;" name="txt_edit_lname" placeholder="Last Name" class="form-control input-sm" type="text" value="'.$erow['lname'].'" style="text-transform:capitalize;" required/>
                            </div> 
                            <div class="col-sm-4">
                                <input style="text-transform: capitalize;" name="txt_edit_fname" placeholder="First Name" class="form-control input-sm" type="text" value="'.$erow['fname'].'" required/>
                            </div> 
                            <div class="col-sm-4">
                                <input style="text-transform: capitalize;" name="txt_edit_mname" placeholder="Middle Name" class="form-control input-sm" type="text" value="'.$erow['mname'].'" required/>
                            </div> <br>
                        </div>

                        <div class="form-group">
                            <label class="control-label" style="margin-top:10px;">Birthdate:</label>
                            <input name="txt_edit_bdate" class="form-control input-sm" type="date" value="'.$erow['bdate'].'" required/> 
                        </div>

                     

                        <div class="form-group">
                            <label class="control-label">Blood Type:</label>
                            <select name="txt_edit_btype" class="form-control input-sm" required>
                            <option selected>'.$erow['bloodtype'].'</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB+">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            </select>
                        </div>

           
                     

                        <div class="form-group">
                            <label class="control-label">Nationality:</label>
                            <input style="text-transform: capitalize;" name="txt_edit_national" class="form-control input-sm" type="text" value="'.$erow['nationality'].'" required/>
                        </div>

                      

                        <div class="form-group">
                            <label class="control-label">Educational Attainment:</label>
                            <select name="ddl_edit_eattain" class="form-control input-sm" required>
                                <option selected>'.$erow['highestEducationalAttainment'].'</option>
                                <option>No Schooling Completed</option>
                                <option>Elementary</option>
                                <option>High School Undergraduate</option>
                                <option>High School Graduate</option>
                                <option>College Undergraduate</option>
                                <option>Vocational</option>
                                <option>Bachelor’s Degree</option>
                                <option>Master’s Degree</option>
                                <option>Doctorate Degree</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Land Ownership Status:</label>
                            <select name="ddl_edit_los" class="form-control input-sm" required>
                                <option value="'.$erow['landOwnershipStatus'].'">'.$erow['landOwnershipStatus'].'</option>
                                <option>Owned</option>
                                <option>Landless</option>
                                <option>Tenant</option>
                                <option>Care Taker</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Water Usage:</label>
                        	<select name="txt_edit_water" class="form-control input-sm" required>
                                <option>'.$erow['waterUsage'].'</option>
                                <option>Faucet</option>
                                <option>Deep Well</option>
                            </select>
                        </div>

                         <div class="form-group">
                            <label class="control-label">Sanitary Toilet:</label>
                        	<select name="txt_edit_toilet" class="form-control input-sm" required>
                                <option>'.$erow['sanitaryToilet'].'</option>
                                <option>Water-sealed</option>
                                <option>Antipolo</option>
                                <option>None</option>
                            </select>
                        </div>

                        <div class="form-group">
                        <label class="control-label">Phone Number:</label>
                        <input type="select" placeholder="+63" type="text" readonly style="width:45px;margin-bottom:-30px;" class="form-control input-sm input-size">
                        <input  style="width:348px;margin-left:55px;" pattern="[9]{1}[0-9]{9}" title="Must start with 9 followed by 9 more digits." maxlength="10" name="txt_edit_num" class="form-control input-sm" type="text" value="'.$erow['newnum'].'" required/>
                    </div>
                  
                        <div class="form-group">
                            <label class="control-label">Username:</label>
                            <input name="txt_edit_uname" id="us" class="form-control input-sm" type="text" value="'.$erow['username'].'" required/>
                            <label id="su" style="color:#CC0000;" ></label>

                        </div>

                    </div>


                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="control-label">Gender:</label>
                            <select name="ddl_edit_gender" class="form-control input-sm" required>
                                <option value="'.$erow['gender'].'" selected="">'.$erow['gender'].'</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Birthplace:</label>
                            <input style="text-transform: capitalize;" name="txt_edit_bplace" class="form-control input-sm" type="text" value="'.$erow['bplace'].'" required/>
                        </div>

                        <div class="form-group">
                        <label class="control-label">Marital Status:</label>
                        <select name="txt_edit_mstatus" class="form-control input-sm" required>
                            <option selected="" value="'.$erow['maritalstatus'].'">'.$erow['maritalstatus'].'</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Separated/Divorced">Separated/Divorced</option>
                            <option value="Widowed">Widowed</option>
                        </select>
                    </div> 


                  

    

                        <div class="form-group">
                            <label class="control-label">Occupation:</label>
                            <input style="text-transform: capitalize;" name="txt_edit_occp" class="form-control input-sm" type="text" value="'.$erow['occupation'].'" required/>
                        </div>

                    

                        <div class="form-group">
                            <label class="control-label">Religion:</label>
                            <input style="text-transform: capitalize;" name="txt_edit_religion" class="form-control input-sm" type="text" value="'.$erow['religion'].'" required/>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Skills:</label>
                            <input style="text-transform: capitalize;" name="txt_edit_skills" class="form-control input-sm" type="text" value="'.$erow['skills'].'" required/>
                        </div>


                     

                        <div class="form-group">
                            <label class="control-label">House Ownership Status:</label>
                            <select name="ddl_edit_hos" class="form-control input-sm" required>
                                <option value="'.$erow['houseOwnershipStatus'].'" selected>'.$erow['houseOwnershipStatus'].'</option>
                                <option value="Own Home">Own Home</option>
                                <option value="Rent">Rent</option>
                                <option value="Live with Parents/Relatives">Live with Parents/Relatives</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label class="control-label">Lighting Facilities:</label>
                        	<select name="txt_edit_lightning" class="form-control input-sm" required>
                                <option>'.$erow['lightningFacilities'].'</option>
                                <option>Electric</option>
                                <option>Lamp</option>
                            </select>
                        </div>

                     


                        <div class="form-group">
                            <label>Password:</label>
                            <input name="txt_edit_upass" id="checkpass" value="'.$erow['password'].'" oninput="password()" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9!@#$%^&*_-]).{5,}" title="Must have a minimum length of 5 characters and must contain at least one uppercase letter, one lowercase letter, and a number or symbol." class="form-control input-sm pass" type="password" placeholder="Password" required/>
                          
                        </div>

                 	


                        <div class="form-group">
                            <label class="control-label">Image:</label>
                            
                            <input name="txt_edit_image" class="form-control input-sm" type="file" />
                        </div>

                    </div>

                    </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" id="btn_edit" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>







