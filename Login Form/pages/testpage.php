<?php
include '../registrationdb.php';

$result = mysqli_query($conn, "SELECT * FROM tbl_Course");

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

    <table>
        <tr>
            <td> Id</td>
            <td>Course Name</td>

        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr class="<?php if (isset($classname)) echo $classname; ?>">
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["Course_Name"]; ?></td>
                <!-- <td><button type="submit" name="submit" value="submit"> Delete</button></td> -->
                <td><a  href="Edit-process.php?id=<?php echo $row["id"]; ?>">Edit</a></td>

                <td><a href="delete-process.php?id=<?php echo $row["id"]; ?>">Delete</a></td>

            </tr>
        <?php
            $i++;
        }
        ?>
    </table>
</body>

</html>