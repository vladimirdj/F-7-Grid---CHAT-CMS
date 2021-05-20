<?php
session_start();
require '../conection.php';

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
<div class="zaglavlje">

<h1>Fiction7 & Grid</h1>
<h2>Example</h2>
</div>
<form action="login.php" method="post">
<div class="form-group">
<label for="user">Username:</label>
<input type="text" id="user" class="form-input" name="user" placeholder="Username" required value="vlada">
</div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" id="password" class="form-input" name="password" placeholder="Password" required value="vlada">
</div>
<div class="btn-group">
<button class="btn-3" type="submit" name="login">Login</button>
</div>
</form>


</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../js/se.js"></script>

</body>
</html>
