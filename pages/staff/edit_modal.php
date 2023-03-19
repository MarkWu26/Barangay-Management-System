<?php echo'
<div id="editModal'.$row['id'].'" class="modal fade">
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
              <div class="modal-dialog modal-lg"  >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Edit Staff Information</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="container-fluid">
                                <div class="col-md-6 col-sm-12">

                                    <div class="form-group">
                                        <input type="hidden" value="'.$row['id'].'" name="hidden_id">
                                        <label class="control-label" >Name:</label><br>
                                        <div class="col-sm-4">
                                            <input style="text-transform:capitalize;" placeholder="Last Name" name="txt_lname" class="form-control input-sm" type="text"value="'.$row['l_name'].'" required/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input style="text-transform:capitalize;" placeholder="First Name" name="txt_fname" class="form-control input-sm col-sm-4" type="text" value="'.$row['f_name'].'" required/>
                                        </div>
                                        <div class="col-sm-4">
                                            <input style="text-transform:capitalize;" placeholder="Middle Name" name="txt_mname" class="form-control input-sm col-sm-4" type="text" value="'.$row['m_name'].'" required/>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Birthdate:</label>
                                        <input name="txt_bdate" type="date"  value="'.$row['bdate'].'" class="form-control input-sm input-size" required/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Religion:</label>
                                        <input style="text-transform:capitalize;" name="txt_religion" class="form-control input-sm input-size" type="text" value="'.$row['religion'].'" required/>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">Educational Attainment:</label>
                                        <select name="ddl_eattain" class="form-control input-sm input-size" required>
                                            <option selected>'.$row['educ'].'</option>
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
                                        <label class="control-label">Skills:</label>
                                        <input style="text-transform:capitalize;" name="txt_skills" class="form-control input-sm input-size" type="text" value="'.$row['skills'].'" required/>
                                    </div>  

                                    <div class="form-group">
                                        <label class="control-label">Phone Number:</label>
                                        <input name="txt_num" class="form-control input-sm input-size" type="text" value="'.$row['num'].'" required/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Username:</label>
                                        <input name="txt_uname" id="us" class="form-control input-sm input-size" value="'.$row['username'].'" type="text" required/>
                                        <label id="su" style="color:#CC0000;" ></label>
                                    </div>

                                </div>


                                <div class="col-md-6 col-sm-12">
                                    
                                    <div class="form-group">     
                                        <label class="control-label">Gender:</label>
                                        <select name="ddl_gender" class="form-control input-sm" required>
                                            <option value="'.$row['gender'].'" selected="">'.$row['gender'].'</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Marital Status:</label>
                                        <select name="txt_mstatus" class="form-control input-sm" required>
                                            <option value="'.$row['maritalstatus'].'" selected="">'.$row['maritalstatus'].'</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Separated/Divorced">Separated/Divorced</option>
                                        <option value="Widowed">Widowed</option>
                                         </select>
                                    </div> 

                                    <div class="form-group">
                                        <label class="control-label">Job Description:</label>
                                        <input style="text-transform:capitalize;" name="txt_desc" class="form-control input-sm" type="text" value="'.$row['Job_description'].'" required/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Job Contract:</label>
                                        <select name="txt_edit_contract" class="form-control input-sm">
                                        <option value="'.$row['Job_contract'].'" selected>'.$row['Job_contract'].'</option>
                                        <option value="Part-Time">Part-Time</option>
                                        <option value="Full-Time">Full-Time</option>
                                        </select>
                                    </div>

                                    

                                    <div class="form-group">
                                        <label class="control-label">Nationality:</label>
                                        <input style="text-transform:capitalize;" name="txt_national" class="form-control input-sm" type="text" value="'.$row['nationality'].'" required/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_upass" id="checkpass" oninput="password()" value="'.$row['password'].'" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9!@#$%^&*_-]).{5,}" title="Must have a minimum length of 5 characters and must contain at least one uppercase letter, one lowercase letter, and a number or symbol." class="form-control input-sm" type="password" required/>
                                    </div>

                 		          


        



                                </div>

                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_save" id="btn_save" value="Save"/>
                    </div>
                </div>
              </div>
              </form>
            </div>';?>


<script type="text/javascript">

function password(){
    var pass = document.getElementById("checkpass").value;
    var conpass = document.getElementById("checkpass2").value;

        if(pass != conpass)
        {
            document.getElementById("sheesh").innerHTML = "Passwords do not match!";
            document.getElementById("btn_save").disabled = true;
        }
        else
        {
            document.getElementById("sheesh").innerHTML = '<span style="color:#006600;">Passwords matched!</span>';
            document.getElementById("btn_save").disabled = false;
        } 
};



$(document).ready(function() {
 
    var timeOut = null; // this used for hold few seconds to made ajax request

    var loading_html = '<img src="../../img/ajax-loader.gif" style="height: 20px; width: 20px;"/>'; // just an loading image or we can put any texts here

    //when button is clicked
    $('#us').keyup(function(e){

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
        timeOut = setTimeout(available, 500);  // delay delay ajax request for 1000 milliseconds
        $('#su').html(loading_html); // adding the loading text or image
    });
});
function available(){
//get the username
var username = $('#us').val();

//make the ajax request to check if username available or not
$.post("check_username.php", { username: username },
function(result)
{
    console.log(result);
    if(result != 0)
    {
        $('#su').html('Not Available');
        document.getElementById("btn_edit").disabled = true;
    }
    else
    {
        $('#su').html('<span style="color:#006600;">Available</span>');
        document.getElementById("btn_edit").disabled = false;
    }
});

}






</script>

