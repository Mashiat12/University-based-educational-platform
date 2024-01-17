<?php

session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
}
$user_id = $_SESSION["user"];

require_once("reg_connection.php");

$user_query = "SELECT * FROM student WHERE Email = '$user_id'";
$user_result = mysqli_query($con, $user_query);
while ($user_row = mysqli_fetch_assoc($user_result)){
    $user_sub = $user_row['Subject'];
}


$query = "SELECT * FROM teacher WHERE Subject = '$user_sub'";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="fetch_style.css" />
    <title>View Records</title>
</head>

<body class="bg-dark">

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <th class="name">Name</th>
                            <th class="subject">Subject</th>
                            <th class="salary">Salary</th>
                            <th class="number">Time</th>
                            <th class="number">Number</th>
                            

                        </tr>

                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                            $UserID = $row['Full Name'];
                            $UserName = $row['Subject'];
                            $UserEmail = $row['Salary'];
                            $UserAge = $row['Time'];
                            $UserNum = $row['Number'];
                        ?>
                            <tr>
                                <td><?php echo $UserID ?></td>
                                <td><?php echo $UserName ?></td>
                                <td><?php echo $UserEmail ?></td>
                                <td><?php echo $UserAge ?></td>
                                <td><?php echo $UserNum ?></td>
                            </tr>
                        <?php
                        }
                        ?>


                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>