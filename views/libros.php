<?php
$metaTitle = "Libros";
require_once(__DIR__ . "/../config/specialRoutes.php");
require_once __DIR__ . "/../controllers/libros.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once __DIR__ . "/../views/components/head.php"; ?>
    <script src="<?= ROOT_PATH ?>/js/books.js" defer></script>
</head>

<body>
    <?php require_once __DIR__ . "/../views/components/topbar.php"; ?>
    <section class="container my-3">
        <h1 class="text-center">Libros</h1>
        <h4 class="text-center default-subheader">Estos son los libros que recomiendo</h4>
        <hr>
        <?php if (!empty($bookList)) : ?>
            <div class="row my-3" id="bookList">
                <input type="hidden" id="listSize" name="listSize" value="<?= BOOKS_PER_PAGE ?>">
                <input type="hidden" id="page" name="page" value="1">
                <?php foreach ($bookList as $book) : ?>
                    <div class="col-md-3 col-sm-12 my-2">
                        <div class="card book-card">
                            <img src="https://kravmaganewcastle.com.au/wp-content/uploads/2017/04/default-image-620x600.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $book->title ?></h5>
                                <p class="card-text"><?= TextUtil::getFirstWords($book->description) ?></p>
                                <div class="book-btn-div">
                                    <a href="<?= ROOT_PATH ?>/libro/<?= UrlGenerator::createUrlCanonical($book->title)?>-<?=$book->id?>" class="btn btn-outline-primary">Ver libro</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="d-flex justify-content-center w-100 my-3">
                <button class="btn btn-lg btn-primary" id="loadMoreBtn">Cargar más</button>
            </div>
        <?php else : ?>
            <div class="row">
                <h5 class="text-center">No se ha encontrado nada</h5>
            </div>
        <?php endif; ?>
    </section>
    <?php require_once __DIR__ . "/../views/components/footer.php"; ?>
</body>

</html>