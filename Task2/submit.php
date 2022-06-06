<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    div {
        border: 2px solid black;
        width: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        align-content: center;
        margin: auto;
    }
</style>

<body>
    <div>
        <p>First Name : <?php echo $_POST["fname"]; ?> <br></p>
        <p>Last Name : <?php echo $_POST["lname"]; ?> <br> </p>
        <p>Company Name : <?php echo $_POST["company"]; ?> <br> </p>
        <p>Email : <?php echo $_POST["email"]; ?> <br> </p>
        <p>Password : <?php echo $_POST["password"]; ?> <br> </p>
    </div>


</body>

</html>