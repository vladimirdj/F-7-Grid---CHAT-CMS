<?php
require '../conection.php';

$msg = "";

if (isset($_POST['edit'])) {

$id=$_POST['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$user = $_POST['user'];
$role = $_POST['role'];


$N = count($id);
for($i=0; $i < $N; $i++)
{

$sql = "UPDATE user SET first_name ='$first_name[$i]',last_name ='$last_name[$i]',email='$email[$i]',user='$user[$i]',role='$role[$i]' WHERE user_id='$id[$i]'";
$query =mysqli_query ($conection, $sql);
}

}

if ( $query) {

echo "<script>alert('updated!')</script>";
echo "<script>window.history.go(-2);</script>";

}
else {
echo "ERROR";
}
?>
