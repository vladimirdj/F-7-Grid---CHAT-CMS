<?php
session_start();
include 'conection.php';
if (isset($_SESSION['user']) && $_SESSION['role'] == 'admin'){
$user_id=$_GET['user_id'];
$query = "SELECT * FROM user WHERE user_id='$user_id'";
$select_posts = mysqli_query($conection, $query);
while ($res = mysqli_fetch_assoc($select_posts)) {
$user_id = $res['user_id'];
$first_name = $res['first_name'];
$last_name = $res['last_name'];
$email = $res['email'];
$user = $res['user'];
$password = $res['password'];
}
if (isset($_POST['edit'])) {
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$user = $_POST['user'];
$password = $_POST['password'];
$result = mysqli_query($conection, "UPDATE user SET first_name ='$first_name',last_name ='$last_name',email='$email',user='$user',password='$password' WHERE user_id=$user_id");
echo "<script>alert('Edit!')</script>";
echo "<script>window.history.go(-2);</script>";
}
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
<h2>Edit acaunt</h2>
</div>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="first_name"><h2>First name</h2></label>
<input type="text" name="first_name" class="form-input" value="<?php echo $first_name; ?>">
</div>
<div class="form-group">
<label for="last_name"><h2>Last name</h2></label>
<input type="text" name="last_name" class="form-input" value="<?php echo $last_name; ?>">
</div>
<div class="form-group">
<label for="email"><h2>Email</h2></label>
<input type="text" name="email" class="form-input" value="<?php echo $email; ?>">
</div>
<div class="form-group">
<label for="user"><h2>User</h2></label>
<input type="text" name="user" class="form-input" value="<?php echo $user; ?>">
</div>
<div class="form-group">
<label for="password"><h2>Password</h2></label>
<input type="password" name="password" class="form-input" value="<?php echo $password; ?>">
</div>
<div class="btn-group">
<div align="center">
<input type="button" class="btn-2" onclick="location.href='user.php';" value="Cancel" />
<input type="submit" class="btn-3" name="edit" value="Edit Post">
</div>
</div>
</form>
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
<script  src="js/moj.js"></script>
</body>
</html>
