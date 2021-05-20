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
<div align="center">
<h2>User</h2>
</div>
<a href="a_u.php"><button class="btn-5">Add user</button></a>
<br>
<br>

<h2>Search</h2>

<form action="search.php" method="post">



<select name="col" class="form-input">
<option value="user_id"class="form-input" >Id</option>
<option value="first_name" selected="selected" class="form-input">Frist Name</option>
<option value="last_name" class="form-input" >Last Name</option>
<option value="email" class="form-input">Email</option>
<option value="date" class="form-input">Date</option>
</select>

<input type="text" name="search" placeholder=" Search here ... " class="form-input"/>

<button class="btn-6" type="submit" name="submit" value="Traži">Search</button>

</form>
<br>

</div>

<div id="customers">
<div id="signature_container">
<div class="container3">
<table id="simpleTable1" class="responsive-table">


<?php

$sql = "SELECT count(user_id) FROM user";
$result = mysqli_query($conection, $sql);
$row = mysqli_fetch_array($result)[0];

$orderBy = "first_name";
$order = "asc";

if(!empty($_GET["orderby"])) {
$orderBy = $_GET["orderby"];
}
if(!empty($_GET["order"])) {
$order = $_GET["order"];
}

$Id = "asc";
$Last = "asc";
$First = "asc";
$Email = "asc";
$Date = "asc";
$Role = "asc";
$User = "asc";

if($orderBy == "user_id" and $order == "asc") {
$Id = "desc";
}
if($orderBy == "last_name" and $order == "asc") {
$Last = "desc";
}
if($orderBy == "first_name" and $order == "asc") {
$First = "desc";
}
if($orderBy == "email" and $order == "asc") {
$Email = "desc";
}
if($orderBy == "date" and $order == "asc") {
$Date = "desc";
}
if($orderBy == "role" and $order == "asc") {
$Role = "desc";
}
if($orderBy == "user" and $order == "asc") {
$User = "desc";
}
?>

<?php

$sql = "SELECT * FROM user";

$result = mysqli_query($conection, $sql);
$q = "select * from user";
$e= mysqli_query($conection,$q);
$r= mysqli_num_rows($e);
?>
<br>




<div class="boja"> <h3>There are <font color="green"><b><?php echo $row ?></b></font > rows in table.</h3></div>
<form name="fUser" method="post" action="">
<br><br>
<h2> Check All</h2> <input type="checkbox" onClick="toggle(this)" />
<h2>Checked the Checkbox for Hide column</h2>
<br>
<input type="checkbox" class="hidecol" value="first name" id="col_2" />&nbsp;First name&nbsp;
<input type="checkbox" class="hidecol" value="last name" id="col_3" />&nbsp;Last name
<input type="checkbox" class="hidecol" value="email" id="col_4" />&nbsp;Email

<input type="checkbox" class="hidecol" value="role" id="col_5" />&nbsp;Role

<table class="table table-condensed table-hover table-striped bootgrid-table" id="emp_table">

<thead>

<tr>

<th scope="col"> <a href="?orderby=user_id&order=<?php echo $Id; ?>">Id</a></th>
<th scope="col"><a href="?orderby=first_name&order=<?php echo $First; ?>">First name</a></th>
<th scope="col"><a href="?orderby=last_name&order=<?php echo $Last; ?>">Last name</a></th>
<th scope="col"><a href="?orderby=email&order=<?php echo $Email; ?>">Email</a></th>
<th scope="col"><a href="?orderby=role&order=<?php echo $Role; ?>">Role</a></th>
<th scope="col"><a href="?orderby=user&order=<?php echo $User ; ?>">User</a></th>
<th scope="col"><a href="?orderby=date&order=<?php echo $Date; ?>">Date</a></th>
<th scope="col">Check</th>
<th scope="col">Action</th>
</tr>

</thead>

<tbody id="tabela">

<?php


