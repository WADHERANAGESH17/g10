<html>
<head>

    <link href="css/bootstrap.css" rel="stylesheet">
</head>


<body>


<div id="main" class="container">


    <form action="saveaddress.php" method="post">
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
            <label for="phnno">Phone Number:</label>
            <input type="text" name="phnno" required class="form-control" id="phnno">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" required id="address" name="address">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn btn-success" name="submit">
            <input type="button" class="form-control btn btn-danger" name="cancel" value="Cancel">
        </div>
    </form>

    </center>
</div>


</body>

</html>