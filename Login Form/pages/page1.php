<?php
include '../header/header.php';
include '../registrationdb.php';

// $user = $_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .box {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>

<body>

    <div class="box">
        <!-- <h1>
            <?php
            // $result =  mysqli_query($conn, "SELECT Role FROM tbl_Users WHERE id = '$user' ");
            // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            // printf("%s ", $row["Role"]);

            ?>
        </h1> -->
        <br>

        <p>
            <?php
            if ($_SESSION["Full_Name"]) {
            ?>
                Welcome <?php echo $_SESSION["Full_Name"]; ?>
            <?php
            } else {
                header('Location: ../Login page/login.php');
            };

            ?>
        </p>
        <br>

        <!-- <?php


        // if ($row["Role"] == 'Student') {
        //     echo 'Add Student';
        // } elseif ($row["Role"] == 'Teacher') {
        //     echo 'Add Courses';
        // } elseif ($row["Role"] == 'HOD') {
        // }
        ?> -->

        <!-- <table>
            <tr>
                <input type="text" value="Department" name="Department">
                <input type="submit" value="Add" name="submit">
            </tr>
        </table> -->
    </div>

</body>

</html>