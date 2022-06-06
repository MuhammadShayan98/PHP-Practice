<?php
include_once '../registrationdb.php';

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE tbl_Course set  Course_Name='" . $_POST['Course_Name'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM tbl_Course WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<!-- <a href="retrieve.php">Employee List</a> -->

</div>

id:<br>
<input type="text" name="id" class="id" value="<?php echo $row['id']; ?>">
<br>
Course Name:<br>
<input type="text" name="Course_Name" class="Course_Name" value="<?php echo $row['Course_Name']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>