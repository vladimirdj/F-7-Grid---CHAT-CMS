<?php
include 'conection.php';
if(isset($_POST['add'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$user = $_POST['user'];
$sql = "INSERT INTO user (first_name, email, user,last_name,password,role) VALUES ('{$first_name}', '{$email}','{$user}','{$last_name}','{$password}','user')";
if (mysqli_query($conection, $sql)){
echo "User is add";
echo "<script>window.open('index.php','_self')</script>";
} else {
echo "Eror";
}
}
?>
