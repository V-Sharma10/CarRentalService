
<?php
session_start();

if(!isset($_SESSION['agentid'])){
  echo "<script type=\"text/javascript\">".
  "alert('Login Required!!!.');".
  "window.location='index.php';".
  "</script>";
}


$conn= mysqli_connect('localhost','root','','carrental');
if(isset($_GET['submit'])){
$src=$_GET['src'];
$dest=$_GET['dest'];
$type=$_GET['Type'];
$seater=$_GET['seater'];
// echo $src;
$hr=$_GET['hr'];
$min=$_GET['min'];
$ampm=$_GET['ampm'];
$time=$hr.':'.$min.' '.$ampm;
$_SESSION['time']=$time;
$date=$_GET['startdate'];
$bkt=$hr.':'.$min.$ampm.' '.$date;
$_SESSION['servicetime']=$bkt;



// $ser
// echo $time;

if($src =='' ||$dest='' || $type=='' || $seater==''||$hr=''||$min==''||$ampm==''||$date=='')
{
  echo "<script type=\"text/javascript\">".
  "alert('Fill the details carefully. Something Missing!');".
  "window.location='MAIN.php';".
  "</script>";
}

include 'dist-cal.php';


//calculatin cost of journey
$q="select * from price where type='$type' and seater='$seater' ";

$jk= mysqli_query($conn,$q);

while($row=mysqli_fetch_array($jk)){

  $base_fare=$row['base_fare'];
  $perkm=$row['perkm'];
  
}
$cost=$base_fare+($perkm*$distance);

$_SESSION['cost']=$cost;

echo $type.'  '.$src.' '.$seater;
$q="select * from vehicles where Type='$type' and City='$src' and Seats='$seater'";
$jk= mysqli_query($conn,$q);

$num=mysqli_num_rows($jk);
 echo $num;

if(!$num)
{
  echo "<script type=\"text/javascript\">".
  "alert('No Cars Found.');".
  "</script>";
}
 }
// if($type=='A'){
//   $type='Non-AC';
// }
// else{
//   $type='AC';
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search | Toxotes Rental Service</title>
    <link rel="icon" href="img/carlogo3.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  
<style>*{
  overflow:hidden;
}
    html,body{
        
        overflow-y:  overlay;
        width:100%;
    }
    body{
      
      background:url(img/black.jpg);
     
    }
    
    nav div ul li{
        padding: 0 15px;
    }
    .places{
        align-content: center;
        text-align: center;
        align-self: center;
        position:sticky;
        position: -webkit-sticky;
      
    }
    .srch{
        width:96%;
    }
    .places form {
        margin-top:2%;
    }

    .places form input{
        margin: 2%;
    }
    

     .Type{
  font-size: 16px;
  padding: 10px 8px 10px 14px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 6px;
  overflow: hidden;
  position: relative;
  width:40%;
}

.Type .select{
  width: 80%;
  background-position:40% center;
}

.Type .select select{
  background: transparent;
  line-height: 1;
  border: 0;
  padding: 0;
  border-radius: 0;
  width: 120%;
  position: relative;
  z-index: 10;
  font-size: 1em;
}

</style>

</head>
<body>

    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><img src="img/carlogo3.png" width="75px"><img src="img/head2.png" width="225px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto"> <!--  ml-auto is respnsible for aligning items to the right-->
            <li class="nav-item  active">
              <a class="nav-link" href="MAIN.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="alljourney.php">Booking History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ouragents.php" target="_blank">Our AGENTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ourclients.php" target="_blank">Our Customers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminpanel.php" target="_blank">Add/Remove Vehicles</a>
            </li>
          </ul>
        </div>
      </nav>


      <div class="dark-overlay" style="background: #00000078;;">




    <!-- nav bar -->


<!-- floating welcome msg for agent  -->
<!--
<div class="row">
    <div class="col-md-12">
        <p class="wlcm">Logged in as "Agents Name" from "City".</p>
    </div>
</div>
-->

