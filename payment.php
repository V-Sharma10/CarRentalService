
<?php

session_start();
if(!isset($_SESSION['agentid'])){
  echo "<script type=\"text/javascript\">".
  "alert('Login Required!!!.');".
  "window.location='index.php';".
  "</script>";
}


$conn= mysqli_connect('localhost','root','','carrental');
$src=$_SESSION['src'];
$dest=$_SESSION['dest'];
$agentid=$_SESSION['agentid'];
$distance=$_SESSION['dist'];
$vehicleid=$_GET['button'];

$date=$_SESSION['date'];
$cost=$_SESSION['cost'];
$_SESSION['vehicleid']=$vehicleid;




$q="select * from vehicles where Vehicle_id='$vehicleid'";

$jk= mysqli_query($conn,$q);

$num=mysqli_num_rows($jk);

 while($row=mysqli_fetch_array($jk)){

  $Vehicle_Name=$row['Vehicle_Name'];
  $Vehicle_Type=$row['Type'];
  $Vehicle_seats=$row['Seats']; 
}

if($Vehicle_Type=='A'){
    $t='Non-AC';
}
else{
    $t='AC';
}
$o="select max(BookingId) as maxx from payment ";

$g= mysqli_query($conn,$o);
 while($row=mysqli_fetch_array($g)){
   $lastid=$row['maxx'];
 }
$lastid=(int)$lastid+1;

// echo $src.$dest.$vehicleid;



