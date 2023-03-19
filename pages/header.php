  <?php

   echo  '<header class="header">
            <a href="../../pages/dashboard/dashboard.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Barangay Information System
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right" style="background-color: white;">
                    <ul class="nav navbar-nav">

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i><span>'.$_SESSION['role'].'<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    
                                    <p>
                                        '.$_SESSION['role'].'
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat" data-toggle="modal" data-target="#editProfileModal">Edit Account</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../../logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>'; ?>


         <div id="editProfileModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Change Account</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                        <?php
                        if($_SESSION['role'] == "Administrator"){
                            $user = mysqli_query($con,"SELECT * from tbluser where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>
                                    <div class="form-group">
                                    <label>Password:</label>
                                    <input name="txt_upass" id="password" oninput="password_match()" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9!@#$%^&*_-]).{5,}" title="Must have a minimum length of 5 characters and must contain at least one uppercase letter, one lowercase letter, and a number or symbol." class="form-control input-sm" type="password" required/>
                                </div>
                                 <div class="form-group">
                                    <label>Retype Password:</label>
                                    <input name="txt_confirmpass" id="confirmpass" class="form-control input-sm" type="password" placeholder="Confirm Password" oninput="password_match()" required />
                                    <label id="error_msg" style="color:#CC0000;" ></label>
                                </div>

                             

                                    
                                    
                                    ';
                            } 
                        }
                        elseif($_SESSION['role'] == "Zone Leader"){
                            $user = mysqli_query($con,"SELECT * from tblzone where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="txt_password" class="form-control input-sm" type="password"  value="'.$row['password'].'"/>
                                    </div>';
                            } 
                        }
                        elseif(isset($_SESSION['staff'])){
                            $user = mysqli_query($con,"SELECT * from tblstaff where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>

                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" id="password" class="form-control input-sm" oninput="password_match()" type="password"  value="'.$row['password'].'"/>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label>Retype Password:</label>
                                    <input name="txt_confirmpass" id="confirmpass" class="form-control input-sm" type="password" placeholder="Confirm Password" oninput="password_match()" required />
                                    <label id="error_msg" style="color:#CC0000;" ></label>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    ';
                            } 
                        }
                        else{
                            $user = mysqli_query($con,"SELECT * from tblresident where id = '".$_SESSION['userid']."' ");
                            while($row = mysqli_fetch_array($user)){
                                echo '
                                    <div class="form-group">
                                        <label>Username:</label>
                                        <input name="txt_username" id="txt_username" class="form-control input-sm" type="text" value="'.$row['username'].'" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input name="txt_password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9!@#$%^&*_-]).{5,}" title="Must have a minimum length of 5 characters and must contain at least one uppercase letter, one lowercase letter, and a number or symbol." id="password" class="form-control input-sm" oninput="password_match()" type="password"  value="'.$row['password'].'"/>
                                    </div>
                                    
                                    <div class="form-group">
                                    <label>Retype Password:</label>
                                    <input name="txt_confirmpass" id="confirmpass" class="form-control input-sm" type="password" placeholder="Confirm Password" oninput="password_match()" required />
                                    <label id="error_msg" style="color:#CC0000;" ></label>
                                    </div>
                                    
                                    
                                    ';
                            } 
                        }
                        ?>
                         
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" id="btn_saveeditProfile" name="btn_saveeditProfile" value="Update"/>
                    </div>
                </div>
              </div>
              </form>
            </div>


            <?php
            if(isset($_POST['btn_saveeditProfile'])){
                $username = $_POST['txt_username'];
                $password = $_POST['txt_password'];

                if($_SESSION['role'] == "Administrator"){
                    $updadmin = mysqli_query($con,"UPDATE tbluser set username = '$username', password = '$password' where id = '".$_SESSION['userid']."' ");
                    if($updadmin == true){
                        header ("location: ".$_SERVER['REQUEST_URI']);
                    }
                }
                elseif($_SESSION['role'] == "Zone Leader"){
                    $updzone = mysqli_query($con,"UPDATE tblzone set username = '$username', password = '$password' where id = '".$_SESSION['userid']."' ");
                    if($updzone == true){
                        header ("location: ".$_SERVER['REQUEST_URI']);
                    }
                }
                elseif(isset($_SESSION['staff'])){
                    $updstaff = mysqli_query($con,"UPDATE tblstaff set username = '$username', password = '$password' where id = '".$_SESSION['userid']."' ");
                    if($updstaff == true){
                        header ("location: ".$_SERVER['REQUEST_URI']);
                    }
                }
            }

            ?>

<script type="text/javascript">
    function password_match(){
        var password = document.getElementById("password").value;
        var confirmpass = document.getElementById("confirmpass").value;

            if(password != confirmpass)
            {
                document.getElementById("error_msg").innerHTML = "Passwords do not match!";
                document.getElementById("btn_saveeditProfile").disabled = true;
            }
            else
            {
                document.getElementById("error_msg").innerHTML = '<span style="color:#006600;">Passwords matched!</span>';
                document.getElementById("btn_saveeditProfile").disabled = false;
            } 
    };
</script>