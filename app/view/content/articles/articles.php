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
            <input type="search" class="form-control-lg shadow" placeholder="Rechercher un article" />
            <button type="button" class="btn" id="button-search-bar">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <!-- Buttons Container -->
        <div class="col-4 d-flex justify-content-between no-padding">

            <!-- Button Commands -->
            <a href="articles/commands" class="btn btn-lg btn-outline-secondary shadow" id="button-commands">
                <i class="far fa-eye"></i>
                Commandes
            </a>

            <!-- Button Import -->
            <a href="article/imports" class="btn btn-lg btn-outline-secondary shadow">
                <i class="fas fa-plus-circle"></i>
                Importer
            </a>
        </div>
    </div>

    <br>

    <!-- Table Container -->
    <table class="table" id="allArticlesTable" data-toggle="table" data-sortable="true" data-pagination="true" data-pagination-pre-text="Previous" data-pagination-next-text="Next" data-search="true" data-search-align="left" data-search-selector="#customSearchArticle" data-locale="eu-EU" data-toolbar="#toolbar" data-toolbar-align="left">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom d'utilisateur</th>
                <th scope="col">Nom</th>
                <th scope="col">Rôle(s)</th>
                <th scope="col">Dernière connexion</th>
                <th scope="col">État</th>
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
                    <td> <a href="articles/edition">Modifier <br> <a href="">Supprimer</a></td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
</main>