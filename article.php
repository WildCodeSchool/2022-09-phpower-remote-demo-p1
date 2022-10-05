<?php
$id = $_GET["id"];
$file = "./data/content-$id.php";
if (!file_exists($file)) {
    header("HTTP/1 404 Not found");
    die("Page not found");
}

include $file;
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
        <h1>
            <?= $title ?>
        </h1>
        <img src="<?= $img ?>" alt="">

        <?= $body ?>
    </main>
    <?php include "_footer.php" ?>
</body>

</html>