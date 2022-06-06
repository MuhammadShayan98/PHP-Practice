<?php
include 'registrationdb.php';


if (isset($_POST['submit'])) {
    header("Location: loginform.php");

    $Role_id = $_POST['Role_id'];
    $User_Name = $_POST['User_Name'];
    $User_Password = $_POST['User_Password'];
    $Full_Name = $_POST['Full_Name'];
    $Address = $_POST['Address'];
    $Phone_Number = $_POST['Phone_Number'];
    $Date_of_Joining = $_POST['Date_of_Joining'];
    $Department = $_POST['Department'];
    $Courses = $_POST['Courses'];


    $sql = "INSERT INTO tbl_Users (Role_id,User_Name,User_Password,Full_Name,
     Address,Phone_Number,Date_of_Joining,Department,Courses)
    VALUES ('$Role_id','$User_Name','$User_Password','$Full_Name','$Address','$Phone_Number',
    '$Date_of_Joining','$Department','$Courses')";

    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }

    // mysqli_close($conn);
}

