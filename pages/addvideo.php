
<?php
 
error_reporting(1);
 
$con=mysql_connect("localhost","root","");
 
mysql_select_db("demo",$con);
 
extract($_POST);
 
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
$status = $_POST['status'];
$caption = $_POST['caption'];


mysql_query("INSERT INTO video(caption,video_name,status) values('$caption','$video_path','$status')");
 
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
 
echo "<script>
alert('Upload');
window.location.href = '../index.php';
</script>";
 
}
 
}
 ?>