/*$sql = "SELECT * FROM osoba1 join posao ON osoba1.korisnik = posao.korisnik LIMIT $offset, $limit";

$result = mysqli_query($povezivanje, $sql);*/
$sno = 1;
while($row = mysqli_fetch_array($result)){
//$developer_records[] = $row;
$user_id= $row['user_id'];

$first_name= $row['first_name'];
$last_name= $row['last_name'];
$email= $row['email'];
$role =  $row['role'];
$user =  $row['user'];
$date =  $row['date'];
?>

<tr>
<td data-title=Id><?php echo $row['user_id'];?> </td>
<td align='center' contenteditable="true" data-old_value="<?php echo $row["first_name"]; ?>" onBlur="saveInlineEdit(this,'first_name','<?php echo $row["user_id"]; ?>')" onClick="highlightEdit(this);"><?php echo $row["first_name"]; ?></td>
<td align='center' contenteditable="true" data-old_value="<?php echo $row["last_name"]; ?>" onBlur="saveInlineEdit(this,'last_name','<?php echo $row["user_id"]; ?>')" onClick="highlightEdit(this);"><?php echo $row["last_name"]; ?></td>
<td data-title=Eamil><?php echo $row['email'] ;?></td>
<td data-title=Role><?php echo $row['role'] ;?></td>
<td data-title=User><?php echo $row['user'] ;?></td>
<td data-title=Date><?php echo $row['date'] ;?></td>

<td data-title=Check>
<input name="obelezivac[]" type="checkbox" value="<?php echo $row['user_id']; ?>">
</td>
<td data-title=Action>
<button class="btn-6"><a href=v_u.php?user_id=<?php echo $row['user_id']; ?>>View</a></button>
<button class="btn-4"><a href=e_u.php?user_id=<?php echo $row['user_id']; ?>>Edit</a></button>
<button class="btn-3"><a href=d_u.php?user_id=<?php echo $row['user_id']; ?>>Delete</a></button>

</td>

</tr>

<?php
$sno ++;

}

?>

<br>
<h2> Multi select checked </h2>

<div class="btn-group">
<input type="button" class="btn-5" name="view" value="View" onClick="View();" />
<input type="button" class="btn-2" name="update" value="Update" onClick="Update();" />
<input type="button" class="btn-3" name="delete" value="Delete"  onClick="Delete();" />
</div>

<br>
</tbody>

</table>



</form>
</div>
</div>
</div>
<div align="center">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='GET'>
<b>Go to page: </b>
<input type='text' class="form-input1" name='page'>
<button class="btn-5" ttype='submit' value='Go'> Go</button>
</form>
<br>


</div>
</div>
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
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
<script>
function View() {
document.fUser.action = "v_mu.php";
document.fUser.submit();
}
function Update() {
document.fUser.action = "e_mu.php";
document.fUser.submit();
}
function Delete() {
if(confirm("Are you sure want to delete these rows?")) {
document.fUser.action = "u_md.php";
document.fUser.submit();
}
}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){

// Checkbox click
$(".hidecol").click(function(){

var id = this.id;
var splitid = id.split("_");
var colno = splitid[1];
var checked = true;

// Checking Checkbox state
if($(this).is(":checked")){
checked = true;
}else{
checked = false;
}
setTimeout(function(){
if(checked){
$('#emp_table td:nth-child('+colno+')').hide();
$('#emp_table th:nth-child('+colno+')').hide();
} else{
$('#emp_table td:nth-child('+colno+')').show();
$('#emp_table th:nth-child('+colno+')').show();
}

}, 1500);

});
});
</script>
<script>
function saveInlineEdit(editableObj,column,user_id) {
// no change change made then return false
if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
return false;
// send ajax to update value
$(editableObj).css("background","green");
$.ajax({
url: "saveInlineEdit.php",
type: "POST",
dataType: "json",
data:'column='+column+'&value='+editableObj.innerHTML+'&user_id='+user_id,
success: function(response) {
// set updated value as old value
$(editableObj).attr('data-old_value',editableObj.innerHTML);
$(editableObj).css("background","red");
},
error: function () {
console.log("errr");
}
});
}
</script>
<script>
function getcheckboxes() {
var node_list = document.getElementsByTagName('input');
var checkboxes = [];
for (var i = 0; i < node_list.length; i++)
{
var node = node_list[i];
if (node.getAttribute('type') == 'checkbox')
{
checkboxes.push(node);
}
}
return checkboxes;
}
function toggle(source) {
checkboxes = getcheckboxes();
for(var i=0, n=checkboxes.length;i<n;i++)
{
checkboxes[i].checked = source.checked;
}
}
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../js/se.js"></script>

</body>
</html>
