<?php
include '../header/header.php';
include '../registrationdb.php';
include './update-process.php';

$user = $_SESSION["id"];
$sql = "SELECT * FROM tbl_Users where id = '$user' ";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>

<head>
    <title> Update Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    table {
        margin: 0 auto;
        font-size: large;
        border: 1px solid black;
    }

    h1 {
        text-align: center;
        color: #006600;
        font-size: xx-large;
        font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
    }

    td {
        background-color: #E4F5D4;
        border: 1px solid black;
    }

    th,
    td {
        font-weight: bold;
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    td {
        font-weight: lighter;
    }
    .button{
        padding: 8px;
        background-color: #006600;
        color: white;
        width: 27%;
        border-radius: 7px;
    }
</style>
</head>

<body>
    <section>

        <h1>Update Form</h1>
        <br>
        <form action="" method="post">
            <?php
            print "<table border cellpadding=3>";
            while ($info = mysqli_fetch_array($result)) {

                print "<tr>";
                print '<th>User_Name:</th> <td><input type="text" name="User_Name" value="' . $info['User_Name'] . ' "/></td></tr>';
                print '<th>User_Password:</th> <td><input type="text" name="User_Password" value="' . $info['User_Password'] . ' "/></td></tr>';
                print '<th>Full_Name:</th> <td><input type="text" name="Full_Name" value="' . $info['Full_Name'] . ' "/></td></tr>';
                print '<th>Address:</th> <td><input type="text" name="Address" value="' . $info['Address'] . ' "/></td></tr>';
                print '<th>Phone Number:</th> <td><input type="text" name="Phone_Number" value="' . $info['Phone_Number'] . ' "/></td></tr>';
                print '<th>Department Name:</th> <td><input type="text" name="Department" value="' . $info['Department'] . ' "/></td></tr>';
                print '<th>Course Name:</th> <td><input type="text" name="Courses" value="' . $info['Courses'] . ' "/></td></tr>';

            }

            print "</table>";
            ?>
            <br>
            <div style="display:flex;justify-content:center;"> <input class="button" type="submit" value="Update" name="submit"></div>
        </form>
    </section>
</body>

</html>