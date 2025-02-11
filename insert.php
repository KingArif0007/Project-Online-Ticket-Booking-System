<?php
$username = $_POST['uname'];
$password = $_POST['pass'];

if (!empty($username) || !empty($password)){
 $host = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbname = "project";

 $conn = new mysqli('localhost' , 'username' ,'' ,'project');

if ($conn->connect_error) {
    die('connect failed :'$conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into login(Username , Password) values(?,?)");
    $stmt->bind_param("sssssi",$Username .$Password);
    $stmt->execute();
    echo "success.....";
    $stmt->close();
$conn->close();
}
?>