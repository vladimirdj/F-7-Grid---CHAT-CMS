<?php
session_start();
include 'conection.php';
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
<h2>Search: User join Chat join Contact</h2>
<div class="container3">
<table class="responsive-table">
<thead>
<tr>
<th scope="col">User first n.</th>
<th scope="col">User last n.</th>
<th scope="col">User Email</a></th>
<th scope="col">User User</a></th>
<th scope="col">Chat message</a></th>
<th scope="col">Chat date</th>
<th scope="col">Contact first n.</th>
<th scope="col">Contact email</th>
<th scope="col">Contact message</th>
</tr>
</thead>
<tbody>
<?php
$search=$_POST['search'];
$t = "select * from user join chat join contact on user.user_id=chat.c_id where user_id LIKE '%$search%' OR first_name LIKE '%$search%' OR date LIKE '%$search%' OR email LIKE '%$search%' OR last_name LIKE '%$search%' OR last_name LIKE '%$search%'  OR c_date LIKE '%$search%' LIMIT 0 , 10";
$query = mysqli_query($conection, $t);
$n_rez = mysqli_num_rows($query);
if (!$results= mysqli_num_rows($query) == 0) {
while($results = mysqli_fetch_array($query)){
?>
<div align="center">
<h2>Number of earch: <b><?php echo $n_rez ; ?></b></h2>
<h2>Your search: <?php echo $search ?></h2>
</div>
<tr>
<td data-title="first_name"><?php echo $results['first_name']; ?></td>
<td data-title="last_name"><?php echo $results['last_name']; ?></td>
<td data-title="email"><?php echo $results['email']; ?></td>
<td data-title="user"><?php echo $results['user']; ?></td>
<td data-title="msg"><?php echo $results['msg']; ?></td>
<td data-title="c_date"><?php echo $results['c_date']; ?></td>
<td data-title="e_fname"><?php echo $results['e_fname']; ?></td>
<td data-title="e_email"><?php echo $results['e_email']; ?></td>
<td data-title="e_msg"><?php echo $results['e_msg']; ?></td>
</tr>
<?php
}
} else {
echo 'Nothing found';
}
?>
</tbody>
</table>
</div>
<br>
</div>
<br>
<div class="footer">
Copyright @ Template 1
<?php echo date("Y");?>. All Rights Reserved.
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/se.js"></script>
</body>
</html>
