<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>




 <?php

include 'db.php';

$sql = mysql_query("SELECT v_id,caption,video_name,
       
       (CASE WHEN status = 0 THEN 'Pending'
             WHEN status = 1 THEN 'Approval'
       
       END) AS status
  FROM video")or die("".mysql_error());
while($row = mysql_fetch_array($sql)) {




echo 

"

<form method='post' action='updatestatus.php'>
		<label>".$row['caption']."</label><br>
		<video width='300' height='200' controls>
		<source src='../videos/".$row['video_name']."' type='video/mp4'>
		</video> 
		<input type='hidden' name='v_id' value=".$row['v_id'].">
		<select name='status'>
		<option value=".$row['status'].">".$row['status']."</option>
		<option value='1'>Approve</option>
		</select>
		<input type='submit' name='update' value='Update'>
<br>
</form>
";

}?>
	 
	
	</video> 



</body>
</html>