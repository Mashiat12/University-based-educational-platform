<!DOCTYPE html>
<html lang="en">
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
        }

        div {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            color: #666;
            line-height: 1.6;
        }

        .error {
            color: #ff0000;
            font-weight: bold;
        }

        pre {
        font-family: "Courier New", monospace;
        background-color: #f5f5f5;
        padding: 10px;
        border: 1px solid #ccc;
        white-space: pre-wrap; /* Preserve line breaks */
    }
    </style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "reg_connection.php";

    if (isset($_POST["submit"])) {
        $str = $_POST["query"];
        
        $query = "SELECT * FROM outline WHERE Course_name = '$str'";
        $result = mysqli_query($con, $query);

        if ($row = mysqli_fetch_assoc($result)) {
    ?>
            <br><br><br>
            <div>
            <p><?php echo $row['Course_name']; ?></p>
                <p><?php echo "<pre>".$row['SYLLABUS']."</pre>"; ?></p>
            </div>
    <?php
        } else {
            echo "Name Does not exist";
        }

        mysqli_close($con);
    }
    ?>
</body>

</html>