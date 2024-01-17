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
                <li><a href="#">
                <i class="uil uil-edit"></i>
                    <span class="link-name">Edit Profile</span>
                </a></li>
                <li><a href="#">
                <i class="uil uil-comment-alt-question"></i>
                    <span class="link-name">Discussion Forum</span>
                </a></li>
                <li><a href="#">
                <i class="uil uil-browser"></i>
                    <span class="link-name">Resources</span>
                </a></li>
                <li><a href="#">
                    
                    <span class="link-name"></span>
                </a></li>
                <li><a href="#">
                    
                    <span class="link-name"></span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
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
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                    <i class="uil uil-star"></i>
                        <span class="text">Total Rating Provided</span>
                        <span class="number">17</span>
                    </div>
                    <div class="box box3">
                    <i class="uil uil-presentation-line"></i>
                        <span class="text">Total Teacher</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recently Joined</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Mashiat Tabassum Khan</span>
                        <span class="data-list">Md Mahir Musleh Siam</span>
                        
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">abc@gmail.com</span>
                        <span class="data-list">mahir.siam024@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">University</span>
                        <span class="data-list">Jagannath University</span>
                        <span class="data-list">Jagannath University</span>
                       
                    </div>
                    <div class="data type">
                        <span class="data-title">Location</span>
                        <span class="data-list">Dhaka</span>
                        <span class="data-list">Dhaka</span>
                    
                    </div>
                    <div class="data status">
                        <span class="data-title">Time</span>
                        <span class="data-list">12am-5am</span> 
                        <span class="data-list">6am-3pm</span>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>