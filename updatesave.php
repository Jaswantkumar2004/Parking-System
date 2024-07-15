<?php 
$owner_name = $_POST['owner_name'];
$vehicle_name = $_POST['vehicle_name'];
$vehicle_number = $_POST['vehicle_number'];
$entry_date = $_POST['entry_date'];
$exit_date = $_POST['exit_date'];
$token_number = $_POST['token_number'];

$conn = mysqli_connect("localhost", "root", "", "update_info") or die("conection faile");
$sql = "INSERT INTO update_info1(owner_name,vehicle_name,vehicle_number,entry_date,exit_date,token_number) values('{$owner_name}','{$vehicle_name}','{$vehicle_number}','{$entry_date}','{$exit_date}','{$token_number}')";
$result = mysqli_query($conn, $sql) or die("query failed");
header("location:http://localhost/PROJECT/record.php");
$mysqli_close($conn);
?>