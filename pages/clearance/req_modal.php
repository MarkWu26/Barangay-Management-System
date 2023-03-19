<!-- ========================= MODAL ======================= -->
            <div id="reqModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Manage Clearance</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Purpose:</label>
                                    <select name="txt_purpose" id="purpose" class="select2 form-control input-sm" placeholder="Purpose">
                                        <option selected="" disabled="">-- Select Purpose -- </option>
                                        <option>Job Application</option>
                                        <option>Opening a Bank Account</option>
                                        <option>Applying for another ID</option>
                                        <option>Applying for Business Permit</option>
                                    


                                     </select>
                                    <label id="user_msg" style="color:#CC0000;" ></label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_req" id="btn_req" value="Request Clearance"/>
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
        $('#purpose').change(function(e){
 
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
    //get the purpose
    var purpose = $('#purpose').val();
 
    //make the ajax request to check is username available or not
    $.post("check_purpose.php", { purpose: purpose},
    function(result)
    {
        console.log(result);
        if(result != 0)
        {
            $('#user_msg').html('Clearance already requested!');
            document.getElementById("btn_req").disabled = true;
        }
        else
        {
            $('#user_msg').html('<span style="color:#006600;">Available</span>');
            document.getElementById("btn_req").disabled = false;
        }
    });
 
}
</script>