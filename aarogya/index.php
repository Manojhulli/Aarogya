<?php
$server="localhost";
$username="root";
$password="";
$con= mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed");
    mysqli_connect_error();
}
// echo "success";

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


$sql= "INSERT INTO `contact`.`information` (`name`,`email`,`message`) VALUES ('$name','$email','$message')";
if($con->query($sql)==true){
    // echo"<center>";
    echo "<center> <h1>Success</h1> </center>";
    echo "<center><input type= 'button' value='Home' onclick='sql.html'></center>";
}
else{
    echo "error:$sql <br> $con->error";
}
$con->close();
?>