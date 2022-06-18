<?php require_once __DIR__ . "/../controllers/libro.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once __DIR__ . "/../views/components/head.php"; ?>
</head>

<body>
    <?php require_once __DIR__ . "/../views/components/topbar.php"; ?>
    <section class="container my-3">
        <h1 class="text-center"><?= $book->getAttribute('title') ?></h1>
        <h4 class="text-center default-subheader"><?= $book->getAttribute('author') ?></h4>
        <hr>
        <p class="book-descri text-justify my-3">
            <img src="<?= $book->getAttribute('image') ?>" onerror="this.src = 'https://kravmaganewcastle.com.au/wp-content/uploads/2017/04/default-image-620x600.jpg';return true;" alt="Portada del libro <?= $book->getAttribute('title') ?> de <?= $book->getAttribute('author') ?>">
            <?= nl2br($book->getAttribute('description')) ?>
        </p>
        <div class="d-flex w-100 justify-content-center">
            <a href="<?= $book->getAttribute('linkToBuy') ?>" class="btn btn-lg btn-primary" target="_blank" rel="nofollow">¡Cómpralo ahora!</a>
        </div>
    </section>
    <?php require_once __DIR__ . "/../views/components/footer.php"; ?>
</body>

</html>