<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #3b3b3b;
        }

        .box {
            margin: auto;
        }


        form {
            background-color: white;
            padding: 50px;
            border-radius: 8px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == "shayan@gmail.com" && $password == "1234") {
            header('location:teacherDashboard.php');
        }
        if ($email == "abc@gmail.com" && $password == "12345") {
            header('location:studentDashboard.php');
        }
    }
    ?>
    <div class="box d-flex justify-content-center mt-5 ">
        <form class="align-item-center" method="post">

            <h3 class="text-center">Login </h3> <br>

            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email"> <br>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label> <br>
                <input type="password" class="form-control" name="password">
            </div>

            <button name="submit" type="submit" class="btn btn-primary p-2 w-100">Login</button>
        </form>
    </div>

</body>

</html>