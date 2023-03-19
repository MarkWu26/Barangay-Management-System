<?php
  if(isset($_POST['btn_add'])){
    $txt_cnum = $_POST['txt_cnum'];
    $ddl_resident = $_POST['ddl_resident'];
    $txt_findings = $_POST['txt_findings'];
    $txt_purpose = $_POST['txt_purpose'];
    $txt_ornum = $_POST['txt_ornum'];
    $txt_amount = $_POST['txt_amount'];
    $date = date('Y-m-d');
    $expDate = date("Y-m-d", strtotime("next year"));

    $chkdup = mysqli_query($con, "SELECT * FROM tblclearance WHERE clearanceNo = ".$txt_cnum." ");
    $num_rows = mysqli_num_rows($chkdup);

    if(isset($_SESSION['role'])){
        $action = 'Added Clearance with clearance number of '.$txt_cnum;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user, logdate, action) VALUES ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($num_rows == 0){
        if($_SESSION['role'] == "Administrator"){
            $query = mysqli_query($con, "INSERT INTO tblclearance (clearanceNo, residentid, findings, purpose, orNo, samount, dateRecorded, recordedBy, status, Expire) 
                             VALUES ('$txt_cnum', '$ddl_resident', '$txt_findings', '$txt_purpose', '$txt_ornum', '$txt_amount', '$date', '".$_SESSION['username']."', 'Approved', '$expDate')") or die('Error: ' . mysqli_error($con));
        }
        else{		//the status is new instead
            $query = mysqli_query($con, "INSERT INTO tblclearance (clearanceNo, residentid, findings, purpose, orNo, samount, dateRecorded, recordedBy, status, Expire) 
                             VALUES ('$txt_cnum', '$ddl_resident', '$txt_findings', '$txt_purpose', '$txt_ornum', '$txt_amount', '$date', '".$_SESSION['username']."', 'New', '$expDate')") or die('Error: ' . mysqli_error($con));
        }

        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }   
    }
    else{
    
    }
}

if(isset($_POST['btn_req'])){
    $chkblot = mysqli_query($con, "SELECT * FROM tblresident WHERE id = '".$_SESSION['userid']."'");
    $num_row = mysqli_num_rows($chkblot);

    if($num_row > 0)
    {
        $chk = mysqli_query($con, "SELECT * FROM tblresident WHERE id = '".$_SESSION['userid']."' ");
        while($row = mysqli_fetch_array($chk)){

            if($row['lengthofstay'] < -1){
                $_SESSION['lengthofstay'] = 1;
                header ("location: ".$_SERVER['REQUEST_URI']);
            }
            else{
                $txt_purpose = $_POST['txt_purpose'];
                $date = date('Y-m-d');
                $expirydate = date("Y-m-d", strtotime("next year"));

                $reqquery = mysqli_query($con, "INSERT INTO tblclearance (clearanceNo, residentid, findings, purpose, orNo, samount, dateRecorded, recordedBy, status, Expire) 
                        VALUES ('', '".$_SESSION['userid']."', '', '$txt_purpose', '', '', '$date', '".$_SESSION['role']."', 'New', '$expirydate') ") or die('Error: ' . mysqli_error($con));

                if($reqquery == true)
                {
                    header ("location: ".$_SERVER['REQUEST_URI']);
                } 
            }
        }
    } 
    else{
        $_SESSION['blotter'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }
}





if(isset($_POST['btn_approve']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_cnum = $_POST['txt_cnum'];
    $txt_findings = $_POST['txt_findings'];
    $txt_ornum = $_POST['txt_ornum'];
    $txt_amount = $_POST['txt_amount'];
    $date = date('Y-m-d');
   

    $expirydate = date('Y-m-d', strtotime('+1 years'));

    $approve_query = mysqli_query($con,"UPDATE tblclearance set dateApproved = '".$date."', clearanceNo= '".$txt_cnum."', findings = '".$txt_findings."', orNo = '".$txt_ornum."', samount = '".$txt_amount."', Expire ='".$expirydate."', status='Approved' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($approve_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}




   

  




if(isset($_POST['btn_disapprove']))
{

    $txt_id = $_POST['hidden_id'];
    $txt_findings = $_POST['txt_findings'];
    $disapprove_query = mysqli_query($con,"UPDATE tblclearance set findings = '".$txt_findings."' , status='Disapproved' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($disapprove_query == true){
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_edit_cnum = $_POST['txt_edit_cnum'];
    $txt_edit_findings = $_POST['txt_edit_findings'];
    $txt_edit_purpose = $_POST['txt_edit_purpose'];
    $txt_edit_ornum = $_POST['txt_edit_ornum'];
    $txt_edit_amount = $_POST['txt_edit_amount'];

    $update_query = mysqli_query($con,"UPDATE tblclearance set clearanceNo= '".$txt_edit_cnum."', findings = '".$txt_edit_findings."', purpose = '".$txt_edit_purpose."', orNo = '".$txt_edit_ornum."', samount = '".$txt_edit_amount."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if(isset($_SESSION['role'])){
        $action = 'Update Clearance with clearance number of '.$txt_edit_cnum;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}



if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from tblclearance where id = '$value' ") or die('Error: ' . mysqli_error($con));
                    
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>