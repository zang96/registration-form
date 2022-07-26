<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php

    require './database/db.php';

    if (isset($_POST['submit'])) {
        $name        = $_POST['name'];
        $email       = $_POST['email'];
        $password    = $_POST['password'];
        $phoneNumber = $_POST['phone'];

        $sql = "INSERT INTO users (name, email, password, phone)
    VALUES ('$name', '$email', '$password', '$phoneNumber')";

        if (mysqli_query($conn, $sql)) {
            echo '<h2 class="success text-center alert alert-success">Registration Successful !!!</h2>';
        } else echo '<h2 class="failed text-center alert alert-danger">Registration failed !!!</h2>' . mysqli_error($conn);
    }
    ?>
</body>

</html>