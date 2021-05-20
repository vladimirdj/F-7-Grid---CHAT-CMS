<?php
require '../conection.php';


if(isset($_POST['add'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$user = $_POST['user'];
$password = $_POST['password'];
$role = $_POST['role'];
$sql = "INSERT INTO user (first_name, last_name, email,user,password,role) VALUES ('{$first_name}', '{$last_name}','{$email}','{$user}','{$password}','{$role}')";

if (mysqli_query($conection, $sql)){
echo "Add is good.";

echo "<script>window.history.go(-2);</script>";

} else {
echo "Eror";
}
}
?>
