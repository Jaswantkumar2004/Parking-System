<?php
echo $entry_date = $_GET['entry_date'];
$conn = mysqli_connect("localhost", "root", "", "update_info") or die("conection faile");
$sql = "DELETE FROM update_info1 where entry_date = '{$entry_date}'";
$result = mysqli_query($conn, $sql) or die("query failed");
header("location:http://localhost/PROJECT/record.php");
$mysqli_close($conn);

?>