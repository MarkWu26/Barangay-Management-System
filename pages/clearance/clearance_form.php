<!DOCTYPE html>
<html id="clearance">

<style>
    @media print {
        .noprint {
        visibility: hidden;
         }
    }
    @page { size: auto;  margin: 4mm; }
    body::-webkit-scrollbar{
        display:none;
    }
</style>

    <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../login.php"); 
    }
    else
    {
    ob_start();
    $_SESSION['clr'] = $_GET['clearance'];
    include('../head_css.php'); ?>
    <body class="skin-black" >
        <!-- header logo: style can be found in header.less -->
        <?php 
        
        include "../connection.php";
        ?>
       
        <div class="col-xs-12 col-sm-6 col-md-8" id="scroll" >
            <div style=" background: black;" >
                <div class="col-xs-4 col-sm-6 col-md-3" style="background: white; margin-right:10px; border: 2px solid black;">
                    <center><image src="../../img/tetuan.png" style="width:100%;height:190px;"/></center><br>
                    <center><image src="../../img/zamboanga.png" style="width:60%;height:100px;"/></center><br>
                    <div style="margin-top:20px; text-align: center; word-wrap: break-word;">
                        <?php
                            $qry = mysqli_query($con,"SELECT *, CONCAT (f_name, ' ', m_name, ' ', l_name) as cname from tblofficial");
                            while($row=mysqli_fetch_array($qry)){
                                if($row['sPosition'] == "Captain"){
                                    echo '
                                    <p>
                                    <b style="font-size:18px;">'.strtoupper($row['cname']).'</b><br>
                                    <span style="font-size:14px;">PUNONG BARANGAY</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Ordinance)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['cname']).'<br>
                                    <span style="font-size:12px;">Sports / Law / Ordinance</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Public Safety)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['cname']).'<br>
                                    <span style="font-size:12px;">Public Safety / Peace and Order</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Tourism)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['cname']).'<br>
                                    <span style="font-size:12px;">Culture & Arts / Tourism / Womens Sector</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Budget & Finance)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['cname']).'<br>
                                    <span style="font-size:12px;">Budget & Finance / Electrification</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Agriculture)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['cname']).'<br>
                                    <span style="font-size:12px;">Agriculture / Livelihood / Farmers Sector / PWD Sector</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Education)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['cname']).'<br>
                                    <span style="font-size:12px;">Health & Sanitation / Education</span>
                                    </p>
                                    ';
                                }elseif($row['sPosition'] == "Kagawad(Infrastracture)"){
                                    echo '
                                    <p>
                                    KAG. '.strtoupper($row['cname']).'<br>
                                    <span style="font-size:12px;">Infrastracture / Labor Sector/ Environment / Beautification</span>
                                    </p>
                                    ';
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="col-xs-7 col-sm-5 col-md-8" style="background: white;  ">
                    <div class="pull-left" style="font-size: 16px;"><b>
                        Republic of the Philippines<br>
                        Province of Zamboanga Del Sur<br>
                        City of Zamboanga<br>
                        Barangay Tetuan<br>
                        Tel. 999-0000<br></b>
                    </div>
                    <div class="pull-right" style="border: 2px solid black;">
                       <?php $qry1=mysqli_query($con,"SELECT * from tblresident r left join tblclearance c on c.residentid = r.id where residentid = '".$_GET['resident']."' and clearanceNo = '".$_GET['clearance']."' ");
                            while($row1 = mysqli_fetch_array($qry1)){
                        echo '<image src="../resident/image/'.basename($row1['image']).'" style="width:130px;height:130px;"/>';
                        }
                        ?>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <p class="text-center" style="font-size: 20px; font-size:bold; margin-top:50px;">OFFICE OF THE BARANGAY CAPTAIN<br><b style="font-size: 28px;">BARANGAY CLEARANCE</b></p>
                        <p style="font-size: 18px;">TO WHOM IT MAY CONCERN:</p>
                        <p style="text-indent:40px;text-align: justify;">This is to certify that the person whose photo, signature and right thumb mark appear herein, is a resident of Barangay Tetuan, Zamboanga City, Zamboanga Del Sur and that the person had requested a criminal check from this office following is/are our findings.</p>

                        <?php
                            $qry=mysqli_query($con,"SELECT * from tblresident r left join tblclearance c on c.residentid = r.id where residentid = '".$_GET['resident']."' and clearanceNo = '".$_GET['clearance']."' ");
                            while($row = mysqli_fetch_array($qry)){
                                $bdate = date_create($row['bdate']);
                                $date = date_create($row['dateRecorded']);
                                echo '
                                <p><b>
                                    SURNAME: <u>'.$row['lname'].'</u><br>
                                    FIRST NAME: <u>'.$row['fname'].'</u><br>
                                    MIDDLE NAME: <u>'.$row['mname'].'</u><br>
                                  
                                    BIRTHDATE & PLACE: <u>'.date_format($bdate,"m-d-Y").' /'.$row['bplace'].'</u><br>
                                    GENDER: <u>'.$row['gender'].'</u><br>
                                    NATIONALITY: <u>'.$row['nationality'].'</u><br>
                                    RELIGION: <u>'.$row['religion'].'</u><br>
                                    PURPOSE: <u>'.$row['purpose'].'</u><br>
                                    FINDINGS: <u>No Derogatory Record</u><br>
                                </b></p>
                                <p><b>
                                    RES. CERT. NO.: <u>'.$row['clearanceNo'].'</u><br>
                                    ISSUED ON: <u>'.date_format($date,"F j, o").'</u><br>
                                    ISSUED AT: <u>Barangay Tetuan Hall</u><br>
                                    OR. NO.: <u>'.$row['orNo'].'</u><br>
                                    ISSUED ON: <u>'.date_format($date,"F j, o").'</u><br>
                                </b></p>
                                ';
                            }
                        ?>
                    </div>  
                    <div class="col-md-5 col-xs-4" style="float:right;margin-top: -160px;">
                        <div style="height:100px; width:140px; border: 1px solid black;">
                            <center><span style="text-align: center; line-height: 160px;">Right Thumb Mark</span></center>
                        </div><br><br>
                        <p style="padding-bottom: 25px;border-bottom-style: solid;border-bottom-width: 2.3px;width: fit-content; margin-top:15px; margin-left:-330px; font-size:18px;"> Tax Payer's Signature</p>
                    </div>
                </div>


                <div class="col-xs-offset-6 col-xs-5 col-md-offset-6 col-md-4" ><br><br><br>
                    <?php
                    $qry = mysqli_query($con, "SELECT *, CONCAT (f_name, ' ', m_name, ' ', l_name) as officialname from tblofficial");
                    while($row=mysqli_fetch_array($qry)){
                        if($row['sPosition'] == "Captain"){
                            echo '
                            <p style="margin-top:-130px; margin-left:-120px;">

                            
                                <br>
                                <b>
                                <span style= "font-size:18px; text-align: center; padding-bottom: 60px;border-bottom-style: solid;border-bottom-width: 2.3px;width: fit-content;" >Approved By: </b><br><br><br>
                                </b>
                                </span>
                                <b style="font-size:18px; margin-top:-8px; position:absolute; margin-left:10px;">'.strtoupper($row['officialname']).'<br>
                                <span style="  position:absolute; margin-left:13px; margin-top:8px;">CAPTAIN</span>
                                </b>

                                
                                <img src="../../img/sign.png" style="width:100%;height:140px; margin-top:-82px; margin-left:-104px; position:absolute;"></img>
                            </p>
                            ';
                        }
                    }
                    ?>
                </div>

                
                <div class="col-xs-offset-6 col-xs-5 col-md-offset-6 col-md-4" style="position:absolute; margin-left:580px; margin-top:935px;" ><br><br><br>
                    <?php
                    $qry = mysqli_query($con,"SELECT *, CONCAT (f_name, ' ', m_name, ' ', l_name) as officialname from tblofficial");
                    while($row=mysqli_fetch_array($qry)){
                        if($row['sPosition'] == "Secretary"){
                     
                            echo '
                            <p style="margin-top:-170px; margin-left:-78px;">


                                </span>
                                <b style="font-size:18px; margin-top:-16px; position:absolute; margin-left:10px; text-align: center; padding-bottom: -5px;border-bottom-style: solid;border-bottom-width: 2.3px; width: fit-content;">'.strtoupper($row['officialname']).'
                                <span style="position:absolute; margin-left:-130px; margin-top:35px;">SECRETARY</span>
                                </b>

                                
                                <img src="../../img/sign2.png" style="width:60%;height:80px; margin-top:-60px; margin-left:-30px; position:absolute;"></img>
                            </p>
                            ';
                        }

                    }
                    
                    ?>
                </div>


              
              
            </div>
        </div>
    <button class="btn btn-primary noprint" id="printpagebutton" onclick="PrintElem('#clearance')">Print</button>
    </body>
    <?php
    }
    ?>


    <script>
         function PrintElem(elem)
    {
        window.print();
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        //mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        //mywindow.document.write('</head><body class="skin-black" >');
         var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        mywindow.document.write(data);
        //mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10

        mywindow.print();

        printButton.style.visibility = 'visible';
        mywindow.close();

        return true;
    }
    </script>
</html>