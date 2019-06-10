
<?php

if(isset($_GET['submit'])){
 $city1=$_GET['src'];
 $city2=$_GET['dest'];
 $pg_link = "https://www.distance24.org/route.json?stops=$city1|$city2";
    $pg = file_get_contents($pg_link);
  $pg_array = json_decode($pg,true);

    //  $pg_array = json_decode($pg_array);
    //  $pg_fl= JSON_decode($pg);
    // $pg_json= JSON.stringify($pg);
    

// print_r($pg[0][distance]);
$distance=$pg_array['distances'][0];}
// print_r($pg_array['distances']);//array element access
    // echo $pg;
//    echo $pg_array;
// //    $dist = $pg[0];
//    echo $pg_json;
//   echo $pg_fl;
// if(isset($_GET['button'])){
// 	$f=$_GET['button'];$a=$_SESSION['src'];
// 	echo $f.$a;
// }

?>
