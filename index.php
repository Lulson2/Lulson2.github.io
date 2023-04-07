<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Database connection details
    $host = "localhost"; //"sql303.epizy.com";
    $username = "root"; //"epiz_33963503";
    $password = ""; //"0XYpGgygXZVRG";
    $dbname = "milijonar"; //"epiz_33963503_milijonar";
    
    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch users from database
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    // Display users in a table
    if ($result->num_rows > 0) {
        echo "<table id='users'><thead><tr><th>Name</th><th>Email</th><th>Role</th></tr></thead><tbody>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["username"] . "</td><td>" . $row["trophies"] . "</td><td>" . $row["streak"] . "</td></tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "No users found.";
    }

    $conn->close();
    ?>
</body>

</html>