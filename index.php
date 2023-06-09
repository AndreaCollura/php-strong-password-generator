<?php
session_start();

include __DIR__ . '/data/data.php';

include __DIR__ . '/partials/functions.php';

if (!empty($_GET['numlength'])) {

    $password = passwordGen($characters);
    $_SESSION['password'] = $password;

    header('Location: ./results.php');
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>index</title>
</head>


<body>
    <header class="py-5">
        <div class="container">
            <h1 class="text-center text-capitalize mt-5 fw-bold display-4">strong password generator</h1>
        </div>
    </header>
    <main class="container d-flex flex-column align-items-center my-5">
        <div class="mb-3">
            <h4>Choose your password length...</h4>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            <input type="number" min="8" max="32" required name="numlength">
            <button class="btn btn-warning text-uppercase">generate</button>
        </form>
    </main>




    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./js/utility.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>