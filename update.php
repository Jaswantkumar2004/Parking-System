<?php
$token_number = $_GET['token_number'];
$conn =mysqli_connect("localhost","root","","host") or die("connection failed");
$sql = "SELECT * FROM host1 where token_number = '{$token_number}'";
$result = mysqli_query($conn,$sql) or die("Query failed");
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parking Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="k.css">
</head>

<body>

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 " id="header">
                    <h1>Parking System</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <h2>Update Form</h2>
                    <form action="updatesave.php" method="post">

                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="owner">Vehicle Owner Name:</span>
                            </div>
                            <input type="text" name="owner_name" value="<?php echo $row['owner_name']; ?>" class="form-control">
                        </div>

                        <div class="input-group  ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Vehicle Name:</span>
                            </div>
                            <input type="text" name="vehicle_name" value="<?php echo $row['vehicle_name']; ?>"  class="form-control" id="vehicle_name">
                        </div>

                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Vehicle Number:</span>
                            </div>
                            <input type="text" name="vehicle_number"  value="<?php echo $row['vehicle_number']; ?>"  class="form-control" id="vehicle_number">
                        </div>

                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Entry Date:</span>
                            </div>
                            <input type="date" name="entry_date" value="<?php echo $row['entry_date']; ?>"  class="form-control" id="entry_date">
                        </div>

                        <div class="input-group ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Exit Date:</span>
                            </div>
                            <input type="date" name="exit_date" class="form-control" id="exit_date">
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Token Number:</span>
                            </div>
                            <input type="number" name="token_number" value="<?php echo $row['token_number']; ?>"   class="form-control" id="token_number">
                        </div>
                        <input type="submit" class="btn btn-primary mt-3">

                    </form>
                </div>

            </div>

        </div>

    </div>
   
</body>

</html>

<?php

    }

}else{

    echo "no data found";

}

?>
