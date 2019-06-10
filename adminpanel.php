<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vehicel Panel | Toxotes Rental Service</title>
    <link rel="icon" href="img/carlogo3.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">

<style>

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
  background-color: #e64327;
}



</style>

</head>
<body>
  
<center><h1>Add/Remove/View Vehicles</h1></center>
<ul class="tab2">
  <li class="tabs"><a class="active" href="adminpanel.php">View Vehicles</a></li>
  <li class="tabs"><a href="addremovevehicles.php">Add Vehicles</a></li>
  
   <li class="tabs" style="float:right; background-color: orange;">
        <a href="MAIN.php" class="nav-link">Home &nbsp;&nbsp;</a>
        </li>
</ul>



<div class="container">
<form method="GET"><div style="display:flex;" class="text-justify;">
    
<input type="search" class="form-control" name="searchbar" style="width:50%;" placeholder="Search Vehicles " required> 
<button type="submit" name="submitbtn" style="width:10%;margin-left:10%;" class="btn btn-info">Search</button></div>


<br>

<div  style="display:flex;color:black;">
          <h6 style=";margin-right:25px;font-weight:600!important;width:20%;">Search by:</h6>
            <input type="radio" name="seater" value="VehicleId"  required> <p style="width:20%;margin-top:-5px;padding-left:5px;">Vehicle ID</p>
            <input type="radio" name="seater" value="City" > <p style="width:20%;margin-top:-5px;padding-left:5px;">City</p>
            <input type="radio" name="seater" value="Type" ><p style="width:20%;margin-top:-5px;padding-left:5px;"> Preference</p>
            <input type="radio" name="seater" value="Seats" ><p style="width:20%;margin-top:-5px;padding-left:5px;"> Seats</p>
        </div>
</form>

<br>


<?php
session_start();

$conn= mysqli_connect('localhost','root','','carrental');

if(isset($_GET['submitbtn'])){

    $radio=$_GET['seater'];
 $searchtext=$_GET['searchbar'];
if($radio=='VehicleId')
{
    $q="select * from vehicles where Vehicle_id='$searchtext' ";
    echo "<hr><h5 style=\"color:green;\">Showing results for BookingId: $searchtext   </h5><hr><br>";
}

elseif($radio=='City')
{
    $q="select * from vehicles where City= '$searchtext' ";
    echo "<hr><h5 style=\"color:green;\">Showing results for  Client Name : $searchtext   </h5><hr><br>";
}
if($radio=='Type')
{   
    if($searchtext=='AC'){
        $t='B';
    }
    else{
        $t='A';
    }
    $q="select * from vehicles where Type='$t' ";
    echo "<hr><h5 style=\"color:green;\">Showing results for Client Aadhaar number: $searchtext   </h5><hr><br>";
    
}
elseif($radio=='Seats')
{
    $q="select * from vehicles where Seats='$searchtext' ";
    echo "<hr><h5 style=\"color:green;\">Showing results for  Client Name : $searchtext   </h5><hr><br>";
}
   


echo "<div class=\"row\">";

$jk= mysqli_query($conn,$q);

$num=mysqli_num_rows($jk);
//  echo $num;
 while($row=mysqli_fetch_array($jk)){

  $vehicleid=$row['Vehicle_id'];
  $vehicleName=$row['Vehicle_Name'];
  $pic=$row['img_path'];
  $seater=$row['Seats'];
  $Vehicle_Type=$row['Type'];
  $city=$row['City'];
  $availtime=$row['AvailableTime'];
  if($Vehicle_Type=='A'){
    $t='Non-AC';
}
else{
    $t='AC';
}

 
echo "   
            <div class=\"card col-md-4\" style=\"border:2px solid black;;display:flex;background:#f1f7f570;;margin:1%;\">
            
           <div class=\"card-header\" style=\"background:#130c0cdb;color:white;display:block;padding-bottom:0px;font-family: 'Varela Round', sans-serif;\"><p style=\"font-size:20px!important;font-weight:bold;\"> Name :&nbsp;$vehicleName </p>
           <div style=\"display:;\">
           <p style=\"float:right; font-size:15px!important;\"> Type: &nbsp;$t </p>
           <p style=\"float:left; font-size:15px!important;\"> Vehicle ID :$vehicleid </p>
           </div>
           </div>
           <div style=\"background:url(img/$pic);background-size:contain;\">
           <div class=\"card-body\" style=\"border:2px solid black;background:#000000a8;color:white; \">
           <div class=\" dark-overlay\" style=\" background:;padding:0;margin:0;overlay-y:hidden!important; \">
            <i style=\" font-size:35px;margin:5%!important;\" class=\"fa fa-user\" aria-hidden=\"true\"><span style=\"font-size:30px!important;\"> &nbsp;&nbsp; Capacity of $seater </span></i><br>
           
            </div>
            <form action=\"remove.php\"   method=\"GET\" ><br>
            <button type=\"submit\" class=\"btn btn-danger \" id=\"book\" value=\"$vehicleid\" name=\"button\" style=\"float: right;margin-right:5%;\">Remove</button><br>
             </form>
             </div>
          </div>
       </div>  ";
} }
?>
</div>
</div>



<div class="row">
<?php



if(!isset($_SESSION['agentid'])){
  echo "<script type=\"text/javascript\">".
  "alert('Login Required!!!.');".
  "window.location='index.php';".
  "</script>";
}


$conn= mysqli_connect('localhost','root','','carrental');


$q="select * from vehicles";
$jk= mysqli_query($conn,$q);

$num=mysqli_num_rows($jk);
 echo $num;
 if(!isset($_GET['submitbtn'])){
 while($row=mysqli_fetch_array($jk)){

  $vehicleid=$row['Vehicle_id'];
  $vehicleName=$row['Vehicle_Name'];
  $pic=$row['img_path'];
  $seater=$row['Seats'];
  $Vehicle_Type=$row['Type'];
  $city=$row['City'];
  $availtime=$row['AvailableTime'];
  if($Vehicle_Type=='A'){
    $t='Non-AC';
}
else{
    $t='AC';
}

 
echo "   
            <div class=\"card col-md-3\" style=\"border:2px solid black;;display:flex;background:#f1f7f570;;margin:4%;\">
            
           <div class=\"card-header\" style=\"background:#130c0cdb;color:white;display:block;padding-bottom:0px;font-family: 'Varela Round', sans-serif;\"><p style=\"font-size:20px!important;font-weight:bold;\"> Name :&nbsp;$vehicleName </p>
           <div style=\"display:;\">
           <p style=\"float:right; font-size:15px!important;\"> Type: &nbsp;$t </p>
           <p style=\"float:left; font-size:15px!important;\"> Vehicle ID :$vehicleid </p>
           </div>
           </div>
           <div style=\"background:url(img/$pic);background-size:contain;\">
           <div class=\"card-body\" style=\"border:2px solid black;background:#000000a8;color:white; \">
           <div class=\" dark-overlay\" style=\" background:;padding:0;margin:0;overlay-y:hidden!important; \">
            <i style=\" font-size:35px;margin:5%!important;\" class=\"fa fa-user\" aria-hidden=\"true\"><span style=\"font-size:30px!important;\"> &nbsp;&nbsp; Capacity of $seater </span></i><br>
           
            </div>
            <form action=\"remove.php\"   method=\"GET\" ><br>
            <button type=\"submit\" class=\"btn btn-danger \" id=\"book\" value=\"$vehicleid\" name=\"button\" style=\"float: right;margin-right:5%;\">Remove</button><br>
             </form>
             </div>
          </div>
       </div>  ";
} }
?>
</div>
</body>
</html>