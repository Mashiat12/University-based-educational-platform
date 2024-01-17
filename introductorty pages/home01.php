<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage01</title>
    <link rel="stylesheet" href="./home01 style.css">
</head>
<body>
    <div class="container">
        <nav>
            <div class="nav-logo">
                <img src="./logo.png">
            </div>
            <div class="nav-links">
                <a href="./About Us.php" class="bto">ABOUT US</a>
                <div>
                    <a href="../buttons/login_op.php" class="btm">LOGIN</a>
                    <a href="../buttons/reg_op.php" class="btn">SIGN UP</a>
                </div>
            </div>
        </nav>
        <div class="content">
            <h1>An Educated Mind  <br> Can Teach Many</h1>
            <form action="search_result.php" method="POST">
            <div class="search-box">
                    <input type="text" id="query" name="query" placeholder="Search for any course">
                    <button type="submit" name="submit"><img src="./search.png"></button>
                </div>
            </form>
            <p>Millions of courses to search from</p>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="frontend-script.js"></script>
</body>
</html>
