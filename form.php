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


    <div class="form-container jumbotron text-center">
        <h1>Registration Form</h1>
        <form action="insert.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <br>
                <input type="text" name="name" placeholder="Name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <br>
                <input type="email" name="email" placeholder="eg johndoe@mail.com">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <br>
                <input name="password" placeholder="****">
            </div>

            <div class="form-group">
                <label for="Phone">Phone No</label>
                <br>
                <input type="text" name="phone" placeholder="mobile number">
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Register">
            </div>


        </form>
    </div>
</body>

</html>