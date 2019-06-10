<?php
$conn= mysqli_connect('localhost','root','','carrental');


$bookingid=$_GET['button'];


$q="UPDATE payment SET flag=1 WHERE BookingId='$bookingid'";

$jk= mysqli_query($conn,$q);


$q="SELECT * from payment where BookingId='$bookingid' ";
$jk= mysqli_query($conn,$q);

$num=mysqli_num_rows($jk);


echo $num;
while($row=mysqli_fetch_array($jk)){

  $vehicleid=$row['VehicleId'];
  $city=$row['Source'];
  
}

// updating Available Time and city of vehicle;
date_default_timezone_set("Asia/Calcutta");
$t=time()-3660;



$q="UPDATE vehicles SET AvailableTime='$t' , City='$city' WHERE VehicleId='$vehicleid'";

$jk= mysqli_query($conn,$q);

echo "<script type=\"text/javascript\">".
    	 "alert('TICKET CANCELLED FOR ID $bookingid');".
    	 "window.location='cancelled.php';".
    	 "</script>";


?>