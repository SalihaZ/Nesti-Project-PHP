<!-- Create new user object -->
<?php if (!isset($user) || empty($user)) {
    $user = new User();
}
?>

<!-- Main -->
<main class="container wrapper-user-create">

    <!-- Nav Location -->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Library</li>
        </ol>
    </nav>

    <?php
    if (isset($_SESSION['message'])) {
    ?>
        <div class="alert alert-success" role="alert">
            Le mot de passe a bien été modifié.
            <br>
            Voici le nouveau mot de passe de l'utilisateur : <?= $_SESSION['message'] 
            ?>
        </div>
        <?php unset($_SESSION['message']) ?>
    <?php
    }
    ?>


    <!-- Title Page -->
    <div class="row">
        <div class="col-12">
            <h1>Edition des utilisateurs</h1>
            <br>
        </div>
    </div>

    <!-- Section Top -->
    <div class="row d-flex justify-content-around mr-2">

        <!-- Inputs User Informations -->
        <div class="col-5">
            <form method="POST" action="" class="application rounded">

                <!-- Input LastName User -->
                <div class="row mb-2">
                    <label for="inputUserLastName">Nom *</label>
                    <input type="text" class="form-control" id="inputUserLastName" name="lastname_user" value="<?= $user->getLastname_user() ?>">
                </div>

                <!-- Error LastName User -->
                <div>
                    <?php if (!empty($user->getLastnameError())) : ?>
                        <span class="badge bg-danger mb-2"><?= $user->getLastnameError() ?></span>
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
                        <span class="badge bg-danger mb-2"><?= $user->getFirstnameError() ?></span>
                    <?php endif; ?>
                </div>

                <!-- Input Address1 User -->
                <div class=" row mb-2">
                    <label for="inputUserAddress1">Adresse *</label>
                    <input type="text" class="form-control" id="inputUserAddress1" name="address1_user" value="<?= $user->getAddress1_user() ?>">
                </div>

                <!-- Error Address1 User -->
                <div>
                    <?php if (!empty($user->getAddress1Error())) : ?>
                        <span class="badge bg-danger mb-2"><?= $user->getAddress1Error() ?></span>
                    <?php endif; ?>
                </div>

                <!-- Input Address2 User -->
                <div class="row mb-2">
                    <label for="inputUserAddress2">Complément d'adresse</label>
                    <input type="text" class="form-control" id="inputUserAddress2" name="address2_user" value="<?= $user->getAddress2_user() ?>">
                </div>

                <!-- Error Address2 User -->
                <div>
                    <?php if (!empty($user->getAddress2Error())) : ?>
                        <span class="badge bg-danger mb-2"><?= $user->getAddress2Error() ?></span>
                    <?php endif; ?>
                </div>

                <!-- Input City User -->
                <div class="row mb-2">
                    <label for="inputUserCity">Ville *</label>
                    <input type="text" class="form-control" id="inputUserCity" name="name_city" value='<?= $city->getName_city() ?>'>
                </div>

                <!-- Error City User -->
                <div>
                    <?php if (!empty($city->getNameCityError())) : ?>
                        <span class="badge bg-danger mb-2"><?= $city->getNameCityError() ?></span>
                    <?php endif; ?>
                </div>

                <!-- Input Postcode User -->
                <div class="row mb-2">
                    <label for="inputUserPostCode">Code postal *</label>
                    <input type="text" class="form-control" id="inputUserPostCode" name="postcode_user" value="<?= $user->getPostcode_user() ?>">
                </div>

                <!-- Error Postcode User -->
                <div>
                    <?php if (!empty($user->getPostcodeError())) : ?>
                        <span class="badge bg-danger mb-2"><?= $user->getPostcodeError() ?></span>
                    <?php endif; ?>
                </div>

                <div class="row">

                    <!-- Input Role User -->
                    <div class="col-6">

                        <label for="inputUserRole">Rôle(s) *</label> <br>

                        <input type="checkbox" id="admin" name="roles_user[]" value="admins" <?php foreach ($user->getRoles_user() as $role) {
                                                                                                    if ($role == 'admins') {
                                                                                                        echo 'checked';
                                                                                                    };
                                                                                                }; ?>>
                        <label for="admin"> Administrateur </label><br>

                        <input type="checkbox" id="mod" name="roles_user[]" value="moderators" <?php foreach ($user->getRoles_user() as $role) {
                                                                                                    if ($role == 'moderators') {
                                                                                                        echo 'checked';
                                                                                                    };
                                                                                                }; ?>>
                        <label for="mod"> Modérateur </label><br>

                        <input type="checkbox" id="chief" name="roles_user[]" value="chiefs" <?php foreach ($user->getRoles_user() as $role) {
                                                                                                    if ($role == 'chiefs') {
                                                                                                        echo 'checked';
                                                                                                    };
                                                                                                }; ?>>
                        <label for="chief"> Chef </label><br>

                    </div>

                    <!-- Input State User -->
                    <div class="col-6">
                        <label for="inputUserState">État *</label> <br>
                        <select name="state_user" id="state-select">
                            <option value="a" <?php if ($user->getState_user() == 'a') {
                                                    echo 'selected';
                                                }; ?>>Actif</option>
                            <option value="b" <?php if ($user->getState_user() == 'b') {
                                                    echo 'selected';
                                                }; ?>>Bloqué</option>
                            <option value="w" <?php if ($user->getState_user() == 'w') {
                                                    echo 'selected';
                                                }; ?>>En attente</option>
                        </select>
                    </div>

                </div>

                <br>

                <!-- Buttons Validation / Reset -->
                <div class="row d-flex justify-content-around">

                    <!-- Button Validation -->
                    <!-- <button class="btn btn-lg btn-validation" type="submit">Valider</button> -->
                    <input class="btn btn-lg btn-validation" type="submit" value="Valider">

                    <!-- Button Reset -->
                    <button class="btn btn-lg btn-reset" type="button" onclick=resetUser()>Annuler</button>
                </div>
            </form>

        </div>

        <!-- Article Input Informations Users-->
        <div class="col-5">

            <div class="row">
                <h2>Informations</h2>
            </div>
            <div class="list">
                <div class="row">
                    <p> Date de création : <?= $user->getDate_creation_user() ?> <br>
                        Dernière connexion : <?= $user->getLastConnectionUser() ?></p>
                </div>
                <div class="row">
                    <h5> Utilisateur </h5>
                    Nombre de commandes : <?= $user->getNumberCommandsUser() ?><br>
                    Montant total des commandes : <?= $user->getAllCommandsPricesUser() ?> €<br>
                    Dernière commande : <?= $user->getLastCommandPriceUser() ?> €</p>
                </div>

                <?php $roles_user = $user->getRoles_user() ?>
                <?php foreach ($roles_user as $role) {
                    if ($role == 'admins') { ?>
                        <div class="row">
                            <p>
                            <h5> Administrateur </h5>
                            Nombre d'importation faites : <?= $user->getNumberImportsAdmin() ?> <br>
                            Date de la dernière importation : <?= $user->getDateLastImportAdmin() ?> </p>
                        </div>
                    <?php
                    }
                    if ($role == 'moderators') { ?>
                        <div class="row">
                            <p>
                            <h5> Modérateur </h5>
                            Nombre de commentaire approuvé : <?= $user->getNumberApprovedCommentsModerator() ?> <br>
                            Nombre de commentaire bloqué : <?= $user->getNumberDisapprovedCommentsModerator() ?> </p>
                        </div>
                    <?php
                    }
                    if ($role == 'chiefs') { ?>
                        <div class="row">
                            <p>
                            <h5> Chef </h5>
                            Nombre de recette : <?= $user->getNumberRecipesChief() ?> <br>
                            Dernière recette : <?= $user->getNameLastRecipeChief() ?> </p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <br>

            <!-- Form POST Disapprove -->
            <form method="POST" action="<?= BASE_URL . "users/edition/" . $id . "/resetpassword" ?>" class="">

                <!-- Button Reset Password -->
                <div class="row d-flex justify-content-center">
                    <button type="button" class="btn btn-lg btn-reset" data-bs-toggle="modal" data-bs-target="#resetPassword">
                        Réinitialisation du mot de passe
                    </button>
                </div>

                <!-- Input Hidden POST -->
                <input type="hidden" name="id_user" value="<?= $id ?>">


                <!-- Modal -->
                <div class="modal fade" id="resetPassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Réinitialisation mot de passe</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Vous êtes sur le point de réinitialiser le mot de passe de l'utilisateur.
                                Cette action est définitive et irréversible.
                                <br><br>
                                Êtes-vous sûr de vouloir réaliser cette action ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
                                <button type="submit" class="btn btn-success">Oui !</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

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
            <div class="col-8 d-flex align-items-center no-padding">
                <input type="search" class="form-control-lg shadow mr-2" id="searchComments" placeholder="Rechercher un commentaire">
                <i class="fas fa-search"></i>
            </div>

            <br>

            <!-- Table Comments Container -->
            <table class="table" data-toggle="table" data-sortable="true" data-pagination="true" data-pagination-next-text="Next" data-search="true" data-search-selector="#searchComments" data-locale="fr-FR" data-toolbar="#toolbar" data-toolbar-align="left">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Recette</th>
                        <th scope="col">Contenu</th>
                        <th scope="col">Date</th>
                        <th scope="col">État</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($arrayComments as $element) {
                    ?>
                        <tr>
                            <th scope="row">
                                <?= $element->getId_comment() ?>
                            </th>
                            <td>
                                <?= $element->getTitle_comment() ?>
                            </td>
                            <td>
                                <?= $element->getRecipe()->getName_recipe() ?>
                            </td>
                            <td>
                                <?= $element->getContent_comment() ?>
                            </td>
                            <td>
                                <?= $element->getDate_creation_comment() ?>
                            </td>
                            <td>
                                <?= $element->getDisplayState_comment(); ?>
                            </td>

                            <td>
                                <!-- Form POST Approve -->
                                <form method="POST" action="<?= BASE_URL . "users/edition/" . $id . "/commentapproved" ?>" class="form-table mb-2 rounded bg-success">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn bt-tbl" data-bs-toggle="modal" data-bs-target="#approveComment">
                                        Approuver
                                    </button>

                                    <!-- Input Hidden POST -->
                                    <input type="hidden" name="id_user" value="<?= $id ?>">
                                    <input type="hidden" name="id_comment" value="<?= $element->getId_comment() ?>">

                                    <!-- Modal -->
                                    <div class="modal fade" id="approveComment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">État commentaire</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Vous êtes sur le point d'approuver ce commentaire. Êtes-vous sûr de vouloir réaliser cette action ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
                                                    <button type="submit" class="btn btn-success">Oui !</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- Form POST Disapprove -->
                                <form method="POST" action="<?= BASE_URL . "users/edition/" . $id . "/commentdisapproved" ?>" class="form-table rounded bg-danger">

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn bt-tbl" data-bs-toggle="modal" data-bs-target="#disapproveComment">
                                        Bloquer
                                    </button>

                                    <!-- Input Hidden POST -->
                                    <input type="hidden" name="id_user" value="<?= $id ?>">
                                    <input type="hidden" name="id_comment" value="<?= $element->getId_comment() ?>">

                                    <!-- Modal -->
                                    <div class="modal fade" id="disapproveComment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">État commentaire</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Vous êtes sur le point de bloquer ce commentaire. Êtes-vous sûr de vouloir réaliser cette action ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
                                                    <button type="submit" class="btn btn-success">Oui !</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>

                </tbody>
            </table>
            <br>
        </div>
    </div>

</main>