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

                    <!-- Input UserName User -->
                    <div class="row mb-2">
                        <label for="inputUserName">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="inputUserName" placeholder="Veuillez saisir un nom d'utilisateur" name="username_user">
                    </div>

                    <!-- Input Password User -->
                    <div class="row mb-2">
                        <label for="inputUserPassword">Mot de passe</label>
                        <input type="text" class="form-control" id="inputUserPassword" placeholder="Veuillez saisir un mot de passe" name="password_user">
                    </div>

                    <!-- Input Name Recipe -->
                    <div class="row mb-2">
                        <label for="inputUserRole">Rôle</label>
                        <input type="text" class="form-control" id="inputUserRole" placeholder="Veuillez saisir un rôle" name="">
                    </div>

                    <!-- Input Name Recipe -->
                    <div class="row mb-2">
                        <label for="inputUserState">État</label>
                        <input type="text" class="form-control" id="inputUserState" placeholder="Veuillez saisir un état" name="state_user">
                    </div>

                      <!-- Input City User -->
                      <div class="row mb-2">
                        <label for="inputUserCity">Ville</label>
                        <input type="text" class="form-control" id="inputUserCity" placeholder="Veuillez saisir une ville" name="name_city">
                    </div>

                    <br>

                    <!-- Buttons Validation / Reset -->
                    <div class="row d-flex justify-content-around">

                        <!-- Button Validation -->
                        <input class="btn btn-lg" type="submit" id="button-recipe-validation" value="Valider">

                        <!-- Button Reset -->
                        <a href="#">
                            <button class="btn btn-lg" type="button" id="button-recipe-reset" onclick=resetUser()>
                                Annuler</button>
                        </a>
                    </div>
                </div>

                <div class="col-5">


                    <!-- Input LastName User -->
                    <div class="row mb-2">
                        <label for="inputUserLastName">Nom</label>
                        <input type="text" class="form-control" id="inputUserLastName" placeholder="Veuillez saisir un nom" name="lastname_user">
                    </div>

                    <!-- Input FirstName User -->
                    <div class=" row mb-2">
                        <label for="inputUserFirstName">Prénom</label>
                        <input type="text" class="form-control" id="inputUserFirstName" placeholder="Veuillez saisir un prénom" name="firstname_user">
                    </div>

                    <!-- Input Email User -->
                    <div class="row mb-2">
                        <label for="inputUserEmail">Email</label>
                        <input type="text" class="form-control" id="inputUserEmail" placeholder="Veuillez saisir un email" name="email_user">
                    </div>

                      <!-- Input Adress1 User -->
                      <div class=" row mb-2">
                        <label for="inputUserAdress1">Adresse</label>
                        <input type="text" class="form-control" id="inputUserAdress1" placeholder="Veuillez saisir une adresse" name="adress1_user">
                    </div>

                    <!-- Input Adress2 User -->
                    <div class="row mb-2">
                        <label for="inputUserAdress2">Complément d'adresse</label>
                        <input type="text" class="form-control" id="inputUserAdress2" placeholder="Veuillez saisir un complément d'adresse" name="adress2_user">
                    </div>


                </div>

            </div>

        </form>

    </div>

    </div>

</main>