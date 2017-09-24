<?php
$s="select * from user WHERE username='".$_REQUEST["username"]."',password='".$_REQUEST["password"]."'";
$conn=mysqli_connect("localhost","root",null,"group");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$count=0;
$result=mysqli_query($conn,$s);
while($row=mysqli_fetch_array($result))
{
    $count++;
}
if($count>0)
{
    header('location:front.php');
}
else{
    header('location:login.php?qry="invalid"');
}
$conn->close();
?>