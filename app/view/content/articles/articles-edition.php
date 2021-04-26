<?php
if (!isset($article) || empty($article)) {
    $article = new Article();
}
?>

<!-- Main -->
<main class="container">

    <!-- Nav Location -->
    <div class="row mt-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>articles" class="bc">Articles</a></li>
                <li class="breadcrumb-item org" aria-current="page">Edition</li>
            </ol>
        </nav>
    </div>

    <!-- Alertes -->
    <!-- For edition article -->
    <?php
    if (isset($_SESSION['articleUpdated'])) {
    ?>
        <div class="alert alert-success" role="alert" onclick="removeAlert(this)">
            L'article a bien été mis à jour.
        </div>
    <?php }
    unset($_SESSION['articleUpdated']); ?>

    <!-- Title Page -->
    <div class="row">
        <div class="col">
            <h1>Edition d'un article</h1>
            <br>
        </div>
    </div>

    <!-- Section Top -->
    <div class="row d-flex justify-content-around mr-2">

        <!-- Article Input Informations -->
        <div class="col-4">
            <form method="POST" action="" class="application">

                <!-- Input Factory Name Article -->
                <div class="row d-flex mb-3">
                    <div class="col-12">
                        <label for="inputArticleFactoryName">Nom d'usine</label>
                        <input type="text" class="form-control" id="inputArticleFactoryName" name="articleFactoryName" value="<?= $article->getQuantity_unite_article() ?> <?= $article->getUnitArticle() ?> de <?= $article->getNameProduct() ?>" disabled>
                    </div>
                </div>

                <!--  Input Customer Name Article -->
                <div class="row d-flex mb-3">
                    <div class="col-12">
                        <label for="inputArticleCustomerName">Nom clients</label>
                        <input type="text" class="form-control" id="inputArticleCustomerName" name="articleCustomerName" value="<?= $article->getCustomer_name_article() != null ? $article->getCustomer_name_article() : $article->getQuantity_unite_article() . " " . $article->getUnitArticle() . " de " . $article->getNameProduct() ?>">
                    </div>
                </div>

                <!-- Input ID Article -->
                <div class="row mb-3 d-flex justify-content-between">
                    <div class="col-6">
                        <label for="inputArticleID">Référence</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" id="inputArticleID" name="articleID" value="<?= $article->getRefArticle() ?>" disabled>
                    </div>

                </div>

                <!-- Input Price Article -->
                <div class="row mb-3 d-flex justify-content-between">
                    <div class="col-6">
                        <label for="inputArticlePrice">Prix de vente</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" id="inputArticlePrice" name="articlePrice" value="<?= $article->getPriceArticle() ?>" disabled>
                    </div>

                </div>

                <!-- Input Stock Article -->
                <div class="row mb-3 d-flex justify-content-between">
                    <div class="col-6">
                        <label for="inputArticleStock">Stock</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" id="inputArticleStock" name="articleStock" value="<?= $article->getStockArticle() ?>" disabled>
                    </div>

                </div>

                <!-- Input State User -->
                <div class="row d-flex justify-content-between">
                    <div class="col-6">
                        <label for="inputArticleState">État</label>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <select name="stateArticle" id="state-select">
                            <option value="a" <?php if ($article->getState_article() == 'a') {
                                                    echo 'selected';
                                                }; ?>>Actif</option>
                            <option value="b" <?php if ($article->getState_article() == 'b') {
                                                    echo 'selected';
                                                }; ?>>Bloqué</option>
                            <option value="w" <?php if ($article->getState_article() == 'w') {
                                                    echo 'selected';
                                                }; ?>>En attente</option>
                        </select>
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
    </div>
    <br>
</main>