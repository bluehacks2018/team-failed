<?php
include 'db.php';


if(isset($_POST['add']))
{


$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$contactno = $_POST['contactno'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = mysql_query("INSERT INTO account VALUES('','$lastname','$firstname','$contactno','$username','$password')")or die("".mysql_error());

if($sql)
{
	echo "<script>
alert('Success');
window.location.href = 'blog.php';
	</script>";
}

}

?>