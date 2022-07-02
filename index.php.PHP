<?php
$insert = false;
if(isset($_POST['name'])){
    # code...
}
$server = "localhost";
$username = "root";
$password = " ";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" .mysqli_connect_error());
}
//echo "Success connecting to the DB";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$message = $_POST['message'];

$sql = "INSERT INTO `RajasthaniTea`.`contact` (`name`, `email`, `phone`, `address`, `message`, `dt`) VALUES ('$name', '$email', '$phone', '$address', '$message', current_timestamp());";

//echo $sql;

if($con->query($sql) == true){
   // echo "Successfully inserted";
   $insert = true;
}
else{
    echo "Error: $sql <br> $con->error";
}

$con->close();

?>