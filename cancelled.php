<?php
session_start();
$conn= mysqli_connect('localhost','root','','carrental');

// $q="select * from payment,vehicles,usertable where payment.VehicleId=vehicles.Vehicle_Id 
//        and payment.BookingId=usertable.BookingId and  flag=1 ORDER BY payment.BookingId desc ";
       $q="select payment.*,usertable.*,vehicles.* from payment left join usertable on payment.BookingId=usertable.BookingId left join vehicles on payment.VehicleId=vehicles.Vehicle_Id where flag=1 order by payment.BookingId desc";
$jk= mysqli_query($conn,$q);

$num=mysqli_num_rows($jk);
//echo $num;
if($num)
{
   // echo "entry found";
}
//else echo "unsuccessful";
?>

<!-- while($row=mysqli_fetch_array($jk))
{

    $vehicleid=$row['Vehicle_id'];
    
    $bookingid=$row['BookingId'];
    $agentid=$row['AgentId'];
    $dest=$row['Destination'];
    $src=$row['Source'];
    $cost=$row['Amount'];
    $bookingtime=$row['BookingTime'];
    $servicetime=$row['ServiceTime'];
    $vehicleName=$row['Vehicle_Name'];
    $seats=$row['Seats'];
    $type=$row['Type'];
 
echo $vehicleid." ".$bookingid." ".$agentid." ".$dest." ".$src." ".$cost." ".$bookingtime." ".$seats." ".$type." ".$vehicleName.
"<br> ";
}
 
?>-->




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

  <title>TRAIL</title>

 <style type="text/css">
      

      .ram{
   width: 100px;
  height: 30px;
   display: flex;
    align-items: center;
    justify-content: center;
    color:green;
    margin-top: 19px;
  border: solid green;
  background-color: white;
 -ms-transform: rotate(-20deg); /* IE 9 */
  -webkit-transform: rotate(-20deg); /* Safari 3-8 */
  transform: rotate(-20deg);
}
 .shayam{
   width: 120px;
  height: 30px;
   display: flex;
    align-items: center;
    justify-content: center;
    color:red;
    margin-top: 19px;
  border: solid red;
  background-color: white;
 -ms-transform: rotate(-20deg); /* IE 9 */
  -webkit-transform: rotate(-20deg); /* Safari 3-8 */
  transform: rotate(-20deg);
}


.tab2 {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.tabs {
  float: left;
}

.tabs a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.tabs a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}


    </style>


</head>
<body>
  <center><h1>BOOKINGS</h1></center>

<ul class="tab2">
  <li class="tabs"><a  href="alljourney.php">ALL BOOKINGS</a></li>
  <li class="tabs"><a href="upcoming.php">UPCOMING</a></li>
  <li class="tabs"><a href="running.php">RUNNING</a></li>
  <li class="tabs"><a class="active" href="cancelled.php">CANCELLED</a></li>
  <li class="tabs" style="float:right; background-color: orange;">
        <a href="MAIN.php" class="nav-link">Home &nbsp;&nbsp;</a>
        </li>
</ul>
<div style="display:inline-block;float:right;">
<h5 style="float: right;">AGENT NAME : <?php $aa=$_SESSION['agentname']; echo $aa;  ?> </h5><br>
<h5 style="float: right;">AGENT ID:<?php $aa=$_SESSION['agentid']; echo $aa;  ?> </h5><br>
</div><br><br><br>
	<div class="container" style="margin-top: 22px">
