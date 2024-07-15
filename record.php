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


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 " id="header">
                <h1>Parking System</h1>
                <ul class="home">
                    <li><a href="j.php">Home</a></li>
                    <li><a href="record.php">All Records</a></li>
                    <li><a href="admin.php">Make Parking Admin</a></li>
                    <li><a style="color:white;" href="logout.php">Log Out <?php echo $_SESSION['username']; ?></a></li>
                </ul>
            </div>
        </div>
    </div>




    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h2 class="register1">All Vehicle Entry And Exit Records</h2>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group" id="jk">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <h3>Search</h3>
                            </span>

                        </div>
                        <input type="text" class="form-control" onkeyup="search()" id="text" placeholder="Search vehical Details">

                    </div>
                    <table class="table table-striped" id="table">

                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "update_info") or die("conection faile");
                        $sql = "SELECT * FROM update_info1";
                        $result = mysqli_query($conn, $sql) or die("query failed");


                        if (mysqli_num_rows($result) > 0) {
                        ?>
                            <thead>
                                <tr style="word-spacing:5px;">
                                    <th class="pk" style="border-right: 2px solid ;border-color:brown;">Owner Name</th>
                                    <th class="pk" style="border-right: 2px solid ;border-color:brown;">Vehicle Name</th>
                                    <th class="pk" style="border-right: 2px solid ;border-color:brown;">Vehicle Number</th>
                                    <th class="pk" style="border-right: 2px solid ;border-color:brown;">Entry Date</th>
                                    <th class="pk" style="border-right: 2px solid ;border-color:brown; ">Exit Date</th>
                                    <th class="pk" style="border-right: 2px solid ;border-color:brown; ">Token Number</th>
                                    <th class="pk" style="border-right: 2px solid ;border-color:brown; ">Delete Record</th>
                                </tr>
                            </thead>

                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['owner_name']; ?></td>
                                        <td><?php echo $row['vehicle_name']; ?></td>
                                        <td><?php echo $row['vehicle_number']; ?></td>
                                        <td><?php echo $row['entry_date']; ?></td>
                                        <td><?php echo $row['exit_date']; ?></td>
                                        <td><?php echo $row['token_number']; ?></td>
                                        <td><a href="delete-update.php?entry_date=<?php echo $row['entry_date'] ?>">Delete</a></td>
                                    </tr>
                                </tbody>

                            <?php
                            }
                            ?>

                    </table>
                <?php
                        } else {
                            echo "no data found";
                        }
                ?>




                </div>

            </div>

        </div>
    </section>

    <script src="p.js"></script>
</body>

</html>