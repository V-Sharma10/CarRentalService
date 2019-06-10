<?php
session_start();
$conn= mysqli_connect('localhost','root','','carrental');

$src=$_SESSION['src'];
$dest=$_SESSION['dest'];
$agentid=$_SESSION['agentid'];
$cost=$_SESSION['cost'];
$vehicleid=$_SESSION['vehicleid'];
$distance=$_SESSION['dist'];


$time=(int)$distance*(int)60;
date_default_timezone_set("Asia/Calcutta");
$bookingtime=time();
$servicetime=$_SESSION['servicetime'];

$a=strtotime($servicetime);
$arrivaltime=$a+$time;

 $bookingtime= date("Y-m-d h:i:sa", $bookingtime);
 $servicetime= date("Y-m-d h:i:sa", $a);
 $arrivaltime= date("Y-m-d h:i:sa", $arrivaltime);
echo "ARRIVED\n";
echo $bookingtime." <br>";
echo $servicetime." <br>";
echo $arrivaltime." <br>";


$q= "INSERT INTO payment VALUES ('', '$agentid', '$dest','$src','$vehicleid','$cost','$bookingtime','$servicetime','0','$distance')";

if (mysqli_query($conn, $q)) {
	$last_id = mysqli_insert_id($conn);
    echo "New record created successfully"."   ".$last_id." ";
} else {
    echo "Error: " ;
}



$q="UPDATE vehicles SET City='$dest' , AvailableTime='$arrivaltime' WHERE Vehicle_id='$vehicleid'";



if (mysqli_query($conn, $q)) {
	//$last_id = mysqli_insert_id($conn);
    echo "UPDATED successfully"."<br>".$dest."<br>".$arrivaltime;
} else {
    echo "UPDATION Error: " ;
}

$name =$_POST['FirstName'].' '.$_POST['MiddleName'].' '.$_POST['LastName'];

$mobile=$_POST['MobileNo'];
$email=$_POST['Email'];
$address=$_POST['localadd'].' State:'.$_POST['StateofDomicile'].' Country:'.$_POST['Nationality'];
$adhaarno=$_POST['AadhaarNo'];

echo "<br>".$last_id."<br>";

$q= "INSERT INTO usertable VALUES ('$last_id','$name','$address','$mobile','$email','$adhaarno')";


if (mysqli_query($conn, $q)) {
    echo "New record created successfully";
} else {
    echo "Error: " ;
}

echo "<script type=\"text/javascript\">".
    	 "alert('BOOKING Successful. BookingID is $last_id .');".
    	 "window.location='MAIN.php';".
    	 "</script>";




?>