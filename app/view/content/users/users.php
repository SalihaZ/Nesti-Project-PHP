<!-- Main -->
<main class="container wrapper-users">
    <br>

    <!-- Title Page -->
    <div class="row">
        <div class="col-12">
            <h1>Utilisateurs</h1>
            <br>
        </div>
    </div>

    <!-- User Top Page -->
    <div class="row d-flex justify-content-between">

        <!-- Research Bar -->
        <div class="col-8 d-flex no-padding">
            <input type="search" class="form-control-lg" placeholder="Rechercher un utilisateur">
            <button type="button" class="btn" id="button-search-bar">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <!-- Buttons Container -->
        <div class="col-4 d-flex justify-content-end no-padding">

            <!-- Button Add -->
            <a href="users/create" class="btn btn-lg btn-outline-secondary">
                <i class="fas fa-plus-circle"></i>
                Ajouter
            </a>
        </div>
    </div>

    <br>

    <!-- Table Container -->
    <div class="row shadow">
        <div class="col no-padding">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom d'utilisateur</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Rôle</th>
                        <th scope="col">Dernière connexion</th>
                        <th scope="col">Etat</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($arrayUsers as $element) {
                    ?>
                        <tr>
                            <th scope="row">
                                <?= $element->getId_user() ?>
                            </th>
                            <td>
                                <?= $element->getUsername_user() ?>
                            </td>
                            <td>
                                <?= $element->getLastname_user() ?>
                                <?= $element->getFirstname_user() ?>
                            </td>
                            <td>
                                <!-- <//?= $element->getDifficulty_recipes() ?> -->
                            </td>
                            <td>
                                <!-- <//?= $element->getNumber_person_recipes() ?> -->
                            </td>
                            <td>
                                <?= $element->getState_user() ?>
                            </td>
                            <td> <a href="users/edition">Modifier <br> <a href="">Supprimer</a></td>
                        </tr>

                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</main>