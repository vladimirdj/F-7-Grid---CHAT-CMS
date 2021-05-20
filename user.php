<?php
session_start();
include 'conection.php';
if (isset($_SESSION['user']) && $_SESSION['role'] == 'admin'){
$user = $_GET['user'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>F7 & Grid Example</title>
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/se.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
.raspon_1_of_2{
width: 33.4%;
}
</style>
</head>
<body>
<div class="zaglavlje">
<h1>Fiction7 & Grid</h1>
<h2>Example</h2>
</div>
<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
<a href="index.php"  class="link">Home</a>
<a href="admin/index.php"  class="link">Admin</a>
</div>
<div class="right">
<a href="user.php?user=<?php echo $_SESSION['user'];?>"  class="link">User: <?php echo $_SESSION['user']; ?></a>
</div>
</nav>
<br>
<div align="center">
<h2>Users</h2>
<div class="container3">
<table class="responsive-table">
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">First name</th>
<th scope="col">Lst name</th>
<th scope="col">Email</a></th>
<th scope="col">User</a></th>
<th scope="col">Password</a></th>
<th scope="col">Role</a></th>
<th scope="col">Date</a></th>
<th scope="col">Actiona</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM user where user = '$_SESSION[user]'";
$result = mysqli_query($conection, $sql);
while($row = mysqli_fetch_array($result)){
$user_id= $row['user_id'];
$first_name= $row['first_name'];
$last_name= $row['last_name'];
$email= $row['email'];
$user= $row['user'];
$password= $row['password'];
$role= $row['role'];
$date= $row['date'];
?>
<tr>
<td data-title="id"><?php echo $user_id; ?></td>
<td data-title="first_name"><?php echo $first_name; ?></td>
<td data-title="last_name"><?php echo $last_name; ?></td>
<td data-title="email"><?php echo $email; ?></td>
<td data-title="user"><?php echo $user; ?></td>
<td data-title="password"><?php echo $password; ?></td>
<td data-title="role"><?php echo $role; ?></td>
<td data-title="date"><?php echo $date; ?></td>
<td>
<a href="e_u.php?user_id=<?php echo $user_id; ?>"><button class="btn-2">Edit acaunt</button></a>
<a href="d_u.php?user_id=<?php echo $user_id; ?>" onClick="return confirm('Delete ?')\"><button class="btn-5">Delete acaunt</button></a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
<br>
<div align="center">
<a href="logout.php" class="link" title="Logout"><button class="btn-6">Logout</button></a>
</div>
<br>
</div>
<br>
<div class="footer">
Copyright @ F7 Eample
<?php echo date("Y");?>. All Rights Reserved.
</div>
<?php
} else {
echo '<meta http-equiv="refresh" content="0;URL=index.php" />';
} ?>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/se.js"></script>
</body>
</html>
