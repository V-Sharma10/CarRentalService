


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vehicel Panel | Toxotes Rental Service</title>
    <link rel="icon" href="img/carlogo3.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
  <li class="tabs"><a  href="adminpanel.php">View Vehicles</a></li>
  <li class="tabs"><a class="active" href="addremovevehicles.php">Add Vehicles</a></li>
  
   <li class="tabs" style="float:right; background-color: orange;">
        <a href="MAIN.php" class="nav-link">Home &nbsp;&nbsp;</a>
        </li>
</ul>


<form class="insert" action="insertvehicle.php" method="POST"  enctype="multipart/form-data" style="margin-top:2%;">
                            <div class="row">
                                 <div class="col-md-12" style="font-size:24px!important;">       Vehicle Details: </div>
                                 <div class="col-md-4"  style="display:flex;">
                                <!-- <input type="text" class="form-control" name="vehicleid" value="" placeholder="Vehicle ID" required/> -->
                              </div>
                                <div class="col-md-4">
                                 
                                </div>
                                  <div class="col-md-4">
                                    
                                  </div>
                                  <div class="col-md-4"  style="display:flex;">
                                <input type="text" class="form-control" name="vehiclename" value="" placeholder="Vehicle Name" required/>
                              </div>
                              <div class="col-md-4"  style="display:flex;">
                                <input type="text" class="form-control" name="type" value="" placeholder="Type" required/>
                                </div>
                                <div class="col-md-4"  style="display:flex;">
                                  <input type="text" class="form-control" name="seats" value="" placeholder="Vehicle Capacity" required/>
                                  </div>
                            
                                  <div class="col-md-4"  style="display:flex;">
                                 <input type="text" class="form-control" name="city" value="" placeholder="City" required/>
                                  </div>
                                  <div class="col-md-4"  style="display:flex;">
                                <!-- <input type="text" class="form-control" name="date" value="" placeholder="Available Date and Time" required/> -->
                              </div>
                              <div class="col-md-4"  style="display:flex;"></div> 
                              
                              
                            <div class="row">
                              <div class="col-md-6">

                                <input type="file" name="ImageUpload" value="" required></div>
                            </div>
                            <div class="col-md-6">


                            </div>

                              
                              <div class="col-md-4"  style="display:flex;"></div>
                              <div class="col-md-4" style="align-items:center;width:100%;">
                            <button class="btn btn-success" type="submit">ADD</button></div>
                            <div class="col-md-4"  style="display:flex;"></div>
                          </form>







</body>
</html>