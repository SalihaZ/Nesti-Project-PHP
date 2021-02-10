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

</div>

</main>