<?php
session_start();
require 'conection.php';
unset($_SESSION["user"]);
header("Location: index.php")
?>
