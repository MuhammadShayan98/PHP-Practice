<?php
include '../registrationdb.php';

if (isset($_POST['submit'])) {

    $Courses = $_POST['Courses'];

    $sql = "INSERT INTO tbl_Users (Courses)
    VALUES ('$Courses')";

    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }

    // mysqli_close($conn);


}
