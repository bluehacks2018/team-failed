

<?php
 
$target_dir = "../videos/";
 
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
 
if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
 
if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg" && $imageFileType != "jpg")
{
    echo "File Format Not Suppoted";
} 
 
else
{
 
$video_path=$_FILES['fileToUpload']['name'];
$name = $_POST['name']; 
$status = $_POST['status']; 


mysql_query("INSERT INTO video values('$name','$video_path','$caption','$status')");
 
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
 
echo "uploaded ";
 
}
 
}
 ?>


	 


 <?php

$sql = mysql_query("SELECT * FROM `video` WHERE 1")or die("".mysql_error());
while($row = mysql_fetch_array($sql)) {




echo 

"
		<video width='300' height='200' controls>
		<source src='test_upload/".$row['video_name']."' type='video/mp4'>

	</video> 	

";

}?>
	 
	
	</video> 
