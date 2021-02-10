<!-- Main -->
<main class="container wrapper-articles">
    <br>

    <!-- Title Page -->
    <div class="row">
        <div class="col-12">
            <h1>Articles</h1>
            <br>
        </div>
    </div>

    <!-- Article Top Page -->
    <div class="row d-flex justify-content-between">

        <!-- Research Bar -->
        <div class="col-8 d-flex no-padding">
            <input type="search" class="form-control-lg" placeholder="Rechercher un article" />
            <button type="button" class="btn" id="button-search-bar">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <!-- Buttons Container -->
        <div class="col-4 d-flex justify-content-between no-padding">
           
            <!-- Button Commands -->
                <a href="articles/commands" class="btn btn-lg btn-outline-secondary">
                    <i class="fas fa-plus-circle"></i>
                    Commandes
                </a>

            <!-- Button Import -->
                <a href="article/imports" class="btn btn-lg btn-outline-secondary">
                    <i class="fas fa-plus-circle"></i>
                    Importer
                </a>
        </div>
    </div>

    <br>

    <!-- Table Container -->
    <div class="row wrapper-articles-table shadow">
        <div class="col no-padding">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix de vente</th>
                        <th scope="col">Type</th>
                        <th scope="col">Dernière importation</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($arrayArticles as $element) {
                    ?>
                        <tr>
                            <th scope="row">
                                <?= $element->getId_article() ?>
                            </th>
                            <td>
                                <?= $element->getFk_id_product() ?>
                            </td>
                            <td>
                                <!-- <?= $element->getDifficulty_recipes() ?> -->
                            </td>
                            <td>
                                <!-- <?= $element->getNumber_person_recipes() ?> -->
                            </td>
                            <td>
                                <!-- <?= $element->getTime_recipes() ?> -->
                            </td>
                            <td>
                                <!-- <?= $element->getFk_id_chief() ?> -->
                            </td>
                            <td> <a href="articles/edit">Modifier <br> <a href="">Supprimer</a></td>
                        </tr>

                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</main>