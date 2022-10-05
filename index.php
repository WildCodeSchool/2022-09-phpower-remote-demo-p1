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
    <header>
        <h1>Hello World !!!</h1>
    </header>
    <main id="main">
        <section id="about-us">
            <h2>About us</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non labore quam porro magnam recusandae fugiat
                neque sit inventore ea dicta ipsam facilis veniam obcaecati fugit deserunt est minus, nulla sequi.
                Cumque doloribus temporibus fugit aliquid odio quia consectetur animi neque delectus dicta inventore,
                numquam, assumenda nam ratione magni aliquam distinctio? Provident, consequuntur magnam id accusamus
                iusto sunt asperiores corporis voluptas.
            </p>
        </section>
        <section class="featured-posts" id="featured-posts">
            <h2>Featured posts</h2>
            <?php
            $articles = [
                ["id" => 1, "title" => "PHP c'est top"],
                ["id" => 2, "title" => "Vive les include"],
                ["id" => 3, "title" => "Vive la Bretagne"],
                ["id" => 4, "title" => "PHP c'est top"],
                ["id" => 5, "title" => "PHP c'est top"],
            ];
            ?>
            <?php foreach ($articles as $article) : ?>
                <article>
                    <h1><?=$article["title"]?></h1>
                    <a href="/article.php?id=<?=$article["id"]?>">read</a>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
    <?php include "_footer.php" ?>
</body>

</html>