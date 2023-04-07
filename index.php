<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$con = mysqli_init();
mysqli_ssl_set($con, NULL, NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
$conn = mysqli_real_connect($con, "milijonar.mysql.database.azure.com", "milijonar_koda4", "Koda1234!", "test", 3306, MYSQLI_CLIENT_SSL);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<body>
    test
</body>

</html>