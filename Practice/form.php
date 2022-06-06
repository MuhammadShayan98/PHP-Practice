<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    p {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>

<body>
    <p>First Name : <?php echo $_POST["fname"]; ?> <br></p>
    <p>Last Name : <?php echo $_POST["lname"]; ?> <br> </p>
    <p>Password : <?php echo $_POST["password"]; ?> <br> </p>
    <p>Email : <?php echo $_POST["email"]; ?> <br> </p>

</body>

</html>