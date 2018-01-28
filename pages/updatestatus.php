<?php

include 'db.php';

if(isset($_POST['update']))
{

$status = $_POST['status'];
$v_id = $_POST['v_id'];

$sql = mysql_query("UPDATE video SET status = '$status' WHERE v_id = '$v_id'")or die("".mysql_error());
if($sql)
{

echo "<script>
alert('Update')
window.location.href = 'post_approval.php'
</script>";

}
}
?>