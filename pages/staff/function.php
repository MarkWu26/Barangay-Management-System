<?php
if(isset($_POST['btn_add'])){
    
    $txt_lname = $_POST['txt_lname'];
    $txt_mname = $_POST['txt_mname'];
    $txt_fname = $_POST['txt_fname'];
    $txt_bdate = $_POST['txt_bdate'];
    $ddl_eattain = $_POST['ddl_eattain'];
    $txt_religion = $_POST['txt_religion'];
    $txt_skills = $_POST['txt_skills'];
    $txt_num = $_POST['txt_num'];
    $ddl_gender = $_POST['ddl_gender'];
    $txt_mstatus = $_POST['txt_mstatus'];
    $txt_desc = $_POST['txt_desc'];
    $txt_contract = $_POST['txt_contract'];
    $txt_national = $_POST['txt_national'];
    $txt_uname = $_POST['txt_uname'];
    $txt_pass = $_POST['txt_upass'];

    if(isset($_SESSION['role'])){
        $action = 'Added Staff with username of '.$txt_uname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $su = mysqli_query($con,"SELECT * from tblstaff where username = '".$txt_uname."' ");
    $ct = mysqli_num_rows($su);
    
    if($ct == 0){
        $query = mysqli_query($con,"INSERT INTO tblstaff (f_name, m_name, l_name, bdate, religion, educ, skills, num, gender, maritalstatus, Job_description, Job_contract, nationality,  username, password) 
            values ('$txt_fname', '$txt_mname', '$txt_lname', '$txt_bdate', '$txt_religion', '$ddl_eattain', '$txt_skills', '$txt_num', '$ddl_gender', '$txt_mstatus', '$txt_desc', '$$txt_contract', '$txt_national', '$txt_uname', '$txt_pass')") or die('Error: ' . mysqli_error($con));
        if($query == true)
        {
            $_SESSION['added'] = 1;
            header ("location: ".$_SERVER['REQUEST_URI']);
        } 
    }
    else{
        $_SESSION['duplicateuser'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    }   
}


if(isset($_POST['btn_save']))
{
    $txt_id = $_POST['hidden_id'];
    $txt_lname = $_POST['txt_lname'];
    $txt_mname = $_POST['txt_mname'];
    $txt_fname = $_POST['txt_fname'];
    $txt_bdate = $_POST['txt_bdate'];
    $ddl_eattain = $_POST['ddl_eattain'];
    $txt_religion = $_POST['txt_religion'];
    $txt_skills = $_POST['txt_skills'];
    $txt_num = $_POST['txt_num'];
    $ddl_gender = $_POST['ddl_gender'];
    $txt_mstatus = $_POST['txt_mstatus'];
    $txt_desc = $_POST['txt_desc'];
    $txt_edit_contract = $_POST['txt_edit_contract'];
    $txt_national = $_POST['txt_national'];
    $txt_edit_uname = $_POST['txt_uname'];
    $txt_edit_pass = $_POST['txt_upass'];

    if(isset($_SESSION['role'])){
        $action = 'Updated Staff with username of '.$txt_edit_uname;
        $iquery = mysqli_query($con,"INSERT INTO tbllogs (user,logdate,action) values ('".$_SESSION['role']."', NOW(), '".$action."')");
    }

    $update_query = mysqli_query($con,"UPDATE tblstaff set f_name = '".$txt_fname."',
     m_name = '".$txt_mname."', 
     l_name = '".$txt_lname."', 
     bdate = '$txt_bdate', 
     educ = '$ddl_eattain', 
     religion = '$txt_religion', 
     skills = '$txt_skills',
     num = '$txt_num', 
     gender = '$ddl_gender', 
     maritalstatus = '$txt_mstatus', 
     Job_description = '$txt_desc',
      Job_contract = '$txt_edit_contract', 
     nationality = '$txt_national', 
     username = '".$txt_edit_uname."', 
     password = '".$txt_edit_pass."' 
     where id = '".$txt_id."' ") or die('Error: ' . mysqli_error($con));


    if($update_query == true)
    {
        $_SESSION['added'] = 1;
        header ("location: ".$_SERVER['REQUEST_URI']);
    } 

     
  
}

if(isset($_POST['btn_delete']))
{
    if(isset($_POST['chk_delete']))
    {
        foreach($_POST['chk_delete'] as $value)
        {
            $delete_query = mysqli_query($con,"DELETE from tblstaff where id = '$value' ") or die('Error: ' . mysqli_error($con));
                    
            if($delete_query == true)
            {
                $_SESSION['delete'] = 1;
                header("location: ".$_SERVER['REQUEST_URI']);
            }
        }
    }
}


?>