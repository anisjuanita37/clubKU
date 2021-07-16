<?php
 include 'dbConnect.php';
  //get input values from form
     extract($_POST);
     $sql = "INSERT INTO member (sEmail, psw, sName, sProg, sPhone, sId) 
     VALUES ('$sEmail', '$psw', '$sName', '$sProg', '$sPhone', '$sId')";

      //execute query
      if ($conn->query($sql) === TRUE) {
        // echo "New record created successfully";
            echo "<script type='text/javascript'>alert('New record created successfully!');
    document.location='login.html'</script>";
      } 
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      //close connection
      $conn->close();
  ?> 