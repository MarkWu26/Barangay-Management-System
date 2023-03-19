<!-- ========================= MODAL ======================= -->
            <div id="approveModal<?php echo $row['pid']?>" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Approve Clearance</h4>
                    </div>
                    <div class="modal-body">
                        <?php
                        
                        echo '
                <input type="hidden" value="'.$row['pid'].'" name="hidden_id" id="hidden_id"/>
                <input type="hidden" value="'.$row['residentname'].'" name="hidden_resname" id="hidden_resname"/>
                <input type="hidden" value="'.$row['num'].'" name="hidden_num" id="hidden_id"/>
                <input type="hidden" value="'.$row['purpose'].'" name="hidden_purpose" id="hidden_purpose"/>';

                        ?>

                        <div class="row">
                            <div class="col-md-12">

                            <!--    <div class="form-group">
                                    <label>Clearance #:</label>
                                    <input name="txt_cnum" class="form-control input-sm" type="number" placeholder="Clearance #"/>
                                </div>-->

                                <div class="form-group">
                                    <label>Findings:</label>
                                    <input name="txt_findings" class="form-control input-sm" type="text" placeholder="Findings"/>
                                </div>
                                <div class="form-group">
                                    <label>OR Number:</label>
                                    <input name="txt_ornum" class="form-control input-sm" type="number" placeholder="OR Number"/>
                                </div>
                                <div class="form-group">
                                    <label>Amount:</label>
                                    <input name="txt_amount" class="form-control input-sm" type="number" placeholder="Amount"/>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_approve" value="Approve"/>
                    </div>
                </div>
              </div>
              </form>
            </div>