<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 - Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
</head>
<!-- <style>
    :root {
        --main-bg: #008060;
    }

    .main-bg {
        background: var(--main-bg) !important;
    }

    input:focus,
    button:focus {
        border: 1px solid var(--main-bg) !important;
        box-shadow: none !important;
    }

    .form-check-input:checked {
        background-color: var(--main-bg) !important;
        border-color: var(--main-bg) !important;
    }

    .card,
    .btn,
    input {
        border-radius: 0 !important;
    }
</style> -->

<body>
    <?php
    
    session_start();

    if(isset($_SESSION['counter'])){
        $_SESSION['counter'] +=1;
    }else{
        $_SESSION['counter']=1;
    }

    $message =" You are visit this page " .$_SESSION['counter'] ." times ";


    echo $message;
    session_destroy();


    ?>

</body>

</html>