<!-- floating welcome msg for agent  -->




<!-- search for destination and source -->
<div class="container">
<div class="row">
<div class="places col-md-12 region region-sidebar-first well affix" >
<form class="form search-form" method="GET" action="MAIN.php">
<div style="display:flex;">
      <div style="width:5%;color:white;margin-top:18px;"><h6>FROM</h6>
      </div> 
      <div style="width:30%;">
        <input class="form-control mr-sm-2 srch inputID"    type="text" name="src" placeholder="Source" required>
        </div>  
        <div style="width:30%;color:white;margin-top:18px;float:right;"><h6 style="float:right;">TO</h6>
        </div> 
        <div style="width:30%;display:flex;">
        <input class="form-control mr-sm-1 srch inputID"   type="text" name="dest" placeholder="Destination" required>
        </div>
</div>  

<div style="display:flex;margin-top:2%;" >
        <div class="Type" style="    height: 45px;">
    <div class="select">
       <select name="Type" id="search_categories" required>
          <option selected="selected" disabled>Preference</option>
          <option  value="B">AC</option>
          <option value="A">Non-AC</option>
          
        </select>
     </div>
 </div>
<div style="width:25%"></div>

 <div  style="display:flex;color:white;width:35%;">
          <h6 style=";margin-right:25px;font-weight:600!important;width:25%;">Capacity:</h6>
            <input type="radio" name="seater" value="4" checked> <p style="width:25%">Four seater</p>
            <input type="radio" name="seater" value="6" > <p style="width:25%">Six seater</p>
            <input type="radio" name="seater" value="8" ><p style="width:25%"> Eight seater</p>
        </div>
 </div>
 <br>
<div class="dateNtime" style="display:flex;color:white;margin-left:0%;">

<div style="width:40%;">
<input type="text" class="form-control" placeholder="Date" data-date-format='dd-mm-yyyy' name="startdate" id="start_datepicker" required/>
</div>

<div style="width:20%;"></div>

<div style="width:40%;display:flex;margin-left:5%;margin-right:-10%;" >
<!-- <input type="" class="form-control" placeholder="Time" id="timepicker"/> -->


<select class="form-control" name="hr" style="width:25%;float:right;" required>
<option selected disabled>Hours</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
</select>
<select class="form-control" name="min" style="width:25%;">
<option selected disabled>Mins</option>
<option value="00">00</option>
<option value="30">30</option>
</select>
<select class="form-control" name="ampm" style="width:25%;">
<option value="am">am</option>
<option value="pm">pm</option>
</select>

</div>   
        
</div>        
        <br>
        <button class="btn btn-outline-success my-2 my-sm-0" style="width:150px;" name="submit" type="submit">Search</button>
       
        <br>
 </form>
 <a href="MAIN.php"> <button class="btn btn-outline-danger my-2 my-sm-0" style="width:300px;margin-top:15px!important;" name="" type="">Clear</button></a>
        
</div>



</div>

</div>
<?php
date_default_timezone_set("Asia/Calcutta");
$servicetime=strtotime('$bkt');
$timenow=time();
if(isset($_GET['submit']))
{ include 'dist-cal.php';
  $_SESSION['dist']=$distance;
  $date=$_GET['startdate'];
  $_SESSION['date']=$date;
  $dest=$_GET['dest'];

$Vehicle_Type=$_GET['Type'];
if($Vehicle_Type=='A'){
  $t='Non-AC';
}
else{
  $t='AC';
}
  echo "
  

        <div class=\"card sticky-top\" style=\" background:#000000a6;color:white;font-family: 'Ubuntu', sans-serif;position: -webkit-sticky; 
        position: sticky;
        top: 0;\">

<div class=\"card-header sticky-top\" style=\"border:2px solid black;border-radius:6px ;background:black!important;  position: -webkit-sticky; 
position: fixed;
top: 0;\">
<div> <center>
Your selected journey from $src to $dest ,&nbsp; distance: $distance KM.<br>
DATE: $date  &nbsp;&nbsp;&nbsp;  TIME: $time<br>
Preference:$t &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Capacity: $seater SEATER </center>
$bkt

</div>
</div>

</div>

        ";

}
  ?>

