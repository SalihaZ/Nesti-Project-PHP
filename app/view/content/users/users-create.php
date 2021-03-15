<!-- Create new user object -->
<?php if (!isset($user) || empty($user)) {
    $user = new User();
}
if (!isset($city) || empty($city)) {
    $city = new City();
}
?>

<!-- Main -->
<main class="container wrapper-user-create">

    <!-- Nav Location -->
    <nav>
    </nav>

    <br>

    <!-- Title Page -->
    <div class="row">
        <div class="col-12">
            <h1>Création d'un utilisateur</h1>
        </div>
    </div>

    <br>

    <!-- Section Top -->
    <div class="row d-flex">

        <!-- Article Input Informations Recipe-->

        <form method="POST" action="" class="form-group">
            <div class="row d-flex justify-content-between">
                <div class="col-5">

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

                    <!-- Input Email User -->
                    <div class="row mb-2">
                        <label for="inputUserEmail">Email *</label>
                        <input type="text" class="form-control" id="inputUserEmail" name="email_user" value="<?= $user->getEmail_user() ?>">
                    </div>

                    <!-- Error Email User -->
                    <div>
                        <?php if (!empty($user->getEmailError())) : ?>
                            <span class="badge badge-danger mb-2"><?= $user->getEmailError()?></span>
                            <?php echo"</br>"?>
                        <?php endif; ?>
                    </div>

                    <!-- Input UserName User -->
                    <div class="row mb-2">
                        <label for="inputUserName">Nom d'utilisateur *</label>
                        <input type="text" class="form-control" id="inputUserName" name="username_user" value="<?= $user->getUsername_user() ?>">
                    </div>

                    <!-- Error UserName User -->
                    <div>
                        <?php if (!empty($user->getUsernameError())) : ?>
                            <span class="badge badge-danger mb-2"><?= $user->getUsernameError() ?></span>
                        <?php endif; ?>
                    </div>

                    <!-- Input Password User -->
                    <div class="row mb-2">
                        <label for="inputUserPassword">Mot de passe *</label>
                        <input type="text" class="form-control" id="inputUserPassword" name="password_user" value="<?= $user->getPassword_user() ?>">
                    </div>

                    <!-- Error Password User -->
                    <div>
                        <?php if (!empty($user->getPasswordError())) : ?>
                            <span class="badge badge-danger mb-2"><?= $user->getPasswordError() ?></span>
                        <?php endif; ?>
                    </div>

                </div>
                
                <div class="col-5">

                    <!-- Input Address1 User -->
                    <div class=" row mb-2">
                        <label for="inputUserAddress1">Adresse *</label>
                        <input type="text" class="form-control" id="inputUserAddress1" name="address1_user" value="<?= $user->getAddress1_user() ?>">
                    </div>

                    <!-- Error Address1 User -->
                    <div>
                        <?php if (!empty($user->getAddress1Error())) : ?>
                            <span class="badge badge-danger mb-2"><?= $user->getAddress1Error()?></span>
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
                            <span class="badge badge-danger mb-2"><?= $user->getAddress2Error()?></span>
                        <?php endif; ?>
                    </div>

                    <!-- Input City User -->
                    <div class="row mb-2">
                        <label for="inputUserCity">Ville *</label>
                        <input type="text" class="form-control" id="inputUserCity" name="name_city">
                    </div>

                    <!-- Error City User -->
                    <div>
                        <?php if (!empty($city->getNameCityError())) : ?>
                            <span class="badge badge-danger mb-2"><?= $city->getNameCityError()?></span>
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
                            <span class="badge badge-danger mb-2"><?= $user->getPostcodeError() ?></span>
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
                </div>
            </div>

            <!-- Buttons Validation / Reset -->
            <div class="row d-flex justify-content-around">

                <!-- Button Validation -->
                <input class="btn btn-lg" type="submit" id="button-validation" value="Valider">

                <!-- Button Reset -->
                <a href="#">
                    <button class="btn btn-lg" type="button" id="button-reset" onclick=resetUser()>
                        Annuler</button>
                </a>
            </div>

        </form>

    </div>

</main>