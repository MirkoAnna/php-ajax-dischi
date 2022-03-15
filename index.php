<?php

 include __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Dischi</title>
</head>
<body>
    
    <div class="container">

        <header>
            <div class="header">
                <i class="fa-brands fa-spotify"></i>
            </div>
        </header>

        <main>
            <div class="main">
                <div class="box-discs">
                    <?php foreach ($database as $disc) { ?>

                        <div class="disc">
                            <img src="<?php echo $disc['poster'] ?>" alt="">
                            <h3><?php echo $disc['title'] ?></h3>
                            <p><?php echo $disc['author'] ?></p>
                            <p><?php echo $disc['year'] ?></p>
                        </div>

                   <?php }; ?>
                </div>
            </div>
        </main>

    </div>
</body>
</html>