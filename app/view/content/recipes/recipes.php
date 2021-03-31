<!-- Main -->
<main class="container wrapper-recipes">
    <br>

    <!-- Title Page -->
    <div class="row">
        <div class="col-12">
            <h1>Recettes</h1>
            <br>
        </div>
    </div>

    <!-- Article Top Page -->
    <div class="row d-flex justify-content-between">

        <!-- Research Bar -->
        <div class="col-8 d-flex no-padding">
            <input type="search" class="form-control-lg shadow" placeholder="Rechercher une recette" />
            <button type="button" class="btn" id="button-search-bar">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <!-- Buttons Container -->
        <div class="col-4 d-flex justify-content-end no-padding">

            <!-- Button ADD -->
            <a href="recipes/create" class="btn btn-lg btn-outline-secondary shadow">
                <i class="fas fa-plus-circle"></i>
                Ajouter
            </a>
        </div>
    </div>

    <br>

    <!-- Table Container -->
    <table class="table" data-toggle="table" data-sortable="true" data-pagination="true" data-pagination-pre-text="Previous" data-pagination-next-text="Next" data-search="true" data-search-align="left" data-search-selector="#customSearchArticle" data-locale="eu-EU" data-toolbar="#toolbar" data-toolbar-align="left">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Difficulté (sur 5)</th>
                <th scope="col">Pour</th>
                <th scope="col">Temps</th>
                <th scope="col">Chef</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($arrayRecipes as $element) {
            ?>
                <tr>
                    <th scope="row">
                        <?= $element->getId_recipe() ?>
                    </th>
                    <td>
                        <?= $element->getName_recipe() ?>
                    </td>
                    <td>
                        <?= $element->getDifficulty_recipe() ?>
                    </td>
                    <td>
                        <?= $element->getNumber_person_recipe() ?>
                    </td>
                    <td>
                        <?= $element->getTime_recipe() ?>
                    </td>
                    <td>
                        <?= $element->getFk_id_chief() ?>
                    </td>
                    <td> <a href="recipes/edition">Modifier <br> <a href="">Supprimer</a></td>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
    <br>
</main>