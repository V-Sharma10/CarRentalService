
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Agents | Toxotes Rental Service</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="icon" href="img/carlogo3.png">
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
  background-color: #4CAF50;
}
   

    
    </style>
</head>
<body>
<ul class="tab2">
  <li class="tabs"><a href="ouragents.php">ALL AGENTS</a></li>
  <li class="tabs"><a  class="active" href="agentsearchby.php">Search by City  </a></li>
 
   <li class="tabs" style="float:right; background-color: orange;">
        <a href="MAIN.php" class="nav-link">Home &nbsp;&nbsp;</a>
        </li>
</ul>
    <div class="container"><br>
    <center><h1 style="font-size:40px;">Our Dedicated Agents</h1></center><br>

    <form method="GET"><div style="display:flex;" class="text-justify;">
    
    <input type="search" class="form-control inputID" name="searchbar" style="width:50%;" placeholder="Search Agents by City " required> 
    <button type="submit" name="submitbtn" style="width:10%;margin-left:10%;" class="btn btn-info">Search</button></div>
    
    
    <br>
    
    </form>

    
<?php
session_start();

$conn= mysqli_connect('localhost','root','','carrental');
if(isset($_GET['submitbtn'])){

$city=$_GET['searchbar'];

$q="select * from agentlogin where City like'%$city%'";

$jk= mysqli_query($conn,$q);
$num = mysqli_num_rows($jk);
// echo $num;
if($num!=0){
    echo "<hr><h5 style=\"color:blue;\">Showing results for City : $city.</h5><hr>";
}
while($row=mysqli_fetch_array($jk)){


$agentname=$row['Name'];
$agentid=$row['UserId'];
$agentcity=$row['City'];
echo "
                    <br>
                  <div class=\"card col-md-4\" style=\";border:1px solid black;padding:15px;margin:15px;\" >
                      
                      <div class=\"card-body \">
                      <center>
                          <img src=\"img/img.jpg\" alt=\"John\" style=\"width:100px;\" height=\"px\">
                          <h1>$agentname</h1>
                          <p >Id:$agentid.</p>
                          <p>Count</p>
                          <p>City:&nbsp; $agentcity.</p>
                          </center></div>
                    </div>
          
          

";
}
}
?>
</div>

   
    <script>
$('.inputID').keyup(function(){
    this.value = this.value.toUpperCase();
});
</script>
</body>
</html>