<?php echo '<div id="editModal'.$row['id'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-lg" style="width:500px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Course Info</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['id'].'" name="hidden_id" id="hidden_id"/>

                <div class="form-group">
                    <label>Position: </label>
                    <input class="form-control input-sm" type="text" value="'.$row['sPosition'].'" readonly/>
                </div>

               <div class="form-group">
                    <label>First Name:</label>
                    <input name="txt_fname" class="form-control input-sm" type="text" value="'.$row['f_name'].'" required/>
                </div>

                <div class="form-group">
                    <label>Middle Name:</label>
                    <input name="txt_mname" class="form-control input-sm" type="text" value="'.$row['m_name'].'" required/>
                </div>

                <div class="form-group">
                    <label>Last Name:</label>
                    <input name="txt_lname" class="form-control input-sm" type="text" value="'.$row['l_name'].'" required/>
                </div>

                <div class="form-group">
                    <label>Contact #: </label>
                    <input name="txt_edit_contact" class="form-control input-sm" type="text" value="'.$row['pcontact'].'" required />
                </div>
              
                <div class="form-group">
                    <label>Start Term: </label>
                    <input name="txt_edit_sterm" class="form-control input-sm" type="date" value="'.$row['termStart'].'" required />
                </div>
                <div class="form-group">
                    <label>End Term: </label>
                    <input name="txt_edit_eterm" class="form-control input-sm" type="date" value="'.$row['termEnd'].'" required />
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>