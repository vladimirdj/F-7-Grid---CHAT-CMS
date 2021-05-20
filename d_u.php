<?php
require 'conection.php';
$user_id = $_GET['user_id'];
$sql = "DELETE FROM user WHERE user_id=$user_id";
$query = mysqli_query($conection, $sql);
if ( $query) {
echo "<script>alert('Delete')</script>";
echo "<script>window.history.back();</script>";
}
?>
