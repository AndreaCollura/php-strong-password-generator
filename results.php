<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Result</title>
</head>


<body>
    <header class="py-5">
        <div class="container">
            <h1 class="text-center text-capitalize mt-5 fw-bold display-4">strong password generator</h1>
        </div>
    </header>
    <main class="container d-flex flex-column align-items-center mt-5">
        <div class="my-5 text-center">
            <h1 class="text-capitalize">your password : </h1>
            <span class="text-danger fs-1"><?php echo $_SESSION['password'] ?></span>
        </div>
        <div class="my-5">
            <button class="btn btn-success text-uppercase"><a href="index.php">Re-generate</a></button>
        </div>
    </main>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./js/utility.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>