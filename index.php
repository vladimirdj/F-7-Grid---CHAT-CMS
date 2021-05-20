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
@media only screen and (max-width:480px) {
.raspon_1_of_2 {
width: 100%
}
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
<a href="register.php"  class="link">Register</a>
<a href="admin/index.php"  class="link">Admin</a>
</div>
<div class="right">
<a href="user.php?user=<?php echo $_session_encode['user'];?>"  class="link">User: <?php echo $_SESSION['user']; ?></a>
</div>
</nav>
<br>
<div class="sekcija2 grupa2">
<div class="colona2 raspon_2_of_2">
<div align="center">
<h2>Chat</h2>
<?php
$query = "SELECT * FROM chat ORDER BY c_date DESC";
$chat = mysqli_query($conection, $query);
while ($row = mysqli_fetch_assoc($chat)) {
?>
<div id="chat_data">
<span style="float:left; color:green;"><?php echo $row['user'];
?></span>
<span style="color:red;"><?php echo $row['msg'];
?></span>
<span style="float:right; color:white;"><?php echo $row['c_date'];
?></span>
</div>
<?php } ?>
</div>
<br>
<?php
if (isset($_SESSION['user'])) {
?>
<form method="post" action="ch.php">
<div class="form-group">
<input type="hidden" id="user" class="form-input" name="<?php echo $_SESSION["user"];?>">
</div>
<div class="form-group">
<label for="msg"><h3>Message</h3></label>
<textarea id="msg" class="form-input" name="msg" rows="4" cols="100"></textarea>
</div>
<br>
<div class="btn-group">
<button class="btn-2" type="submit" name="submit">Submit</button>
</div>
</form>
<?php
} else {
echo 'You must be logged in';
}
?>
</div>
<div class="colona2 raspon_1_of_2">
<div align="center">
<h2>Login</h2>
<form action="login.php" method="post">
<div class="form-group">
<label for="user">Username:</label>
<input type="text" id="user" class="form-input" name="user" placeholder="Username" required>
</div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" id="password" class="form-input" name="password" placeholder="Password" required>
</div>
<div class="btn-group">
<button class="btn-3" type="submit" name="login">Login</button>
</div>
</form>
</div>
<br>
<div align="center">
<h2>Search</h2>
<form action="searchs.php" method="post">
<input name="search" class="form-input" type="text" placeholder=" Search here ... " />
<button class="btn-6" type="submit" name="submit" value="Traži">Search</button>
</form>
</div>
<br>
<div align="center">
<h2>Contact</h2>
<form action="c.php" method="post" id="forma">
<div class="form-group">
<label for="e_fname">First Name</label>
<input name="e_fname" type="text" id="e_fname" class="form-input"/>
</div>
<div class="form-group">
<label for="e_email">Email</label>
<input name="e_email" type="text" id="e_email" class="form-input"/>
</div>
<div class="form-group">
<label for="e_msg">Message</label>
<textarea id="e_msg" class="form-input" name="e_msg" rows="4" cols="100"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Send" name="send" class="btn-5"/>
</div>
</form>
</div>
</div>
</div>
<br>
<div class="footer">
Copyright @ F7 Eample
<?php echo date("Y");?>. All Rights Reserved.
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/se.js"></script>
</body>
</htm
