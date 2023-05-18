<?php
require_once __DIR__ . "/Database/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolpet</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Container -->
    <div class="container">
        <!-- Row -->
        <div class="row row-cols-3 g-5">
            <?php foreach ($animals as $key => $animal) {
                include __DIR__ . "/Partials/card.php";
            } ?>
            <!-- Accessori -->
            <?php foreach ($accessori as $key => $accessorio) { ?>
                <!-- Column -->
                <div class="col">
                    <!-- Card -->
                    <div class="card h-100">
                        <div class="card-body">
                            <h3><?php echo $accessorio->nome ?></h3>
                            <div class="colore"><?php echo $accessorio->getColore() ?></div>
                            <div class="eta"><?php echo $accessorio->getEta() ?></div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Column -->
            <?php } ?>
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
</body>

</html>