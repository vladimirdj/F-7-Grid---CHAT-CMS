<?php
session_start();
include 'conection.php';
if(isset($_POST['submit'])){
$msg = $_POST['msg'];
$sql = "INSERT INTO chat (user, msg) VALUES ('{$_SESSION["user"]}', '{$msg}')";

if (mysqli_query($conection, $sql)){
echo "Message is send";
echo "<script>window.open('index.php','_self')</script>";
} else {
echo "Eror";
}
}
?>
