<?php
session_start();
require '../conection.php';

if (isset($_SESSION['user']) && $_SESSION['role'] == 'admin'){

$e_id = $_GET['e_id'];

$query = "SELECT * FROM contact WHERE  e_id = $e_id";
$select_posts = mysqli_query($conection, $query);

while ($res = mysqli_fetch_assoc($select_posts)) {
$e_id = $res['e_id'];
$e_fname = $res['e_fname'];
$e_msg = $res['e_msg'];
$e_email = $res['e_email'];

}


if (isset($_POST['edit'])) {
$e_fname = $_POST['e_fname'];
$e_msg = $_POST['e_msg'];
$e_email = $_POST['e_email'];



$result = mysqli_query($conection, "UPDATE contact SET e_fname='$e_fname', e_msg='$e_msg', e_email='$e_email' WHERE e_id=$e_id");

echo "<script>alert('updated!')</script>";

echo "<script>window.history.go(-2);</script>";


}




?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>F7 Example Admin</title>
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="../css/se.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
body {
margin: 0;
padding: 0;

max-width:  100%;
}


@media screen and (min-width: 550px) {

body {
margin-left: 200px;
}
body.non-margin {
margin-left: 0px !important;
}
.klizac {
z-index: 10;
width: 200px;
}
.klizac.aktivan {
width: 0px;
}
}


.klizac:hover,
.klizac.active,
.klizac.hovered {
width: 200px;
-webkit-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
background-color: #343c42;
color: #fe5026;
}
hr {
border: 1px solid #3D6AAD;
}

</style>




</head>
<body>


<header>

<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
<a href="index.php" class="link">Home</a>
<a href="../index.php" class="link">Website</a>


</div>

</nav>

</div>
</header>

<div class="klizac">

<div align="center">
<div class="logo">
<b>F7 Exampe</b>
</div>

</div>

<div class="card">
<br>
<b>Hi, <a href="../profil/index.php?<?php echo urlencode('SE24;s1x:3')?>=<?php echo base64_encode($_SESSION['user']);?>" class="link"><?php echo  $_SESSION['user'];?></a></b>

<br>
<br>
</div>

<br>

<div align="center">
<h2>Menu</h2>
</div>

<div class="card">

<ul>
<li>  <a href="user.php" class="link">User</a></li>
<li>  <a href="contact.php" class="link">Contact</a></li>
<li>  <a href="chat.php" class="link">Chat</a></li>
</ul>

</div>


</div>

<button class="dugme">
<i class="fa fa-bars"></i>
</button>

<div id="telo">



<div class="card">
<h2>Welcome to F7 Exampel Admin</h2>
</div>
<br>
<div align="center">
<h2>Edit contact</h2>
</div>
<form action="" method="post" enctype="multipart/form-data">


<div class="form-group">
<label for="e_fname"><h2>Name</h2></label>
<input type="text" name="e_fname" class="form-input" value="<?php echo $e_fname; ?>">
</div>
<div class="form-group">

<label for="e_msg"><h2>Message</h2></label>
<input type="text" name="e_msg" class="form-input" value="<?php echo $e_msg; ?>">
</div>
<div class="form-group">

<label for="e_email"><h2>Email</h2></label>
<input type="text" name="e_email" class="form-input" value="<?php echo $e_email; ?>">
</div>

<div class="btn-group">
<div align="center">
<input type="button" class="btn-2" onclick="location.href='index.php';" value="Cancel" />
<input type="submit" class="btn-3" name="edit" value="Edit Post">
</div>
</div>
</form>
<br>

<div class="footer">

Copyright @ F7 Eample
<?php echo date("Y");?>. All Rights Reserved.

</div>


</div>

<?php
} else {
echo '<meta http-equiv="refresh" content="0;URL=../index.php" />';
} ?>
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../js/se.js"></script>

</body>
</html>
