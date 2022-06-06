<?php

include '../header/header.php';
include '../registrationdb.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<body>
    <div align='center'>
        <h1>
            HOD
        </h1>
        <br>
        <h3>
            <?php
            if ($_SESSION["Full_Name"]) {
            ?>
                Welcome <?php echo $_SESSION["Full_Name"]; ?>
            <?php
            } else {
                header('Location: ../Login page/login.php');
            };

            ?>
        </h3>
        <br>

        <?php

        $table = "<table border = '1'><tr><th>Teacher_Name</th><th>Course_Name</th><th>Department_Name</th>
        <th>View</th></tr>";

        $result = mysqli_query($conn, "SELECT tbl_teacher.`Teacher_Name`, tbl_Course.`Course_Name` ,tbl_users.`Department`
        FROM ((tbl_teacher
        INNER JOIN tbl_Course ON tbl_teacher.Course_id= tbl_Course.id)
        INNER JOIN tbl_users ON tbl_teacher.Course_id= tbl_users.id);
        
         ");
        // For each row, add the results to a table string using concatenate (.=)
        while ($row = $result->fetch_assoc()) {
            $table .= "<tr>";
            $table .= "<td>{$row['Teacher_Name']}</td>";
            $table .= "<td>{$row['Course_Name']}</td>";
            $table .= "<td>{$row['Department']}</td>";
            $table .=  "<td > <a type='button' class='btn btn-primary'  href='page3ctrl.php?id'>" . 'View'." </a> </td>";
            $table .= "</tr>";
        }
        $table .= "</table";
        print $table;
        ?>

    </div>
</body>

</html>