<?php
include 'registrationdb.php';

// if (isset($_POST['submit'])) {
//     $HOD_Name = $_POST('HOD_Name');
//     $Depart_Name = $_POST('Depart_Name');
//     $password = $_POST('Password');

//     $sql = " INSERT INTO tbl_hod(HOD_Name,HOD_Dept,HOD_Password)
//      VALUES ('$HOD_Name' ,' $Depart_Name',  '$password' ) ";

//     if ($conn->query($sql) == true) {
//         echo "New record has been added successfully !";
//     } else {
//         echo "Error: " . $sql . ":-" . mysqli_error($conn);
//     }
//     mysqli_close($conn);
// }

// $sql =" INSERT INTO tbl_hod(HOD_Name,HOD_Dept,HOD_Password)
// VALUES ('Omer','Computer Engineering',4444) ";

// if($conn->query($sql)==true){
//     echo "Data insert successfully";
// }
// else{
//     echo 'Error'. $sql. "<br>".$conn->error;
// }


// if (isset($_POST['submit'])) {
//     $HOD_Name = $_POST['HOD_Name'];
//     $Depart_Name = $_POST['Depart_Name'];
//     $HOD_Password = $_POST['HOD_Password'];
//     $sql = "INSERT INTO tbl_hod (HOD_Name,HOD_Dept,HOD_Password)
//     VALUES ('$HOD_Name' ,' $Depart_Name',  '$HOD_Password' ) ";
//     if (mysqli_query($conn, $sql)) {
//         echo "New record has been added successfully !";
//     } else {
//         echo "Error: " . $sql . ":-" . mysqli_error($conn);
//     }
//     mysqli_close($conn);
// }


if (isset($_POST['submit'])) {
    $Student_Name = $_POST['Student_Name'];
    $Address = $_POST['Address'];
    $Date_of_Birth = $_POST['Date_of_Birth'];
    $Phone_Number = $_POST['Phone_Number'];
    $Date_of_Joining = $_POST['Date_of_Joining'];
    $Depart_Name = $_POST['Depart_Name'];
    $Passwords = $_POST['Passwords'];


    $sql = "INSERT INTO tbl_student (Student_Name, Address,Date_of_Birth,Phone_Number,Date_of_Joining,Depart_Name,Passwords)
    VALUES ('$Student_Name','$Address','$Date_of_Birth','$Phone_Number','$Date_of_Joining','$Depart_Name','$Passwords')";
    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
