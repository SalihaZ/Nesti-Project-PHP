<?php
if (!isset($article) || empty($article)) {
    $article = new Article();
}
?>

<br>

<!-- Main -->
<main class="container">

    <!-- Title Page -->
    <div class="row">
        <div class="col">
            <h1>Edition d'un article</h1>
            <br>
        </div>
    </div>

    <!-- Nav Location -->
    <nav>
    </nav>

    <!-- Section Top -->
    <div class="row d-flex justify-content-around mr-2">

        <!-- Article Input Informations -->
        <div class="col-5">
            <form method="POST" action="" class="application">

                <!-- Input Factory Name Article -->
                <div class="row d-flex mb-3">
                    <div class="col-12">
                        <label for="inputArticleFactoryName">Nom d'usine de l'article</label>
                        <input type="text" class="form-control" id="inputArticleFactoryName" name="articleFactoryName" value="<?= $article->getQuantity_unite_article() ?> <?= $article->getUnitArticle() ?> de <?= $article->getNameArticle() ?>">
                    </div>
                </div>

                <!--  Input Customer Name Article -->
                <div class="row d-flex mb-3">
                    <div class="col-12">
                        <label for="inputArticleCustomerName">Nom de l'article pour l'utilisateur</label>
                        <input type="text" class="form-control" id="inputArticleCustomerName" name="articleCustomerName" value="<?= $article->getCustomer_name_article() != null ? $article->getCustomer_name_article() : $article->getQuantity_unite_article() . " " . $article->getUnitArticle() ." de " . $article->getNameArticle() ?>">
                    </div>
                </div>

                <!-- Input ID Article -->
                <div class="row mb-3">
                    <div class="col-8">
                        <label for="inputArticleID">Référence</label>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" id="inputArticleID" name="articleID" value="<?= $article->getRefArticle() ?>">
                    </div>

                </div>

                <!-- Input Price Article -->
                <div class="row mb-3">
                    <div class="col-8">
                        <label for="inputArticlePrice">Prix de vente</label>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" id="inputArticlePrice" name="articlePrice" value="<?= $article->getPriceArticle() ?>">
                    </div>

                </div>

                <!-- Input Stock Article -->
                <div class="row mb-3">
                    <div class="col-8">
                        <label for="inputArticleStock">Stock</label>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" id="inputArticleStock" name="articleStock" value="<?= $article->getStockArticle()?>">
                    </div>

                </div>

                <br>

                <!-- Buttons Validation / Reset -->
                <div class="row d-flex justify-content-around">

                    <!-- Button Validation -->
                    <input class="btn btn-lg btn-validation" type="submit" value="Valider">

                    <!-- Button Reset -->
                    <button class="btn btn-lg btn-reset" type="reset">Annuler</button>
                </div>
            </form>
        </div>
        <!-- Input Picture Article -->
        <div class="col-5">
            <div class="row mb-3">
                <div class="col-12">
                    <div class="custom-file">
                        <form id="" class="application" action="" enctype="multipart/form-data" method="POST">
                            <div class="d-flex flex-column">
                                <input type="file" class="custom-file-input" id="InputFileEditArticle" name="image">

                                <!-- Button Validation Picture -->
                                <div class="row d-flex justify-content-center">
                                    <button type="button" class="btn btn-lg btn-validation">OK</button>
                                </div>

                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
</main>