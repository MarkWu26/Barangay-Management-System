<!-- ========================= MODAL ======================= -->
<div id="addCourseModal" class="modal fade">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="modal-dialog modal-lg"  >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Staffs</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-md-6 col-sm-12">

                                    <div class="form-group">
                                        <label class="control-label" >Name:</label><br>
                                        <div class="col-sm-4">
                                            <input name="txt_lname" class="form-control input-sm" type="text" placeholder="Lastname" required/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="txt_fname" class="form-control input-sm col-sm-4" type="text" placeholder="Firstname" required/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="txt_mname" class="form-control input-sm col-sm-4" type="text" placeholder="Middlename" required/>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Birthdate:</label>
                                        <input name="txt_bdate" type="date" placeholder="Birthdate" required/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Religion:</label>
                                        <input name="txt_religion" class="form-control input-sm input-size" type="text" placeholder="Religion" required/>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">Educational Attainment:</label>
                                        <select name="ddl_eattain" class="form-control input-sm input-size" required>
                                            <option>No schooling completed</option>
                                            <option>Elementary</option>
                                            <option>High school, undergrad</option>
                                            <option>High school graduate</option>
                                            <option>College, undergrad</option>
                                            <option>Vocational</option>
                                            <option>Bachelor’s degree</option>
                                            <option>Master’s degree</option>
                                            <option>Doctorate degree</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Skills:</label>
                                        <input name="txt_skills" class="form-control input-sm" type="text" placeholder="Skills" required/>
                                    </div>


                                    

                                  

                                    <div class="form-group">
                                        <label class="control-label">Phone Number:</label>
                                        <input name="txt_num" class="form-control input-sm" type="text" placeholder="Phone Number" required/>
                                    </div>

                                 



                                    <div class="form-group">
                                        <label class="control-label">Username:</label>
                                        <input name="txt_uname" id="username" class="form-control input-sm input-size" type="text" placeholder="Username" required/>
                                        <label id="user_msg" style="color:#CC0000;" ></label>
                                    </div>

                                </div>


                                <div class="col-md-6 col-sm-12">
                                    
                                    <div class="form-group">     
                                        <label class="control-label">Gender:</label>
                                        <select name="ddl_gender" class="form-control input-sm" required>
                                            <option selected="" disabled="">-Select Gender-</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Marital Status:</label>
                                        <input name="txt_mstatus" class="form-control input-sm" type="text" placeholder="Marital Status" required/>
                                    </div> 

                                    <div class="form-group">
                                        <label class="control-label">Job Description:</label>
                                        <input name="txt_desc" class="form-control input-sm" type="text" placeholder="Job Description" required/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Job Contract:</label>
                                        <input name="txt_contract" class="form-control input-sm" type="text" placeholder="Job Contract" required/>
                                    </div>

                                    

                                    <div class="form-group">
                                        <label class="control-label">Nationality:</label>
                                        <input name="txt_national" class="form-control input-sm" type="text" placeholder="Nationality" required/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">Password:</label>
                                        <input name="txt_upass" class="form-control input-sm" type="password" placeholder="Password" required/>
                                    </div>

        



                                </div>

                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_add" id="btn_add" value="Add Resident"/>
                    </div>
                </div>
              </div>
              </form>
            </div>

<script type="text/javascript">
    $(document).ready(function() {
 
        var timeOut = null; // this used for hold few seconds to made ajax request
 
        var loading_html = '<img src="../../img/ajax-loader.gif" style="height: 20px; width: 20px;"/>'; // just an loading image or we can put any texts here
 
        //when button is clicked
        $('#username').keyup(function(e){
 
            // when press the following key we need not to make any ajax request, you can customize it with your own way
            switch(e.keyCode)
            {
                //case 8:   //backspace
                case 9:     //tab
                case 13:    //enter
                case 16:    //shift
                case 17:    //ctrl
                case 18:    //alt
                case 19:    //pause/break
                case 20:    //caps lock
                case 27:    //escape
                case 33:    //page up
                case 34:    //page down
                case 35:    //end
                case 36:    //home
                case 37:    //left arrow
                case 38:    //up arrow
                case 39:    //right arrow
                case 40:    //down arrow
                case 45:    //insert
                //case 46:  //delete= '1'
                    return;
            }
            if (timeOut != null)
                clearTimeout(timeOut);
            timeOut = setTimeout(is_available, 500);  // delay delay ajax request for 1000 milliseconds
            $('#user_msg').html(loading_html); // adding the loading text or image
        });
  });
function is_available(){
    //get the username
    var username = $('#username').val();
 
    //make the ajax request to check if username available or not
    $.post("check_username.php", { username: username },
    function(result)
    {
        console.log(result);
        if(result != 0)
        {
            $('#user_msg').html('Not Available');
            document.getElementById("btn_add").disabled = true;
        }
        else
        {
            $('#user_msg').html('<span style="color:#006600;">Available</span>');
            document.getElementById("btn_add").disabled = false;
        }
    });
 
}
</script>