<?php

$username="root";
$password="";
$server="localhost";
$database="web";

$con= mysqli_connect($server,$username,$password,$database);
if($con){
   echo "<script>alert('connection successfull');</script>";
}
else{
    echo "<script>alert('no connection');</script>";
    

}


?>