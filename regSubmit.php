<?php
    session_start();

    include 'dbConnect.php';
    extract($_POST);

    $user=$_SESSION['sEmail'];

    $sql = "SELECT * FROM member where sEmail = '$user'";
    $result = $conn->query($sql);

     //check if records were returned
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
        $stuId=$row["sId"];
        }
    }

   $sql = "INSERT INTO register (sId, cId, rDate, Sesi) VALUES ( '$stuId', '$cName', '$rDate', '$sesi')";

    //execute query
    if(mysqli_query($conn,$sql)){

        echo "<script type='text/javascript'>alert('You have succesfully register for club.');
        document.location='regSlip.php'</script>";
              
    }else{
     if(mysqli_errno($conn) == 1062)
     echo "<script type='text/javascript'>alert('You have already register for club');
     document.location='regProcess.php'</script>";
     else
     echo "<script type='text/javascript'>alert('Database insertion error:'.$sql.'<br>');
     document.location='regProcess.php'</script>";
      
    }//else end

    $conn->close();
?>
