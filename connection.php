<?php
$username="root";
$password="";
$server="localhost";
$database="login";

$con= mysqli_connect($server,$username,$password,$database);
if($con){

?>
<script>
    alert("connection succesfull");
</script> <?php
}
?>
