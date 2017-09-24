<?php

$s="insert into ADDRESS values('".$_REQUEST["firstname"]."','".$_REQUEST["lastname"]."','".$_REQUEST["phnno"]."','".$_REQUEST["address"]."')";
$conn=mysqli_connect("localhost","root",null,"group");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_query($conn,$s);
header('location:front.php');
?>