<?php
include '../registrationdb.php';
$result = mysqli_query($conn, "SELECT * FROM tbl_student ");

?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
    <table>
        <tr>
            <td>Sl No</td>
            <td>First Name</td>
           
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["Student_Name"]; ?></td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </table>
<?php
} else {
    echo "No result found";
}
?>