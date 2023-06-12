<!DOCTYPE html>
<html>
<head>
    <title>Docker Compose</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #666;
        }

        .section {
            background-color: #f5f5f5;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="section">
        <h1>Docker Compose Tutorial</h1>
    </div>

    <div class="section">
        <h2>Running Multi-Container Application</h2>
        <?php
        $dbhost = "backend-db";
        $dbuser = "root";
        $dbpassword = "root";
        $dbname = "Mobiles";
        $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

        if ($connection) {
            echo "Connection Established";
        } else {
            echo "There is some Error";
        }

        echo "<br>";
        echo "Welcome!!";
        echo "<br>";

        $q = "SELECT * FROM products";
        $result = mysqli_query($connection, $q) or die(mysqli_error($connection));

        echo "<br>";
        echo "Data Fetched from the Database";
        echo "<ul>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<li>{$row['Id']} - {$row['Model']} - {$row['Quantity']}</li>";
        }
        echo "</ul>";

        // Code to fetch data from the Python Microservice
        echo "<br>";
        echo "Data Fetched by Python Microservice";
        echo "<br>";
        echo "<ul>";
        $url = 'http://pythonapp:5000/';
        $data = file_get_contents($url);
        $products = json_decode($data, true);

        foreach ($products as $product) {
            echo "<li>{$product['name']} - {$product['country']}</li>";
        }
        echo "</ul>";
        ?>
    </div>
</body>
</html>
