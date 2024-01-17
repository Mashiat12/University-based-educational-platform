<?php
include 'reg_connection.php';

if(isset($_POST['submit'])){
    $fullname= $_POST['fullname'];
    $uni= $_POST['university'];
    $department= $_POST['department'];
    $district= $_POST['district'];
    $email= $_POST['email'];
    $number= $_POST['number'];
    $pass= $_POST['password'];
    $conpass= $_POST['confirm_password']; // changed from "confirm password" to "confirm_password" to match the input name attribute
    $file= $_FILES['picture'];
    $subject= $_POST['subject'];
    $salary= $_POST['salary'];
    $rad= $_POST['gender'];

    $filename= $file['name'];
    $filepath= $file['tmp_name'];
    $fileerror=$file['error'];

    if ($pass !== $conpass) {
        echo '<script>alert("Password and Confirm Password do not match."); window.location.href="tu_reg.php";</script>';
    } else {
        $query = "SELECT * FROM `teacher` WHERE `Email` = '$email'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            echo '<script>alert("Email already exists."); window.location.href="tu_reg.php";</script>';
        } else {
            if($fileerror == 0){
                $destfile= 'upload/'.$filename;
                move_uploaded_file($filepath,$destfile);

                $insertuery="INSERT INTO `teacher`(`Full Name`, `University`, `Department`, `District`, `Email`, `Number`, `Password`, `Picture`, `Subject`, `Salary`, `Time`) VALUES ('$fullname','$uni','$department','$district','$email','$number','$pass','$destfile','$subject','$salary','$rad')";

                $query= mysqli_query($con,$insertuery);

                if($query){
                    echo '<script>alert("Registration successful."); window.location.href="tu_reg.php";</script>';
                }
                else{
                    echo '<script>alert("Registration failed."); window.location.href="tu_reg.php";</script>';
                }
            }
        }
    }
} 
else{
    echo "no button has been clicked";
}
?>
