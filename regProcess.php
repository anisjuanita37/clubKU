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

<?php session_start();
 include 'dbConnect.php';

$user=$_SESSION['sEmail'];

$sql = "SELECT * FROM member where sEmail = '$user'";
$result = $conn->query($sql);

     //check if records were returned
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
       $stuId=$row["sId"];
      ?>

  <body>

    <div class="wrapper">
    <?php include "banner.php"; ?> <!-- Banner -->
      
      <!-- main content -->
      <div class="main-content">
        <div class="container">
          <!-- register area -->
          <div class="register-area">
            <!-- heading -->
            <h3>Register Club for KUPTM Student</h3>
            <form role="form" id="register-form" action="regSubmit.php" method='post'>
              <div class="form-group">
                <label for="sId">Student ID : </label>
                <label><?php echo $row["sId"]?></label>
              </div>
              <div class="form-group">
                <label for="sName">Name : </label>
                <label><?php echo $row["sName"]?></label>
              </div>
              <div class="form-group">
                <label for="sProg">Program : </label>
                <label><?php echo $row["sProg"]?></label>
              </div>
              <div class="form-group">
                <label for="sPhone">Phone : </label>
                <label><?php echo $row["sPhone"]?></label>
              </div>
              <div class="form-group">
                <label for="sEmail">Email : </label>
                <label><?php echo $row["sEmail"]?></label>
              </div>

<?php
    }//close while loop
  }//close if loop
  else{
    echo'<font color=red>No record found';
  }
?>

              <div class="form-group">
                <label for="cName">Club Name : </label>
                <select name="cName" required>
                  <option value="a1">Kebudayaan</option>
                  <option value="a2">Vocalisme</option>
                  <option value="a3">Esport</option>
                  <option value="a4">Cyber Security</option>
                </select>
              </div>
              <div class="form-group">
                <label for="rDate">Registration Date : </label>
                <input type="Date" class="form-control" name="rDate" placeholder="DD-MM-YYYY" required>
              </div>
              <div class="form-group">
                <label for="Session">Session : </label>
                <select name="sesi" required>
                  <option value="0421">0421</option>
                  <option value="1120">1120</option>
                  <option value="0120">0120</option>
                  <option value="0720">0720</option>
               </select>
              </div>
              <button type="submit" class="btn btn-warning">Submit</button>&nbsp;
              <button type="reset" class="btn btn-default">Reset</button>
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

