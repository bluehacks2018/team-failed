<?php
session_start();
$error= '';

if(isset($_POST['submit']))
{

$connection = mysql_connect('localhost','root','');
$db = mysql_select_db('demo' ,$connection);


$username = $_POST['username'];
$password = $_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
 
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


$query = mysql_query("SELECT username,password FROM account WHERE username = '$username' AND password = '$password'")or die("".mysql_error());
$rows = mysql_num_rows($query);

if($rows == 1){

	$_SESSION['login_user'] = $username;
	header("location:user/index.php");
}
else
{
	echo "Invalid username and password";
}




}
?>

