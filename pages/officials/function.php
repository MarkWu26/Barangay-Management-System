<?php
if(isset($_POST['btn_add'])){
    $ddl_pos = $_POST['ddl_pos'];
    $txt_lname = $_POST['txt_lname'];
    $txt_mname = $_POST['txt_mname'];
    $txt_fname = $_POST['txt_fname'];
    $txt_contact = $_POST['txt_contact'];
  
    $txt_sterm = $_POST['txt_sterm'];
    $txt_eterm = $_POST['txt_eterm'];

    if(isset($_SESSION['role'])){
        $action = 'Added Official named '.$txt_cname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $q = mysqli_query($con,"SELECT * from tblofficial where sPosition = '".$ddl_pos."' and termStart = '".$txt_sterm."' and termEnd = '".$txt_eterm."' ");
    $ct = mysqli_num_rows($q);


    if($ct != 1){
        $query = mysqli_query($con,"INSERT INTO tblofficial (sPosition,l_name,f_name,m_name,pcontact,termStart,termEnd,status) 
        values ('$ddl_pos', '$txt_lname', '$txt_fname', '$txt_mname', '$txt_contact', '$txt_sterm', '$txt_eterm', 'Ongoing Term')") or die('Error: ' . mysqli_error($con));
        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        }   
    }
    else{
        $_SESSION['duplicate'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }
    
}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    
   
    $txt_lname = $_POST['txt_lname'];
    $txt_mname = $_POST['txt_mname'];
    $txt_fname = $_POST['txt_fname'];
    $txt_edit_contact = $_POST['txt_edit_contact'];
    $txt_edit_sterm = $_POST['txt_edit_sterm'];
    $txt_edit_eterm = $_POST['txt_edit_eterm'];


    if(isset($_SESSION['role'])){
        $action = 'Update Official named '.$txt_lname.$txt_mname.$txt_fname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $update_query = mysqli_query($con,"UPDATE tblofficial set f_name = '".$txt_fname."', m_name = '".$txt_mname."', l_name = '".$txt_lname."', pcontact = '".$txt_edit_contact."',  termStart = '".$txt_edit_sterm."', termEnd = '".$txt_edit_eterm."' where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));

    if($update_query == true){
        $_SESSION['edited'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_end']))
{

    $txt_id = $_POST['hidden_id'];

    $end_query = mysqli_query($con,"UPDATE tblofficial set status = 'End Term' where id = '$txt_id' ") or die('Error: ' . mysqli_error($con));

    if($end_query == true){
        $_SESSION['end'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_start']))
{

    $txt_id = $_POST['hidden_id'];

    $start_query = mysqli_query($con,"UPDATE tblofficial set status = 'Ongoing Term' where id = '$txt_id' ") or die('Error: ' . mysqli_error($con));

    if($start_query == true){
        $_SESSION['start'] = 1;
        header("location: ".$_SERVER['REQUEST_URI']);
    }
}

if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from tblofficial where id = '$value' ") or die('Error: ' . mysqli_error($con));
                    
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>