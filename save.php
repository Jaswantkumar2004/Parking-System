<?php
$owner_name = $_POST['owner_name'];
$vehicle_name = $_POST['vehicle_name'];
$vehicle_number = $_POST['vehicle_number'];
$entry_date = $_POST['entry_date'];
$token_number = $_POST['token_number'];

$conn = mysqli_connect("localhost", "root", "", "host") or die("conection faile");
$sql = "INSERT INTO host1(owner_name,vehicle_name,vehicle_number,entry_date,token_number) values('{$owner_name}','{$vehicle_name}','{$vehicle_number}','{$entry_date}','{$token_number}')";
$result = mysqli_query($conn, $sql) or die("query failed");
header("location:http://localhost/PROJECT/j.php");
$mysqli_close($conn);
?>
