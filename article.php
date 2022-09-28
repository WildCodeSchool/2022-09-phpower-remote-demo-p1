<?php
$id = $_GET['id'];
include "./data/article-$id.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop HTML/CSS Basics</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <?php include "_nav.php" ?>
    <main>
        <img src="<?=$img?>" alt="">
        <h1>
            <?=$title?>
        </h1>
        <p>
            <?=$body?>
        </p>
    </main>
    <?php include "_footer.php" ?>
</body>

</html>