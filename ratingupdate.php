<?php

//$id = isset($_GET['id']) ? $_GET['id'] : '';
$id= $_REQUEST["id"];
//$rate = isset($_GET['a']) ? $_GET['a'] : '';
$rate= $_REQUEST["r"];
//$comment = isset($_GET['c']) ? $_GET['c'] : '';
$comment= $_REQUEST["c"];
$db="dbtrs";
$servername = "localhost";
$username = "root";
$password = "";
//echo $comment;
$conn = mysqli_connect($servername, $username, $password,$db);
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

      
    $sql="SELECT count FROM rating WHERE id=".$id;
    $r1 = mysqli_query($conn, $sql);
    $count1 = mysqli_fetch_assoc($r1);
    $count=$count1['count'];
    $count=$count+1;
    //echo "$count";
    $sql1="SELECT sum FROM rating WHERE id=".$id;
    $r2=mysqli_query($conn,$sql1);
    $res= mysqli_fetch_assoc($r2);
    $sum = $res['sum'];
    //echo "$sum";
    $rating_new = ($sum+$rate)/$count;
    //echo "$rating_new";
    $sum_update=($sum+$rate);
    //echo "$sum_update";
    //$up="UPDATE faculty SET sum=".'$sum_update'." comment=".'$comment'." count=".'$count'." rating=".'$rating_new'." where id=".'$id'; 
        $up= "UPDATE rating SET count=".$count." where id=".$id;   
   $r3=mysqli_query($conn,$up);
   $up1= "UPDATE rating SET sum=".$sum_update." where id=".$id; 
   $r4=mysqli_query($conn,$up1);
   
   $up2="UPDATE rating SET  rating=".$rating_new." where id=".$id; 
    $r5=mysqli_query($conn,$up2);
    echo "Done";
    $query="INSERT INTO `comment`(`ID`, `comment`) values('".$id."','".$comment."')";
    $r6=mysqli_query($conn,$query);
header("location:cse.php");
?>