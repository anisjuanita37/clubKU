<?php session_start();
 include 'dbConnect.php';
 
// Define $myusername and $mypassword
$myusername=$_POST['uname'];
$mypassword=$_POST['psw'];

$sql = "SELECT sEmail, psw FROM member WHERE sEmail='$myusername' and psw='$mypassword'";
$result = $conn->query($sql);

$row=mysqli_fetch_array($result);

$counter=mysqli_num_rows($result);

if ($counter == 0)
{
    echo "<script type='text/javascript'>alert('Invalid username or password!');
    document.location='login.html'</script>";
}
else 
{

$_SESSION['sEmail']=$row['sEmail'];

    echo "<script type='text/javascript'>document.location='home.php'</script>";
}

?>