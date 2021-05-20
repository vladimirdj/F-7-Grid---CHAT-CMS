<?php
include 'conection.php';
if(isset($_POST['send'])){
$e_fname = $_POST['e_fname'];
$e_email = $_POST['e_email'];
$e_msg = $_POST['e_msg'];
$sql = "INSERT INTO contact (e_fname, e_email, e_msg) VALUES ('{$e_fname}', '{$e_email}','{$e_msg}')";
if (mysqli_query($conection, $sql)){
echo "Contact is send";
echo "<script>window.open('index.php','_self')</script>";
} else {
echo "Eror";
}
}
?>
