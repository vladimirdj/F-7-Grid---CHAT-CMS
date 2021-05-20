<?php

require '../conection.php';

$c_id = $_GET['c_id'];

$sql = "DELETE FROM chat WHERE c_id=$c_id";
$query = mysqli_query($conection, $sql);

if ( $query) {

echo "<script>alert('Poruka je obrisana!')</script>";

echo "<script>window.history.back();</script>";

}

?>
