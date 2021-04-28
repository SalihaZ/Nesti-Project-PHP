<!-- Main -->
<main class="container wrapper-recipe-create">

    <!-- Nav Location -->
    <div class="row mt-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>recipes" class="bc">Recettes</a></li>
                <li class="breadcrumb-item org" aria-current="page">Création</li>
            </ol>
        </nav>
    </div>

    <!-- Alertes -->
    <!-- For the creation of a recipe -->
    <?php
    if (isset($_SESSION['recipeCreated'])) {
    ?>
        <div class="alert alert-success" role="alert" onclick="removeAlert(this)">
            Félicitation ! Votre recette a bien été créée. <br><br>
            Nous vous recommandons vivement de lui ajouter des informations supplémentaires tel qu'une image, des ingrédients et des étapes de préparations.
        </div>
    <?php }
    unset($_SESSION['recipeCreated']); ?>

    <!-- Title Page -->
    <div class="row">
        <div class="col">
            <h1>Création d'un Recette</h1>
            <br>
        </div>
    </div>

    <!-- Section Top -->
    <div class="row d-flex  justify-content-between">

        <!-- Article Input Informations Recipe-->
        <div class="col-4">
            <form method="POST" action="create" class="application">

                <!-- Input Name Recipe -->
                <div class="row d-flex mb-2">
                    <div class="col-12">
                        <label for="inputRecipeName">Nom de la recette</label>
                        <input type="text" class="form-control" id="inputRecipeName" placeholder="Exemple : Gâteau au chocolat" name="name_recipe" value="<?= $recipe->getName_recipe() ?>">
                    </div>
                </div>

                <!-- Error Name Recipe -->
                <div>
                    <?php if (!empty($recipe->getNameError())) : ?>
                        <span class="badge bg-danger mb-2"><?= $recipe->getNameError() ?></span>
                    <?php endif; ?>
                </div>

                <!-- Input Difficulty Recipe -->
                <div class="row d-flex mb-2 justify-content-between">
                    <div class="col-8">
                        <label for="inputRecipeDifficulty">Difficulté (note sur 5)</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" id="inputRecipeDifficulty" placeholder="" name="difficulty_recipe" value="<?= $recipe->getDifficulty_recipe() ?>">
                    </div>
                </div>

                <!-- Error Difficulty Recipe -->
                <div>
                    <?php if (!empty($recipe->getDifficultyError())) : ?>
                        <span class="badge bg-danger mb-2"><?= $recipe->getDifficultyError() ?></span>
                    <?php endif; ?>
                </div>

                <!-- Input Number Person Recipe -->
                <div class="row d-flex mb-2 justify-content-between">
                    <div class="col-8">
                        <label for="inputRecipeNbPerson">Nombre de personnes</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" id="inputRecipeNbPerson" placeholder="" name="number_person_recipe" value="<?= $recipe->getNumber_person_recipe() ?>">
                    </div>

                </div>

                <!-- Error Number Person Recipe -->
                <div>
                    <?php if (!empty($recipe->getNumberPersonError())) : ?>
                        <span class="badge bg-danger mb-2"><?= $recipe->getNumberPersonError() ?></span>
                    <?php endif; ?>
                </div>

                <!-- Input Time Preparation Recipe -->
                <div class="row d-flex mb-2 justify-content-between">
                    <div class="col-9">
                        <label for="inputRecipeType">Temps de préparation (en minutes)</label>
                    </div>
                    <div class="col-2">
                        <input type="text" class="form-control" id="inputRecipeType" placeholder="" name="time_recipe" value="<?= $recipe->getDisplayTimeM_recipe() ?>">
                    </div>
                </div>

                <!-- Error Time Preparation Recipe -->
                <div>
                    <?php if (!empty($recipe->getTimeError())) : ?>
                        <span class="badge bg-danger mb-2"><?= $recipe->getTimeError() ?></span>
                    <?php endif; ?>
                </div>

                <!-- Input State Recipe -->
                <div class="row d-flex justify-content-between">
                    <div class="col-6">
                        <label for="inputRecipeState">État</label>
                    </div>
                    <div class="col-4 d-flex justify-content-end">
                        <select name="stateRecipe" id="state-select">
                            <option value="a" <?php if ($recipe->getState_recipe() == 'a') {
                                                    echo 'selected';
                                                }; ?>>Actif</option>
                            <option value="b" <?php if ($recipe->getState_recipe() == 'b') {
                                                    echo 'selected';
                                                }; ?>>Bloqué</option>
                            <option value="w" <?php if ($recipe->getState_recipe() == 'w') {
                                                    echo 'selected';
                                                }; ?>>En attente</option>
                        </select>
                    </div>
                </div>

                <br>

                <!-- Buttons Validation / Reset -->
                <div class="row d-flex justify-content-around">

                    <!-- Button Validation -->
                    <input class="btn btn-lg btn-validation" type="submit" value="Valider">

                    <!-- Button Reset -->
                    <button class="btn btn-lg btn-reset" type="reset" onclick="resetUser()">Annuler</button>

                </div>
            </form>
        </div>


        <div class="col-6">

            <div class="application">
                <div class="image-upload">
                    <div class="image-preview">
                        <div class="bg-warning" id="imagePreview">
                        </div>
                    </div>
                    <div class="image-edit">
                        <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <!-- Section Preparation -->
    <div class="row d-flex justify-content-between mb-4">

        <div class="col-7">

            <!-- Title -->
            <div class="row">
                <div class="col">
                    <h1>Préparation</h1>
                </div>
            </div>

            <br>

            <!-- Bloc Preparation -->
            <div class="application">
                <div id="stepsPreparation">
                    <!-- Row One Step Preparation -->
                    <div class="row mb-4 d-flex">
                        <div class="col-1">
                            <div class="d-flex flex-column pr-3">

                                <!-- Arrow DOWN -->
                                <a class="mb-2">
                                    <i class="fas fa-caret-square-down"></i>
                                </a>

                                <!-- Trash -->
                                <a class="mb-2">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Text AREA -->
                        <div class="col-8">
                            <textarea cols="65" rows="6" class="bg-white border border-info rounded"></textarea>
                        </div>
                    </div>

                    <!-- Row One Step Preparation -->
                    <div class="row mb-4 d-flex">
                        <div class="col-1">
                            <div class="d-flex flex-column pr-3">

                                <!-- Arrow UP -->
                                <a class="mb-2">
                                    <i class="fas fa-caret-square-up"></i>
                                </a>

                                <!-- Arrow DOWN -->
                                <a class="mb-2">
                                    <i class="fas fa-caret-square-down"></i>
                                </a>

                                <!-- Trash -->
                                <a class="mb-2">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Text AREA -->
                        <div class="col-8">
                            <textarea cols="65" rows="6" class="bg-white border border-info rounded"></textarea>
                        </div>
                    </div>

                    <!-- Row One Step Preparation -->
                    <div class="row mb-4 d-flex">
                        <div class="col-1">
                            <div class="d-flex flex-column pr-3">

                                <!-- Arrow UP -->
                                <a class="mb-2">
                                    <i class="fas fa-caret-square-up"></i>
                                </a>

                                <!-- Trash -->
                                <a class="mb-2">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Text AREA -->
                        <div class="col-8">
                            <textarea cols="65" rows="5" class="bg-white border border-info rounded"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Button Plus -->
                <div class="row justify-content-end">
                    <button class="btn" id="plusPreparation" onclick="addStepPreparation()" type="submit"><i class="fas fa-plus"></i></button>
                </div>
            </div>
        </div>


        <div class="col-4">

            <!-- Title -->
            <div class="row">
                <h1>Liste des Ingrédients</h1>
            </div>

            <br>

            <div class="row shadow rounded">
                <div class="col-12 mt-3">
                    <ul id="listIngredients">
                        <!-- Add <li> here -->
                    </ul>
                </div>
            </div>

            <br>

            <div>
                <div class="row d-flex justify-content-center">
                    <div class="application rounded">
                        <div class="col-12">

                            <div class="row mb-1 justify-content-center">
                                <label for="inputRecipeName">Ajouter un ingrédient</label>
                            </div>
                            <div class="row mb-3">
                                <input type="text" class="form-control" id="inputIngredientName" placeholder="Exemple : Banane">
                            </div>

                            <div class="row d-flex justify-content-between">
                                <div class="col-3">
                                    <input type="text" class="form-control" id="inputIngredientQuantity" placeholder="Quantité">
                                </div>
                                <div class="col-5">
                                    <input type="text" class="form-control" id="inputIngredientUnit" placeholder="Unité">
                                </div>
                                <div class="col-3 d-flex justify-content-end">
                                    <input class="btn btn-validation" onclick="addIngredient()" type="submit" value="Ajouter">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>