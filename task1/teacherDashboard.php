<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-warning">
    <div class="text-center mt-3">

        <h1>Teacher Records</h1>

        <table class="align-center mx-0" border="1" style="padding: 20px;color :'white'">
            <tr>
                <td>
                    <?php
                    $name = array('shayan', 'taha', 'omer', 'ali');

                    foreach ($name as $value) {
                        echo  $value . '<br>';
                    }
                    ?>
                </td>
            </tr>
        </table>


    </div>
</body>

</html>