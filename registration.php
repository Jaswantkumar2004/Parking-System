<?php
$username= $_POST['username'];
$pass = $_POST['password'];
$co_pass = $_POST['co-password'];
if($pass == $co_pass){
    $conn = mysqli_connect("localhost","root","","login_info") or die("connection failed");
    $sql = "SELECT * FROM login_info1 where username = '{$username}' && password ='{$pass}'";
    $result = mysqli_query($conn , $sql) or die("query is failed");
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "you have already exit in database";
    }else{
          $sql = "INSERT INTO login_info1(username,password) VALUES('{$username}','{$pass}')";
          $result = mysqli_query($conn,$sql) or die("query failed");
          mysqli_close($conn);
          header("localhost:http://localhost/PROJECT/j.php");
    }

}else{
    echo "your confirm and password is not same" ;
}

?>