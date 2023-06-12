<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker Compose</title>
</head>
<body>
    <h1>Docker Compose Tutorial</h1>
    <h2>Running Multi-Container Application</h2>
    <?php
        $dbhost = "backend";
        $dbuser = "root";
        $dbpassword = "root";
        $dbname = "mysql";

        $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

        if ($connection) {
            echo "Connection Established";
        } else {
            echo "There is some Error";
        }
        echo "Welcome Again!";

        echo "<br>"

        ?>
</body>
</html>