<h5>TOTAL CANCELLED  BOOKINGS: <?php echo $num;?> </h5>

    <?php

   while($row=mysqli_fetch_array($jk))
{

    $vehicleid=$row['Vehicle_id'];
    
    $bookingid=$row['BookingId'];
    $agentid=$row['AgentId'];
    $dest=$row['Destination'];
    $src=$row['Source'];
    $cost=$row['Amount'];
    $bookingtime=$row['BookingTime'];
    $servicetime=$row['ServiceTime'];
    $vehicleName=$row['Vehicle_Name'];
    $seats=$row['Seats'];
    $type=$row['Type'];
    $mob=$row['Mobile'];
    $custname=$row['Name'];
    $flag=$row['flag'];
    $distance=$row['Distance'];
    if($type=='A')$type='Non AC';else $type='AC';

     
     $z=strtotime($servicetime);
    $month=date('F',$z);
      $year = date('Y',$z);
        $name_day = date('l',$z);
        $day = date('j',$z);
      
      date_default_timezone_set("Asia/Calcutta");
        $timenow=time();
       
       $time=(int)$distance*(int)60;
       $arrivaltime=$z+$time;
     //  echo $timenow."<br>".$arrivaltime."<br>";


//echo $servicetime."<br>". date("Y-m-d h:i:sa", $arrivaltime)."<br>".$time."<br>";
  if($flag==1){
    echo "
       <div class=\"container\" style=\"margin-top: 22px\">
    	<div class=\"row\" style=\" border-top: ridge ; border-bottom: ridge;border-radius: 3px; \" >

    <div class=\"col-sm-2 bg-light\" style=\"padding-top: 5px; border-left: 4px dashed blue;\">
      <center>Journey On<h3>$name_day</h3><h5>$day $month $year</h5>";

   if($flag==0)
    echo "
      <h5  class=\"ram\">BOOKED</h5>";


     else echo "
      <h5  class=\"shayam\">CANCELED</h5>";

echo"
      </center>
    </div>
    <div class=\"col-sm-7 \" style=\" border-left: 4px groove grey;\">


      <div class=\"align-self-end\" >
       
            <div class=\"recent-car-list\">

               <div >
                <span style=\"float: left; font-style:italic;\">VehicleId</span>
                 <center>  <h3>$vehicleName</h3>
                  <ul>
                    <i class=\"fa fa-car fa-2x \" style=\"padding: 0px 15px\"></i>$type
                   <!-- <i class=\"fa fa-calendar fa-2x \" style=\"padding: 0px 18px\"></i>2015 Model-->
                    <i class=\"fa fa-user fa-2x \" style=\"padding: 0px 18px\"></i>$seats seats<br>
                    <span style=\"font-size: 28px; padding: 0px 15px;\">$src</span>
                    <i class=\"fa fa-arrow-right fa-2x\"></i> 
                    <span style=\"font-size: 28px; padding: 0px 15px;\">$dest</span><br>
                    <i class=\"fa fa-calendar fa-2x \" style=\"padding: 0px 18px\"></i>Booked on:$bookingtime
                </ul></center>
                </div>

                
            
            </div>
            </div>

    
  </div>
  <div class=\"col-sm-3 bg-light\" style=\"padding-top: 5px; border-left: 4px groove grey;border-right:4px dashed blue;  \">
      <center>
      <h3>$custname</h3>
      <h6>BookingId:  00$bookingid</h6>";
      

      echo "
      <h6>fare : $cost/-</h6>
      contact: $mob";
      if($timenow>$z && $timenow<$arrivaltime && $flag==0)
        {  
          $status="RUNNING";
           echo" <h5  style=\"color:green\">Status  :  $status</h5>";
       //     echo"
       // STATUS: <button class=\"btn btn-success\"  data-target=\"#contactModal\">RUNNING</button>";
         }
       elseif ($timenow>$arrivaltime && $flag==0) {
         $status="Journey Completed";
           echo" <h5  style=\"color:yellow\">Status  :  $status</h5>";
       }
       elseif ($timenow<$z && $flag==0){
        echo"<br>
       <form action=\"cancellation.php\" method=\"GET\"> <button type=\"submit\" class=\"btn btn-danger\" name=\"button\" 
       value=\"$bookingid\" >Cancel</button></form>";
       }



      echo "
    </center>
    </div>
</div>
</div>";
}
}


?>
</div>


	






	</body>

	