<?php

session_start();
date_default_timezone_set("Asia/Calcutta");
$d=time();
$w=$d+3600;
$a='06:08pm 2019-04-12';
$a=strtotime($a);
echo $a."<br>".date("h:i:sa", $d)."<br>".$d."<br>".$w;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Card</title>

    <style type="text/css">
      

      .ram{
   width: 80px;
  height: 30px;
   display: flex;
    align-items: center;
    justify-content: center;
    color:green;
  border: solid green;
  background-color: white;
 -ms-transform: rotate(-20deg); /* IE 9 */
  -webkit-transform: rotate(-20deg); /* Safari 3-8 */
  transform: rotate(-20deg);
}
    </style>
</head>


<body>
   <div class="card" style="border:2px solid black; width:25%;">
       <div class="card-header"><p> Name of the car available. <p></div>
       <div class="card-body" style="border:2px solid black; height:150px;">
        seater<br>
        type<br>
        vehicle id<br>
        
        price<br>
        time to reach destination <br>
        speed<br>
        <button type="button" id="book" value="submit" style="float: right;margin-right:5%;"> Book now</button><br>
       </div>
   </div> 



 <h3 class="ram">Booked </h3>
</body>
<?php
if(isset($_GET['button'])){
  $f=$_GET['button'];$a=$_SESSION['src'];
  echo $f.$a;
}
?>
</html>