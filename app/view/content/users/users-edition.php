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
            <form method="POST" action="create" class="form-group">

                <!-- Input Name Recipe -->
                <div class="row mb-2">
                    <label for="inputRecipeName">Nom</label>
                    <input type="text" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un nom" name="recipe[name_recipes]">
                    <!-- <small id="chief" class="form-text text-muted">Auteur de la recette : <?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"] ?></small> -->
                </div>

                <!-- Input Name Recipe -->
                <div class="row mb-2">
                    <label for="inputRecipeName">Prénom</label>
                    <input type="text" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un prénom" name="recipe[name_recipes]">
                    <!-- <small id="chief" class="form-text text-muted">Auteur de la recette : <?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"] ?></small> -->
                </div>

                <!-- Input Name Recipe -->
                <div class="row mb-2">
                    <label for="inputRecipeName">Rôle</label>
                    <input type="text" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un rôle" name="recipe[name_recipes]">
                    <!-- <small id="chief" class="form-text text-muted">Auteur de la recette : <?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"] ?></small> -->
                </div>

                <!-- Input Name Recipe -->
                <div class="row mb-2">
                    <label for="inputRecipeName">État</label>
                    <input type="text" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un état" name="recipe[name_recipes]">
                    <!-- <small id="chief" class="form-text text-muted">Auteur de la recette : <?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"] ?></small> -->
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

         <!-- Article Input Informations Recipe-->
         <div class="col-6">
            <form method="POST" action="create" class="form-group">

                <!-- Input Name Recipe -->
                <div class="row mb-2">
                    <label for="inputRecipeName">Informations</label>
                    <textarea rows="10" cols="50" class="form-control" id="inputRecipeName" placeholder="Veuillez saisir un nom" name="recipe[name_recipes]"> </textarea>
                    <!-- <small id="chief" class="form-text text-muted">Auteur de la recette : <?php echo $_SESSION["firstName"] . " " . $_SESSION["lastName"] ?></small> -->
                </div>

                <br>

                <!-- Buttons Validation / Reset -->
                <div class="row d-flex justify-content-around">

                    <!-- Button Validation -->
                    <input class="btn btn-lg" type="submit" id="button-recipe-validation" value="Valider">

                </div>

            </form>

        </div>

    </div>

</main>