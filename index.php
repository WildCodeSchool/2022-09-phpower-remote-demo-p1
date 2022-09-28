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
            
            <article>
                <h1>Article 1</h1>
                <a href="/article.php?id=1">read</a>
            </article>
            <article>
                <h1>Article 2</h1>
                <a href="/article.php?id=2">read</a>
            </article>
            <article>
                <h1>Article 3</h1>
                <a href="/article.php?id=3">read</a>
            </article>
            <article>
                <h1>Article 4</h1>
                <a href="/article.php?id=4">read</a>
            </article>
            <article>
                <h1>Article 5</h1>
                <a href="/article.php?id=5">read</a>
            </article>
            
        </section>
    </main>
    <?php include "_footer.php" ?>
</body>

</html>