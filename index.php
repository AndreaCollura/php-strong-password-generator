<?php 

    include __DIR__ . '/data/data.php';

    
    
    $password = '';
    
    if (!empty($_GET['numlength'])) {
        
        $userLength = $_GET['numlength'];
        $charaLength =  strlen($characters) - 1 ;
        for ($i = 0 ; $i < $userLength ; $i++){
            $n = rand(0, $charaLength);
            $password .= $characters[$n];
        }

    } 
    
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
    <header>
        <div class="container">
            <h1 class="text-center text-capitalize mt-5 fw-bold display-4">strong password generator</h1>
        </div>
    </header>
    <main class="container d-flex justify-content-center mt-5">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
            <input type="number"  min="1" max="32" required name="numlength">
            <button class="btn btn-warning text-uppercase">generate</button>
        </form>
    </main>


    

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./js/utility.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>