<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parking Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="admin.css">
</head>

<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 " id="header">
                <h1>Parking System</h1>
                <ul class="home">
                    <li><a href="j.php">Home</a></li>
                    <li><a href="record.php">All Records</a></li>
                    <li><a href="admin.php">Make Parking Admin</a></li>
                    <li><a href="">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="form">
        <div class="admin-form">
            <h1>Admin Form</h1>
            <form action="registration.php" method="post">
                <label for="">Username :</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="username" placeholder="Enter the username"><br><br>

                <label for="">Password :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="password" placeholder="Enter the Password"><br><br>

                <label for="">confirm Passsword :</label>
                <input type="text" name="co-password" placeholder="Enter the confirm-password"><br><br>
                <input type="submit" class="submit" value="submit">
            </form>

        </div>

    </div>

</body>

</html>