<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

    input {
        border: 2px solid black;
    }

    .btn {
        padding: 8px;
        background-color: black;
        color: white;
        border-radius: 6px;
    }
</style>

<body>
    <?php
    if (isset($_POST["submit"])) {

        $target_dir = "savefile/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        $uploadOk = 1;
        $FileType = pathinfo($target_file, PATHINFO_EXTENSION);


        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        } elseif ($_FILES["file"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        } elseif ($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg" &&  $FileType != "gif" &&  $FileType != "txt" &&  $FileType != "docx" &&  $FileType != "pdf") {
            echo "Sorry, only JPG, JPEG, PNG, GIF, PDF, WORD & TXT files are allowed.";
            $uploadOk = 0;
        } else {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        Upload the file : <br>
        <input type="file" name="file" id="file"> <br> <br>
        <input class="btn" type="submit" value="Upload file" name="submit">
    </form>
</body>

</html>