<?php
if(isset($_POST['submit'])){
$link=mysqli_connect('localhost','root','','registration');

$fileName = $_FILES['file']['name'];
$target = "/opt/lampp/htdocs/gharelu-app/images/";
 $fileTarget = $target.$fileName;
 $tempFileName = $_FILES["file"]["tmp_name"];
 $desc = $_POST['description'];
 $nam = $_POST['name'];
 $result = move_uploaded_file($tempFileName,$fileTarget);

 if($result) {
 echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";
 $query = "INSERT INTO services(name,imgdir,description) VALUES ('$nam','images/$fileName','$desc')";
 $link->query($query) or die("Error : ".mysqli_error($link));
 }
 else {
 echo "Sorry !!! There was an error in uploading your file";
 }
 mysqli_close($link);
 }


 ?>
