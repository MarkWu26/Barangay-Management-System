<!DOCTYPE html>
<html>

    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../login.php"); 
    }
    else
    {
    ob_start();
    include('../head_css.php'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../connection.php";
        ?>
        <?php include('../header.php'); ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include('../sidebar-left.php'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Clearance
                    </h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">

                    <?php
                    if($_SESSION['role'] == "Administrator" || isset($_SESSION['staff']))
                    {
                    ?>

                   
                        <!-- left column -->
                            <div class="box">
                                <div class="box-header">
                                    <div style="padding:10px;">
                                        
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Clearance</button>  

                                        <?php 
                                            if(!isset($_SESSION['staff']))
                                            {
                                        ?>
                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button> 
                                        <?php
                                            }
                                        ?>
                                
                                    </div>                                
                                </div><!-- /.box-header -->

                                <div class="box-body table-responsive">
                                <ul class="nav nav-tabs" id="myTab">
                                      <li class="active"><a data-toggle="tab" data-target="#pending">Pending</a></li>
                                      <li><a data-target="#approved" data-toggle="tab">Approved</a></li>
                                      <li><a data-target="#disapproved" data-toggle="tab">Disapproved</a></li>
                                     
                                </ul>

                                

                                <form method="post">

                                    <div class="tab-content">

                                    <div id="pending" class="tab-pane active in">
                                        <table id="table1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <?php 
                                                        if(!isset($_SESSION['administrator']))
                                                        {
                                                    ?>
                                                    <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                    <?php
                                                        }
                                                    ?>
                                                    <th>Resident Name</th>
                                                    <th>Purpose</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!isset($_SESSION['administrator']))
                                                {

                                                    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblclearance p left join tblresident r on r.id = p.residentid where status = 'New' ") or die('Error: ' . mysqli_error($con));
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                            <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                            <td>'.$row['residentname'].'</td>
                                                            <td>'.$row['purpose'].'</td>
                                                            <td>
                                                            <button class="btn btn-success btn-sm" data-target="#approveModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-thumbs-up"></i> Approve</button>
                                                            <button class="btn btn-danger btn-sm" data-target="#disapproveModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-thumbs-down"></i> Disapprove</button></td>
                                                        </tr>
                                                        ';

                                                        include "edit_modal.php";
                                                        include "approve_modal.php"; 
                                                        include "disapprove_modal.php"; 
                                                    }
                                                }
                                                else{
                                                    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblclearance p left join tblresident r on r.id = p.residentid where status = 'New' ") or die('Error: ' . mysqli_error($con));
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                            <td>'.$row['residentname'].'</td>
                                                            <td>'.$row['purpose'].'</td>
                                                        </tr>
                                                        ';

                                                        include "edit_modal.php";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        </div>



                                        <div id="approved" class="tab-pane">
                                            <table id="table" class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <?php 
                                                        if(!isset($_SESSION['administrator']))
                                                        {
                                                        ?>
                                                        <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                        <?php
                                                        }
                                                        ?>
                                                        <th>Clearance #</th>
                                                        <th>Resident Name</th>
                                                        <th>Findings</th>
                                                        <th>Purpose</th>
                                                        <th>OR Number</th>
                                                        <th>Amount</th>
                                                        <th>Expiry Date </th>
                                                        <th style="width: 15% !important;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                        if(!isset($_SESSION['administrator']))
                                                            {
                                                                $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblclearance p left join tblresident r on r.id = p.residentid  where status = 'Approved'") or die('Error: ' . mysqli_error($con));
                                                                while($row = mysqli_fetch_array($squery))
                                                                {
                                                                    echo '
                                                                    <tr>
                                                                        <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                                        <td>'.$row['clearanceNo'].'</td>
                                                                        <td>'.$row['residentname'].'</td>
                                                                        <td>'.$row['findings'].'</td>
                                                                        <td>'.$row['purpose'].'</td>
                                                                        <td>'.$row['orNo'].'</td>
                                                                        <td>₱ '.number_format($row['samount'],2).'</td>
                                                                        <td>'.$row['Expire'].'</td>
                                                                        <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                                        <a href="clearance_form.php?resident='.$row['residentid'].'&clearance='.$row['clearanceNo'].'&val='.base64_encode($row['clearanceNo'].'|'.$row['residentname'].'|'.$row['dateRecorded']).'" onclick="location.reload();" class="btn btn-primary btn-sm">
                                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Generate</a>
                                                                    </tr>
                                                                    ';

                                                                    include "edit_modal.php";
                                                                }
                                                            }
                                                        else{
                                                                $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblclearance p left join tblresident r on r.id = p.residentid  where status = 'Approved'") or die('Error: ' . mysqli_error($con));
                                                                while($row = mysqli_fetch_array($squery))
                                                                {
                                                                    echo '
                                                                    <tr>
                                                                        <td>'.$row['clearanceNo'].'</td>
                                                                        <td>'.$row['residentname'].'</td>
                                                                        <td>'.$row['findings'].'</td>
                                                                        <td>'.$row['purpose'].'</td>
                                                                        <td>'.$row['orNo'].'</td>
                                                                        <td>₱ '.number_format($row['samount'],2).'</td>
                                                                        <td><button class="btn btn-primary btn-sm" data-target="#editModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                                                        <a  href="clearance_form.php?resident='.$row['residentid'].'&clearance='.$row['clearanceNo'].'&val='.sha1($row['clearanceNo'].'|'.$row['residentname'].'|'.$row['dateRecorded']).'" onclick="location.reload();" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Generate</a></td>
                                                                    </tr>
                                                                    ';

                                                                    include "edit_modal.php";
                                                                }
                                                            }
                                                    ?>
                                                </tbody>
                                            </table>

                                        </div>

                                        <div id="disapproved" class="tab-pane">
                                        <table id="table2" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <?php 
                                                        if(!isset($_SESSION['administrator']))
                                                        {
                                                    ?>
                                                    <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                    <?php
                                                        }
                                                    ?>
                                                    <th>Clearance #</th>
                                                    <th>Resident Name</th>
                                                    <th>Findings</th>
                                                    <th>Purpose</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!isset($_SESSION['administrator']))
                                                {

                                                    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblclearance p left join tblresident r on r.id = p.residentid where status = 'Disapproved' ") or die('Error: ' . mysqli_error($con));
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                            <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                            <td>'.$row['clearanceNo'].'</td>
                                                            <td>'.$row['residentname'].'</td>
                                                            <td>'.$row['findings'].'</td>
                                                            <td>'.$row['purpose'].'</td>
                                                        </tr>
                                                        ';

                                                        include "edit_modal.php";
                                                    }
                                                }
                                                else{
                                                    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblclearance p left join tblresident r on r.id = p.residentid where status = 'Disapproved' ") or die('Error: ' . mysqli_error($con));
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                            <td>'.$row['residentname'].'</td>
                                                            <td>'.$row['findings'].'</td>
                                                            <td>'.$row['purpose'].'</td>
                                                        </tr>
                                                        ';

                                                        include "edit_modal.php";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        </div>

                                        

                                        
                                        




                                    </div>

                                    <?php include "../deleteModal.php"; ?>

                                </form>

                                </div><!-- /.box-body -->

                            </div><!-- /.box -->

                            <?php include "../edit_notif.php"; ?>

                            <?php include "../added_notif.php"; ?>

                            <?php include "../delete_notif.php"; ?>

                            <?php include "../duplicate_error.php"; ?>

                             <?php include "add_modal.php"; ?>

                             <?php include "function.php"; ?>

                             <?php include "approve_modal.php"; ?>


                    </div>   <!-- /.row -->
                    <?php
                    }
                    elseif($_SESSION['role'] == "administrator")
                    {
                    ?>
                  
                        <!-- left column -->
                            <div class="box">
                                
                                <div class="box-body table-responsive">
                                
                                <form method="post">                                        
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                    <th>Resident Name</th>
                                                    <th>Purpose</th>
                                                    <th style="width: 25% !important;">Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblclearance p left join tblresident r on r.id = p.residentid  where status = 'New'") or die('Error: ' . mysqli_error($con));
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                        <td>'.$row['residentname'].'</td>
                                                        <td>'.$row['purpose'].'</td>
                                                        <td>
                                                            <button class="btn btn-success btn-sm" data-target="#approveModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-thumbs-up"></i> Approve</button>
                                                            <button class="btn btn-danger btn-sm" data-target="#disapproveModal'.$row['pid'].'" data-toggle="modal"><i class="fa fa-thumbs-down"></i> Disapprove</button>
                                                        </td>
                                                    </tr>
                                                    ';
                                                    include "approve_modal.php";
                                                    include "disapprove_modal.php";
                                                }
                                                ?>
                                            </tbody>
                                        </table>


                                    </form>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                    <?php include "function.php"; ?>


                    </div>   <!-- /.row -->

                    <?php
                    }
                    else
                    {
                    ?>

                   
                        <!-- left column -->
                            <div class="box">
                                    <div class="box-header">
                                    <div style="padding:10px;">
                                        
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#reqModal"><i class="fa fa-user-plus" aria-hidden="true"></i> Request Clearance</button>  

                                    </div>                                
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                <ul class="nav nav-tabs" id="myTab">
                                      <li class="active"><a data-target="#new" data-toggle="tab">Pending</a></li>
                                      <li><a data-target="#approved" data-toggle="tab">Approved</a></li>
                                      <li><a data-target="#disapproved" data-toggle="tab">Disapproved</a></li>
                                   
                                </ul>

                                <form method="post">
                                 <div class="tab-content">
                                    <div id="new" class="tab-pane active in">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Purpose</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * FROM tblclearance p left join tblresident r on r.id = p.residentid where r.id = ".$_SESSION['userid']." and status = 'New' ") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery) > 0)
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['purpose'].'</td>
                                                    </tr>
                                                    ';

                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }

                                                    
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>

                                    <div id="approved" class="tab-pane ">
                                    <table id="table" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Clearance #</th>
                                                <th>Findings</th>
                                                <th>Purpose</th>
                                                <th>OR Number</th>
                                                <th>Amount</th>
                                                <th>Expiry Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * FROM tblclearance p left join tblresident r on r.id = p.residentid where r.id = ".$_SESSION['userid']." and status = 'Approved' ") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery) > 0)
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['clearanceNo'].'</td>
                                                        <td>'.$row['findings'].'</td>
                                                        <td>'.$row['purpose'].'</td>
                                                        <td>'.$row['orNo'].'</td>
                                                        <td>₱ '.number_format($row['samount'],2).'</td>
                                                        <td> '.$row['Expire'].' </td>
                                                    </tr>
                                                    ';

                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }

                                                    
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>

                                    <div id="disapproved" class="tab-pane">
                                    <table id="table2" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Clearance #</th>
                                                <th>Findings</th>
                                                <th>Purpose</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $squery = mysqli_query($con, "SELECT * FROM tblclearance p left join tblresident r on r.id = p.residentid where r.id = ".$_SESSION['userid']." and status = 'Disapproved' ") or die('Error: ' . mysqli_error($con));
                                            if(mysqli_num_rows($squery) > 0)
                                            {
                                                while($row = mysqli_fetch_array($squery))
                                                {
                                                    echo '
                                                    <tr>
                                                        <td>'.$row['Expire'].'</td>
                                                        <td>'.$row['findings'].'</td>
                                                        <td>'.$row['purpose'].'</td>
                                                    </tr>
                                                    ';

                                                }
                                            }
                                            else{
                                                echo '
                                                <tr>
                                                <td colspan="5" style="text-align: center;">No record found</td>
                                                </tr>
                                                ';
                                            }

                                                    
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>

                                    <div id="pending" class="tab-pane">
                                        <table id="table1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <?php 
                                                        if(!isset($_SESSION['administrator']))
                                                        {
                                                    ?>
                                                    <th style="width: 20px !important;"><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)"/></th>
                                                    <?php
                                                        }
                                                    ?>
                                                    <th>Resident Name</th>
                                                    <th>Findings</th>
                                                    <th>Purpose</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!isset($_SESSION['administrator']))
                                                {

                                                    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblclearance p left join tblresident r on r.id = p.residentid where status = 'New' ") or die('Error: ' . mysqli_error($con));
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                            <td><input type="checkbox" name="chk_delete[]" class="chk_delete" value="'.$row['pid'].'" /></td>
                                                            <td>'.$row['residentname'].'</td>
                                                            <td>'.$row['findings'].'</td>
                                                            <td>'.$row['purpose'].'</td>
                                                        </tr>
                                                        ';

                                                        include "edit_modal.php";
                                                    }
                                                }
                                                else{
                                                    $squery = mysqli_query($con, "SELECT *,CONCAT(r.lname, ', ' ,r.fname, ' ' ,r.mname) as residentname,p.id as pid FROM tblclearance p left join tblresident r on r.id = p.residentid where status = 'New' ") or die('Error: ' . mysqli_error($con));
                                                    while($row = mysqli_fetch_array($squery))
                                                    {
                                                        echo '
                                                        <tr>
                                                            <td>'.$row['residentname'].'</td>
                                                            <td>'.$row['findings'].'</td>
                                                            <td>'.$row['purpose'].'</td>
                                                        </tr>
                                                        ';

                                                        include "edit_modal.php";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                        </div>

                                    </div>

                                    </form>
                                    <?php
                                    include "../duplicate_error.php";
                                    include "lengthstay_error.php";
                                    include "req_modal.php";
                                     include "function.php";
                                      ?>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                    </div>   <!-- /.row -->

                    <?php
                    }
                    ?>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <?php }
        include "../footer.php"; ?>
        
<script type="text/javascript">


        $(function() {
            $("#table").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] } ],"aaSorting": []
            });
            $("#table1").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] } ],"aaSorting": []
            });
          
            $("#table2").dataTable({
               "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0 ] } ],"aaSorting": []
            });
        });
   
  
   
   

</script>
    </body>
</html>