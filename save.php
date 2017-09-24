<?php

$s="insert into USER values('".$_REQUEST["firstname"]."','".$_REQUEST["lastname"]."','".$_REQUEST["username"]."','".$_REQUEST["pwd"]."')";
$conn=mysqli_connect("localhost","root",null,"group");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_query($conn,$s);
header('location:front.php');
?>