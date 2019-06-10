
<?php

$conn= mysqli_connect('localhost','root','','carrental');

// $vehicleid=$_POST['vehicleid'];
$vehiclename=$_POST['vehiclename'];

$type=$_POST['type'];
$seats=$_POST['seats'];
$city=$_POST['city'];

$filename= $_FILES["ImageUpload"]["name"];
$tempname=$_FILES["ImageUpload"]["tmp_name"];
$folder="img/".$filename;
echo $_FILES['ImageUpload'];
print_r($_FILES['ImageUpload']);
move_uploaded_file($tempname,$folder);
 $date=time();
 $date=date("Y-m-d h:i:sa",$date);

  $reg="INSERT INTO vehicles	
   VALUES ('','$vehiclename','$type','$seats','$city','$date','$filename')";
 $query= mysqli_query($conn,$reg);
 if($query){
  echo  "<script type=\"text/javascript\">".
        "alert('Data Inserted');".
        "window.location='addremovevehicles.php';".
        "</script>";
}



?>
