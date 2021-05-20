<?php

require '../conection.php';

$id=$_POST['obelezivac'];
$N = count($id);
for($i=0; $i < $N; $i++)
{

$sql = "DELETE FROM user WHERE user_id='$id[$i]'";
$query = mysqli_query($conection, $sql);

if ( $query) {

echo "<script>alert('Poruka je obrisana!')</script>";

echo "<script>window.history.back();</script>";

}
}

?>
