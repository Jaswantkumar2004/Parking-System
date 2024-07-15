<?php
session_start();
$name = $_POST["username"];
$pass = $_POST["password"];
$conn = mysqli_connect("localhost","root","","login_info") or die("Connection fail");
$sql = "SELECT * FROM login_info1 where username = '{$name}' && password ='{$pass}' ";
$result = mysqli_query($conn ,$sql)or die("queryfailed");
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION["username"] = $name;
  header("location:http://localhost/PROJECT/j.php");
} else{
    header("location:http://localhost/PROJECT/login.php");
}
?>