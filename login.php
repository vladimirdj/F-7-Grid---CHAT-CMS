<?php
session_start();
include 'conection.php';
if (isset($_POST['login'])) {
$user = $_POST['user'];
$password = $_POST['password'];
$u = "SELECT * FROM user WHERE user = '$user' AND password = '$password'";
$p = mysqli_query($conection, $u);
$row=mysqli_num_rows($p);
$userinfo=mysqli_fetch_assoc($p);
$role=$userinfo['role'];
$_SESSION['user']=$user;
$_SESSION['role']=$role;
if($role=='admin'){
header('location:admin/index.php');
}
if($role=='user'){
header("location:user.php?user=$_SESSION[user]");
}
}else{
echo "No User Found by Given Information";
}
?>