<!-- card for vehicles -->
<div class="row" style="color:;">
<?php

if(isset($_GET['submit']))
{
    include 'dist-cal.php';
    
   
$_SESSION['src']=$src;
$_SESSION['dest']=$dest;
$_SESSION['dist']=$distance;





     while($row=mysqli_fetch_array($jk)){
     
    $vehicleid=$row['Vehicle_id'];
    $vehicleName=$row['Vehicle_Name'];
    $pic=$row['img_path'];
    
    $Vehicle_Type=$row['Type'];
    $availabletime=$row['AvailableTime'];

    if($Vehicle_Type=='A'){
      $t='Non-AC';
  }
  else{
      $t='AC';
  }
    // $vehicleid=$row[''];

    $availabletime=strtotime('$availabletime');

    echo "<div> $availabletime</div>";
    
    echo "   
            <div class=\"card col-md-3\" style=\"border:2px solid black;;display:flex;background:#f1f7f570;;margin:4%;\">
            
           <div class=\"card-header\" style=\"background:#130c0cdb;color:white;display:block;padding-bottom:0px;font-family: 'Varela Round', sans-serif;\"><p style=\"font-size:20px!important;font-weight:bold;\"> Name :&nbsp;$vehicleName </p>
           <div style=\"display:;\">
           <p style=\"float:right; font-size:15px!important;\"> Type: &nbsp;$t </p>
           <p style=\"float:left; font-size:15px!important;\"> Vehicle ID :$vehicleid </p>
           </div>
           </div>
           <div style=\"background:url(img/$pic);background-size:cover;\">
           <div class=\"card-body\" style=\"border:2px solid black;background:#000000a8;color:white; \">
           <div class=\" dark-overlay\" style=\" background:;padding:0;margin:0;overlay-y:hidden!important; \">
            <i style=\" font-size:35px;margin:5%!important;\" class=\"fa fa-user\" aria-hidden=\"true\"><span style=\"font-size:30px!important;\"> &nbsp;&nbsp; Capacity of $seater </span></i><br>
           
           
            <i style=\" font-size:35px;margin:5%!important;\" class=\"fa fa-tachometer\" aria-hidden=\"true\"><span style=\"font-size:30px!important;\"> &nbsp;&nbsp; Rs.&nbsp; $perkm /Km </span></i>  <br>
             <i style=\" font-size:35px;margin:5%!important;float:left;\" class=\"fa fa-money\" aria-hidden=\"true\"><span style=\"font-size:30px!important;;\"> &nbsp;&nbsp; Rs. $cost </span></i> </div>
            <form action=\"payment.php\"   method=\"GET\" ><br>
            <button type=\"submit\" class=\"btn btn-outline-danger \" id=\"book\" value=\"$vehicleid\" name=\"button\" style=\"float: right;margin-right:5%;\"> Book now</button><br>
             </form>
             </div>
          </div>
       </div>  ";
          
     }

       

   }


 
?>
</div>

<!-- card for vehicles -->
<!-- <div class="row">

    <div class="col-md-4" style="background-color:bisque;height:50px;">

    </div>

    <div class="col-md-4" style="background-color:blueviolet;height:50px;">

    </div>

    <div class="col-md-4" style="background-color:brown;height:50px;">

    </div>

</div> -->
<!-- search for destination and source -->
<script>
$(document).ready(function() {
        $("#start_datepicker").datepicker({ dateFormat: 'yy-mm-dd' });

  });


//   $(document).ready(function() {
//    $('.timepicker').timepicker();
// });
</script>
<!-- <script>
$(document).ready(function() {
   $('#timepicker').timepicker();
});
</script> -->
<script>
$('.inputID').keyup(function(){
    this.value = this.value.toUpperCase();
});
</script>
</div>
</body>
</html>