?>
<!-- 
booking id   
agent id
cost
vehicle id
vehicle name
type
seats
destination
source
date 
time
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Booking Panel | Toxotes Rental Service</title>
    <link rel="icon" href="img/carlogo3.png">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <style>
    input{
        margin:2%;
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

     <div class="container">
         <!-- <div class="panel">
             Booking ID:<br>
             Agent ID: <br>
             Vehicle ID:<br>
             Vehicle Name:<br>
             Type:<br>
             Seats:<br>
             Destination:<br>
             Source:<br>
             Distance:<br>
             Cost:<br>
             Date :<br>
             Time:<br>
         </div> -->
         

         <form class="insert" action="confirm.php" method="POST" id="form1" enctype="multipart/form-data" style="margin-top:2%;">
                            <div class="row">
                            <div class="col-md-4"  style="display:flex;"><h6 style="font-size:15px;margin-top:4%;">Booking ID:</h6>
                                <input type="text" class="form-control" name="bookingid" value="<?php echo $lastid; ?>" placeholder="Booking ID" readonly/>
                              </div>
                                <div class="col-md-4">
                                 
                                </div>
                                <div class="col-md-4"  style="display:flex;"><h6 style="font-size:15px;margin-top:4%;">Agent ID:</h6>
                                    <input type="text" class="form-control" name="agentid" value="<?php echo $agentid; ?>" placeholder="Agent ID" readonly/>
                                  </div></div>
                                  <hr><div class="row">
                                 <div class="col-md-12" style="font-size:24px!important;">       Vehicle Details: </div>
                                 <div class="col-md-4"  style="display:flex;"><h6 style="font-size:15px;margin-top:4%;">Vehicle ID:</h6>
                                <input type="text" class="form-control" name="vehicleid" value="<?php echo '000'.$vehicleid; ?>" placeholder="Vehicle ID" readonly/>
                              </div>
                                <div class="col-md-4">
                                 
                                </div>
                                  <div class="col-md-4">
                                    
                                  </div>
                                  <div class="col-md-4"  style="display:flex;"><h6 style="font-size:15px;margin-top:4%;">Vehicle Name:</h6>
                                <input type="text" class="form-control" name="vehiclename" value="<?php echo $Vehicle_Name; ?>" placeholder="Vehicle Name" readonly/>
                              </div>
                              <div class="col-md-4"  style="display:flex;"><h6 style="font-size:15px;margin-top:4%;">Vehicle Type:</h6>
                                <input type="text" class="form-control" name="type" value="<?php echo $t; ?>" placeholder="Type" readonly/>
                                </div>
                                <div class="col-md-4"  style="display:flex;"><h6 style="font-size:15px;margin-top:4%;">Vehicle Capacity:</h6>
                                  <input type="text" class="form-control" name="seats" value="<?php echo $Vehicle_seats; ?>" placeholder="Vehicle Capacity" readonly/>
                                  </div>
                            </div><hr>
                            <div class="col-md-12" style="font-size:24px!important;"> Journey Details:</div>
                            <div class="row">
                              <div class="col-md-4" style="display:flex;">
                               <h6 style="font-size:15px;margin-top:4%;">Source:</h6> <input type="text" class="form-control" name="src" value="<?php echo $src; ?>" placeholder="Source" readonly/>
                              </div>
                                <div class="col-md-4">
                                   </div>
                                  <div class="col-md-4"  style="display:flex;">
                                  <h6 style="font-size:15px;margin-top:4%;">Destination:</h6><input type="text" class="form-control" name="dest" value="<?php echo $dest; ?>" placeholder="Destination" readonly/>
                                  </div>
                                  <div class="col-md-4"  style="display:flex;"><h6 style="font-size:15px;margin-top:4%;">Journey Date:</h6>
                                <input type="text" class="form-control" name="date" value="<?php echo $date; ?>" placeholder="Date" readonly/>
                              </div>
                              <div class="col-md-4"  style="display:flex;"><h6 style="font-size:15px;margin-top:4%;">Distance(in km):</h6>
                                <input type="text" class="form-control" name="dist" value="<?php echo $distance; ?>" placeholder="Distance" readonly/>
                                   </div>
                                   <div class="col-md-4"  style="display:flex;"><h6 style="font-size:15px;margin-top:4%;">Price(in RS.):</h6>
                                  <input type="text" class="form-control" name="cost" value="<?php echo $cost; ?>" placeholder="Cost" readonly/>
                                  </div>
                            </div>
                            <hr>
                            <div class="col-md-12" style="font-size:24px!important;"> Client Details:<p style="font-size:12px;color:red;">* To be filled by the agent only.</p></div>
                            <div class="row">
                              <div class="col-md-4">
                                <input type="text" class="form-control" name="FirstName" value="" placeholder="First Name" required/>
                              </div>
                                <div class="col-md-4">
                                  <input type="text" class="form-control" name="MiddleName" value="" placeholder="Middle Name">
                                </div>
                                  <div class="col-md-4">
                                    <input type="text" class="form-control" name="LastName" value="" placeholder="Last Name" required/>
                                  </div>

                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                 
                                    <input type="text" class="form-control" style="width:100%;" name="MobileNo" value="" placeholder="Mobile No." required/>
                                  </div>
                              <div class="col-md-6">
                                <input type="text" class="form-control"  name="Email"
                                placeholder="Email" required/>
                              </div>
                            </div>
                             <div class="row">
                              <div class="col-md-4">
                                <input type="text" class="form-control" name="StateofDomicile" value="" placeholder="State of Domicile" required/>
                              </div>
                                <div class="col-md-4">
                                  <input type="text" class="form-control" name="Nationality" value="" placeholder="Nationality" required/>
                                </div>
                                <div class="col-md-4">
                                <input type="text" class="form-control" name="AadhaarNo"
                                placeholder="Aadhaar No." required/>
                              </div>
                                 

                            </div>
                             
                           

                            
                           <br>
                            <h6 class="con">Address:<hr></h6>
                            <div class="row">
                              <div class="col-md-12">
                                <textarea name="localadd" class="form-control" rows="6" cols="55" placeholder=" Local Address" required/></textarea>
                                   <br>
                              </div>
                             
                            </div>
                            <div style="display:flex;">
                            <input type="checkbox" id="checkme"/><p style="margin-top:17px;">Payment Received.</p></div>

                            <input type="submit" class="btn btn-success submit_insert" name="confirm" id="confirm" form="form1" value=" Confirm the Booking. ">
                          </form>
        <a href="MAIN.php"><button style="float:right;margin-top:-70px;" class="btn btn-outline-danger"> Cancel</button></a>
                          </div>


     </div>
     <footer style="height:100px;"></footer>
     <script>
     var checker = document.getElementById('checkme');
    var sendbtn = document.getElementById('confirm');
        sendbtn.disabled=true;
 // when unchecked or checked, run the function
    checker.onchange = function(){
    if(this.checked){
    sendbtn.disabled = false;
    } 
    else {
    sendbtn.disabled = true;
    }
        }



     </script>
 </body>
 </html>