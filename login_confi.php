<?php
session_start();
$conn= mysqli_connect('localhost','root','','carrental');
if(isset($_POST["login"])){

$user=$_POST['userid'];
$password=$_POST['password'];
$_SESSION['agentid']=$user;

$q="select * from agentlogin where UserId='$user' and Password='$password' ";
$jk= mysqli_query($conn,$q);

$num=mysqli_num_rows($jk);
// echo $num."TTTT";
if($num)
{
	while($row=mysqli_fetch_array($jk)){
		$f=$row['Name'];$_SESSION['agentname']=$f;
		$f=$row['City'];$_SESSION['agentcity']=$f;
 }
 	
    
    $_SESSION['agentid']=$user;
    echo "<script type=\"text/javascript\">".
    	 "alert('Login Successful');".
    	 "window.location='MAIN.php';".
    	 "</script>";



}
else {
	echo "<script type=\"text/javascript\">".
    	 "alert('Login Unsuccessful');".
    	 "window.location='index.php';".
    	 "</script>";
}
}
?>