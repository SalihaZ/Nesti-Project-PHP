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
        <div class="col-8 d-flex align-items-center no-padding">
            <input type="search" class="form-control-lg shadow mr-2" id="searchUser" placeholder="Rechercher un utilisateur">
            <i class="fas fa-search"></i>
        </div>

        <!-- Buttons Container -->
        <div class="col-4 d-flex justify-content-end no-padding">

            <!-- Button Add -->
            <a href="users/create" class="btn btn-lg btn-outline-secondary shadow">
                <i class="fas fa-plus-circle"></i>
                Ajouter
            </a>
        </div>
    </div>

    <br>

    <!-- Table Container -->
    <table class="table" data-toggle="table" data-sortable="true" data-pagination="true" data-pagination-next-text="Next" data-search="true" data-search-selector="#searchUser" data-locale="fr-FR" data-toolbar="#toolbar" data-toolbar-align="left">
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
                        <?= implode(", ", $element->getDisplayRoles()) ?>
                    </td>
                    <td>
                        <?= $element->getLastConnectionUser() ?>
                    </td>
                    <td>
                        <?= $element->getDisplayState_user() ?>
                    </td>
                    <td>

                        <a href="<?= BASE_URL . "users/edition/" .  $element->getId_user() ?>" type="submit" class="btn bt-tbl btn-warning mb-2">Modifier</a>

                       <br>
                       
                        <a href="" type="submit" class="btn bt-tbl btn-danger">Supprimer</a>

                    </td>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
    <br>
</main>
