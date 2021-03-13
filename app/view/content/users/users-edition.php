<!-- Create new user object -->
<?php if (!isset($user) || empty($user)) {
    $user = new User();
} 
?>

<!-- Main -->
<main class="container wrapper-user-create">

    <br>
    <!-- Title Page -->
    <div class="row">
        <div class="col-12">
            <h1>Edition des utilisateurs</h1>
            <br>
        </div>
    </div>

    <!-- Nav Location -->
    <nav>
    </nav>

    <!-- Section Top -->
    <div class="row d-flex">

        <!-- Article Input Informations Recipe-->
        <div class="col-6">
            <form method="POST" action="create" class="form-group rounded">

                <!-- Input LastName User -->
                <div class="row mb-2">
                    <label for="inputUserLastName">Nom *</label>
                    <input type="text" class="form-control" id="inputUserLastName" name="lastname_user" value="<?= $user->getLastname_user() ?>">
                </div>

                <!-- Error LastName User -->
                <div>
                    <?php if (!empty($user->getLastnameError())) : ?>
                        <span class="badge badge-danger mb-2"><?= $user->getLastnameError() ?></span>
                    <?php endif; ?>
                </div>

                <!-- Input FirstName User -->
                <div class=" row mb-2">
                    <label for="inputUserFirstName">Prénom *</label>
                    <input type="text" class="form-control" id="inputUserFirstName" name="firstname_user" value="<?= $user->getFirstname_user() ?>">
                </div>

                <!-- Error FirstName User -->
                <div>
                    <?php if (!empty($user->getFirstnameError())) : ?>
                        <span class="badge badge-danger mb-2"><?= $user->getFirstnameError() ?></span>
                    <?php endif; ?>
                </div>

                <div class="row mb-2">

                    <!-- Input Role User -->
                    <div class="col-6">
                        <label for="inputUserRole">Rôle(s) *</label> <br>

                        <input type="checkbox" id="admin" name="roles_user[]" value="admins">
                        <label for="admin"> Administrateur </label><br>

                        <input type="checkbox" id="mod" name="roles_user[]" value="moderators">
                        <label for="mod"> Modérateur </label><br>

                        <input type="checkbox" id="chief" name="roles_user[]" value="chiefs">
                        <label for="chief"> Chef </label><br>

                    </div>

                    <!-- Input State User -->
                    <div class="col-6">
                        <label for="inputUserState">État *</label> <br>
                        <select name="state_user" id="state-select">
                            <option value="a">Actif</option>
                            <option value="b">Bloqué</option>
                            <option value="w">En attente</option>
                        </select>
                    </div>

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

            </form>

        </div>

        <!-- Article Input Informations Users-->
        <div class="col-6 mb-3">

            <div class="row">
                <h2>Informations</h2>
                <textarea rows="12" cols="50" class="form-control shadow" id="inputUser" placeholder="" name="recipe[name_recipes]"> </textarea>
            </div>

            <br>

            <!-- Button Reset Password -->
            <div class="row d-flex justify-content-center">
                <input class="btn btn-lg" type="submit" id="button-recipe-reset" value="Réinitialisation du mot de passe">
            </div>
        </div>
    </div>

    <br>
    <br>

    <!-- Section Middle -->
    <div class="row d-flex">

        <!-- Titles -->
        <div class="col-12">
            <div class="row">
                <div class="col">
                    <h1>Ses Commandes</h1>
                    <h5>Consultation de ses commandes</h5>
                </div>
            </div>

            <br>

            <!-- Table Container -->
            <div class="row wrapper-articles-table justify-content-between">

                <div class="col-8">

                    <!-- Research Bar -->
                    <div>
                        <input type="search" class="form-control-lg" placeholder="Rechercher un commentaire" />
                        <button type="button" class="btn" id="button-search-bar">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                    <br>

                    <table class="table shadow">
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
                                        1
                                    </th>
                                    <td>
                                        <?= $element->getUsername_user() ?>
                                    </td>

                                    <td>
                                        13.87 €
                                    </td>
                                    <td>
                                        13
                                    </td>
                                    <td>
                                        12/12/2020
                                    </td>
                                    <td>
                                        a
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

                <!-- Details -->
                <div class="col-4 mb-3">
                    <div class="row d-flex justify-content-between px-3 align-items-end">
                        <h2>Détails</h2>
                        <label class="px-2 bg-warning">ID n° 3</label>
                    </div>
                    <textarea rows="10" cols="50" class="form-control shadow" id="inputRecipeName" placeholder="" name="recipe[name_recipes]"> </textarea>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row d-flex">

        <!-- Section Comments -->
        <div class="col-12">
            <h1>Ses Commentaires</h1>
            <h5>Modération des ses commentaires</h5>
            <br>

            <!-- Research Bar -->
            <div class="col-12 d-flex no-padding">
                <input type="search" class="form-control-lg" placeholder="Rechercher un commentaire" />
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
                                <th scope="col">Titre</th>
                                <th scope="col">Recette</th>
                                <th scope="col">Contenu</th>
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
                                        1
                                    </th>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>

                                    <td>

                                    </td>
                                    <td> <a href="">Approuver <br> <a href="">Bloquer</a></td>
                                </tr>

                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</main>