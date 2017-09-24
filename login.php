<?php

$qry=$_REQUEST["qry"];
if($qry=="")
{

}
else{
    echo "<script>";
    echo "alert('Invalid username/password combination')";
    echo "</script>";
}
?>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>

<div class="container">

    <form action="main.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" required name="username">
        </div>
        <div>
            <input type="password" class="form-control" required name="password">
        </div>
        <div>
            <input type="submit" class="btn-success btn" name="submit">
        </div>
    </form>

</div>

</body>


</html>