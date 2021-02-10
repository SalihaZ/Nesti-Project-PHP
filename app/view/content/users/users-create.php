<!-- Main -->
<main class="container wrapper-user-create">

    <br>
    <!-- Title Page -->
    <div class="row">
        <div class="col-12">
            <h1>Création d'un utilisateur</h1>
            <br>
        </div>
    </div>

    <!-- Nav Location -->
    <nav>
    </nav>

    <!-- Section Top -->
    <div class="row d-flex">

        <!-- Article Input Informations Recipe-->

        <form method="POST" action="create" class="form-group">
            <div class="row d-flex justify-content-between">
                <div class="col-5">

                    <!-- Input Name Recipe -->
                    <div class="row mb-2">
                        <label for="inputRecipeName">Nom</label>
                        <input type="text" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un nom" name="recipe[name_recipes]">
                    </div>

                    <!-- Input Name Recipe -->
                    <div class="row mb-2">
                        <label for="inputRecipeName">Prénom</label>
                        <input type="text" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un prénom" name="recipe[name_recipes]">
                    </div>

                    <!-- Input Name Recipe -->
                    <div class="row mb-2">
                        <label for="inputRecipeName">Rôle</label>
                        <input type="text" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un rôle" name="recipe[name_recipes]">
                    </div>

                    <!-- Input Name Recipe -->
                    <div class="row mb-2">
                        <label for="inputRecipeName">État</label>
                        <input type="text" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un état" name="recipe[name_recipes]">
                    </div>

                    <br>

                    <!-- Buttons Validation / Reset -->
                    <div class="row d-flex justify-content-around">

                        <!-- Button Validation -->
                        <input class="btn btn-lg" type="submit" id="button-recipe-validation" value="Valider">

                        <!-- Button Reset -->
                        <a href="#">
                            <button class="btn btn-lg" type="button" id="button-recipe-reset">
                                Annuler</button>
                        </a>
                    </div>
                </div>

                <div class="col-5">

                    <!-- Input Name Recipe -->
                    <div class="row mb-2">
                        <label for="inputRecipeName">Email</label>
                        <input type="text" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un email" name="recipe[name_recipes]">
                    </div>

                    <!-- Input Name Recipe -->
                    <div class="row mb-2">
                        <label for="inputRecipeName">Mot de passe</label>
                        <input type="text" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un mot de passe" name="recipe[name_recipes]">
                    </div>

                </div>

            </div>

        </form>

    </div>

    <div class="row d-flex">

        <!-- Section Top -->
        <form class="row d-flex bg-light">

            <div class="col-8">
                <h2>Ses Commandes</h2>
                <h5>Consultation des commandes</h5>
                <br>

                <!-- Research Bar -->
                <div class="col-8 d-flex no-padding">
                    <input type="search" class="form-control-lg" placeholder="Rechercher une commande" />
                    <button type="button" class="btn" id="button-search-bar">
                        <i class="fas fa-search"></i>
                    </button>
                </div>

                <br>

                <!-- Table Container -->
                <div class="row wrapper-articles-table shadow">
                    <div class="col no-padding">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Utilisateur</th>
                                    <th scope="col">Montant</th>
                                    <th scope="col">Nb d'articles</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">État</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($arrayUsers as $element) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?= $element->getUsername_user() ?>
                                        </th>
                                        <td>
                                            <!-- <?= $element->getFk_id_product() ?> -->
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

                <div class="col-4">
                    <h2>Liste des ingrédients</h2>
                    <br>
                </div>

        </form>

    </div>

</main>