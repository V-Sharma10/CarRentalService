<?php


session_start();

if(!isset($_SESSION['agentid'])){
  echo "<script type=\"text/javascript\">".
  "alert('Login Required!!!.');".
  "window.location='index.php';".
  "</script>";
}


$conn= mysqli_connect('localhost','root','','carrental');

$vehicleid=$_GET['button'];


$q="DELETE FROM `vehicles` WHERE `Vehicle_id`='$vehicleid'";
$jk= mysqli_query($conn,$q);

echo "<script type=\"text/javascript\">".
"alert('Car Removed.');".
"window.location='adminpanel.php';".
"</script>";

?>