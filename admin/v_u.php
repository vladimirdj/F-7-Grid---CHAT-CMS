<?php
session_start();
require '../conection.php';

if (isset($_SESSION['user']) && $_SESSION['role'] == 'admin'){

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
<h2>View user</h2>
</div>

<div class="container3">
<table class="responsive-table">

<thead>

<tr>

<th scope="col">Id</th>
<th scope="col">First name</th>
<th scope="col">Last name</th>
<th scope="col">Email</a></th>
<th scope="col">User</th>
<th scope="col">Role</th>
<th scope="col">Date</th>



</tr>

</thead>


<tbody>
<?php

$user_id=$_GET['user_id'];


$u= "SELECT * FROM user WHERE user_id='$user_id'";
$procedural = mysqli_query($conection, $u);

while($res = mysqli_fetch_array($procedural)){
$user_id = $res['user_id'];
$first_name = $res['first_name'];
$last_name = $res['last_name'];
$email = $res['email'];
$user = $res['user'];
$role = $res['role'];
$date = $res['date'];

//    }

?>
<tr>
<td data-title="id"><?php echo $user_id; ?></td>
<td data-title="first_name"><?php echo $first_name; ?></td>
<td data-title="last_name"><?php echo $last_name; ?></td>
<td data-title="email"><?php echo $email; ?></td>
<td data-title="user"><?php echo $user; ?></td>
<td data-title="role"><?php echo $role; ?></td>
<td data-title="date"><?php echo $date; ?></td>

</tr>
<?php


}

?>
</tbody>

</table>
</div>
<br>
<div align="center">
<td><a href="user.php"><button class="btn-4">Back</button></a>
</div>

<br><br>

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
