<?php
$metaTitle = "Libros";
require_once(__DIR__ . "/../config/specialRoutes.php");
require_once __DIR__ . "/../controllers/libros.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once __DIR__ . "/../views/components/head.php"; ?>
    <script src="<?= ROOT_PATH ?>/js/books.js?v=1.1.3" defer></script>
</head>

<body>
    <?php require_once __DIR__ . "/../views/components/topbar.php"; ?>
    <section class="container my-3">
        <h1 class="text-center">Libros recomendados</h1>
        <h4 class="text-center default-subheader">Estos son los libros que recomiendo</h4>
        <hr>
        <div class="row">
            <div class="col-md-4 offset-md-8 col-sm-12">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Buscar:</span>
                    <input type="search" class="form-control" name="searchBook" id="searchBook">
                </div>
            </div>
        </div>
        <input type="hidden" id="listSize" name="listSize" value="<?= BOOKS_PER_PAGE ?>">
        <input type="hidden" id="page" name="page" value="1">
        <?php if (!empty($bookList)) : ?>
            <div class="row my-3" id="bookList">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <?php foreach ($bookList as $book) : ?>
                            <div class="col-md-4 col-sm-12 my-2">
                                <div class="card book-card">
                                    <img src="<?= $book->image ?>" onerror="this.src = 'https://kravmaganewcastle.com.au/wp-content/uploads/2017/04/default-image-620x600.jpg';return true;" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $book->title ?></h5>
                                        <p class="card-text"><?= TextUtil::getFirstWords($book->description) ?></p>
                                        <div class="book-btn-div">
                                            <a href="<?= ROOT_PATH ?>/libro/<?= UrlGenerator::createUrlCanonical($book->title) ?>-<?= $book->id ?>" class="btn btn-outline-primary">Ver libro</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Categorías
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if (!empty($categoryList)) : ?>
                                <?php foreach ($categoryList as $category) : ?>
                                    <li class="list-group-item"><a href="<?= ROOT_PATH ?>/libros/<?= UrlGenerator::createUrlCanonical($category->name) ?>-<?= $category->id ?>"><?= $category->name ?></a></li>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <li class="list-group-item">No hay categorías</li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
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