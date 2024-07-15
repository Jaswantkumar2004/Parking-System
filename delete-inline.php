<?php
echo $token_number = $_GET['token_number'];
$conn = mysqli_connect("localhost", "root", "", "host") or die("conection faile");
$sql = "DELETE FROM host1 where token_number = '{$token_number}'";
$result = mysqli_query($conn, $sql) or die("query failed");
header("location:http://localhost/PROJECT/j.php");
$mysqli_close($conn);

?>