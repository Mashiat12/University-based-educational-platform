<?php
session_start();
$user_id = $_SESSION["user"];
require_once('reg_connection.php');

$query = "SELECT * FROM student LIMIT 3 ";
$result = mysqli_query($con, $query);

// Fetch the data into an associative array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dash_style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">E-learning</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="../edit profile/edit_stu.php">
                <i class="uil uil-edit"></i>
                    <span class="link-name">Edit Profile</span>
                </a></li>
                <li><a href="../Fetch data/fetch_stu.php">
                <i class="uil uil-comment-alt-question"></i>
                    <span class="link-name">Tutors</span>
                </a></li>
                <li><a href="../show profile/user_show_student.php">
                    
                    <span class="link-name">User Profile</span>
                </a></li>
                <li><a href="#">
                    
                    <span class="link-name"></span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search your tutor">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                    <i class="uil uil-book-reader"></i>
                        <span class="text">Total Students</span>
                        <?php
                        $sql = "SELECT * FROM student" ;
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            $row = mysqli_num_rows($result);
                            echo "<span class='number'>$row</span>";
                        }
                        mysqli_free_result($result);
                        ?>
                        

                    </div>
                    <div class="box box2">
                    <i class="uil uil-star"></i>
                        <span class="text">Total Rating Provided</span><?php
                        $sql = "SELECT * FROM outline" ;
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            $row = mysqli_num_rows($result);
                            echo "<span class='number'>$row</span>";
                        }
                        mysqli_free_result($result);
                        ?>
                        
                        
                    </div>
                    <div class="box box3">
                    <i class="uil uil-presentation-line"></i>
                        <span class="text">Total Teacher</span>
                        <?php
                        $sql = "SELECT * FROM teacher" ;
                        $result = mysqli_query($con, $sql);
                        if ($result) {
                            $row = mysqli_num_rows($result);
                            echo "<span class='number'>$row</span>";
                        }
                        mysqli_free_result($result);
                        ?>
                       
                    </div>
                </div>
            </div>

            <div class="activity">
            <div class="title">
                <i class="uil uil-clock-three"></i>
                <span class="text">Recently Joined</span>
            </div>

            <div class="activity-data">
                <?php foreach ($data as $row): ?>
                    <div class="data">
                        <p><span class="data-title">Name:</span> <?php echo $row['Name']; ?></p>
                        <p><span class="data-title">Email:</span> <?php echo $row['Email']; ?></p>
                        <p><span class="data-title">University:</span> <?php echo $row['University']; ?></p>
                        <p><span class="data-title">Location:</span> <?php echo $row['District']; ?></p>
                        <p><span class="data-title">Time:</span> <?php echo $row['Time']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

    <script src="script.js"></script>
</body>
</html>