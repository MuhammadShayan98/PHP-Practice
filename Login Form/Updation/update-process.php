<?php
include '../registrationdb.php';

$user = $_SESSION["id"];

if (isset($_POST['submit'])) {

    $sql = "UPDATE tbl_Users SET User_Name='$_POST[User_Name]',
     User_Password='$_POST[User_Password]',Full_Name='$_POST[Full_Name]',Address ='$_POST[Address]',Phone_Number ='$_POST[Phone_Number]',Department='$_POST[Department]',Courses='$_POST[Courses]' WHERE id = '$user'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script type='text/javascript'> alert('Data updated'); </script>";
    } else {

        echo "<script type='text/javascript'> alert('not updated'); </script>";
    }
}
