<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">   
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
  </head>  

  <body>
    <div class="wrapper">
    <?php include "banner.php"; ?> <!-- Banner -->

<?php 
session_start();
include 'dbConnect.php';

$user=$_SESSION['sEmail'];

$sql = "SELECT * FROM register r, member m, club c WHERE r.sId = m.sId AND c.cId = r.cId AND m.sEmail = '$user'";

$result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $sId=$row["sId"];
        $sName=$row["sName"];
        $sProg=$row["sProg"];
        $sPhone=$row["sPhone"];
        $sEmail=$row["sEmail"];
          
        }//close while loop
    }//close if loop
    else{
    echo'<font color=red>No record found';
    }
?>
     <!-- main content -->
      <div class="main-content">
        <div class="container">
          <!-- register area -->
          <div class="register-area">
            <!-- heading -->
            <h3>Club Registration Slip</h3>
            <form role="form" id="register-form">
              <div class="form-group">
                <label for="sId">Student ID : </label>
                <label><?php echo $sId?></label>
              </div>
              <div class="form-group">
                <label for="sName">Name : </label>
                <label><?php echo $sName?></label>
              </div>
              <div class="form-group">
                <label for="sProg">Program : </label>
                <label><?php echo $sProg?></label>
              </div>
              <div class="form-group">
                <label for="sPhone">Phone : </label>
                <label><?php echo $sPhone?></label>
              </div>
              <div class="form-group">
                <label for="sEmail">Email : </label>
                <label><?php echo $sEmail?></label>
              </div>
                        <table class="form-group">
                <tr>
                    <th>Club Name</th>
                    <th>Registration Date</th>
                    <th>Session</th>
                </tr>
    <?php 
    $sql2 = "SELECT * FROM register r, club c WHERE c.cId = r.cId AND r.sId = '$sId'";   
    $result2 = $conn->query($sql2);

     //check if records were returned
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result2->fetch_assoc()) {

        $cName=$row["cName"];
        $rDate=$row["rDate"];
        $Sesi=$row["Sesi"];
    ?>
                <tr>
                    <td><?php echo $cName?></td>
                    <td><?php echo $rDate?></td>
                    <td><?php echo $Sesi?></td>
                 </tr>

<?php
        }//close while loop
    }//close if loop
    else{
    echo'<font color=red>No record found';
    }
?>
                </table>
              </form>
            </div>
        </div>
      </div>
     
 <!-- footer -->
 <footer>
        <div class="container">
          <!-- This theme comes under Creative Commons Attribution 4.0 Unported. So don't remove below link back -->
          <p class="copy-right">Copyright &copy; 2014 <a href="#">Your Site</a> | Designed By : <a href="http://www.indioweb.in/portfolio">IndioWeb</a>, All rights reserved. </p>
        </div>
      </footer>
    </div>    
    
    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Respond JS for IE8 -->
    <script src="js/respond.min.js"></script>
    <!-- HTML5 Support for IE -->
    <script src="js/html5shiv.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
  </body>
</html>

