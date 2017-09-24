<html>
<head>

<link href="css/bootstrap.css" rel="stylesheet">
</head>


<body>


<div id="main" class="container">


    <form action="save.php" method="post">
            <div class="form-group">
                ADDRESS MANAGEMENT SYSTEM
            </div>
        <div class="form-group">
            <label for="faname">First Name:</label>
            <input type="text"  class="form-control" required id="faname" name="firstname">
        </div>
        <div class="form-group">
            <label for="laname">Last Name:</label>
            <input type="text" class="form-control" required id="laname" name="lastname">
        </div>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" required class="form-control" id="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="Password" class="form-control" required id="pwd" name="pwd">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn btn-success" id="submit">
        </div>
    </form>

</center>
</div>


</body>

</html>