<?php

$username="root";
$password="";
$server="localhost";
$database="web";

$con= mysqli_connect($server,$username,$password,$database);
if($con){
   echo "connection succesfull";
}
else{
    echo "No connection made" ;
    

}


?>