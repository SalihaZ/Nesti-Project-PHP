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
   
  
    <!-- Title Page -->
    <div class="row">
        <div class="col">
            <h1>Création d'un Recette</h1>
            <br>
        </div>
    </div>

    <!-- Section Top -->
    <div class="row d-flex">

        <!-- Article Input Informations Recipe-->
        <div class="col-6">
            <form method="POST" action="create" class="application">

                <!-- Input Name Recipe -->
                <div class="row d-flex mb-3">
                    <div class="col-12">
                        <label for="inputRecipeName">Nom de la recette</label>
                        <input type="text" class="form-control" id="inputRecipeName" placeholder="Exemple : Gâteau au chocolat" name="recipe[name_recipes]">
                    </div>
                </div>

                <!-- Input Diffuculty Recipe -->
                <div class="row d-flex mb-3">

                    <div class="col-8">
                        <label for="inputRecipeDifficulty">Difficulté (note sur 5)</label>
                    </div>
                    <div class="col-4 ">
                        <input type="text" class="form-control" id="inputRecipeDifficulty" placeholder="" name="recipe[name_recipes]">
                    </div>

                </div>

                <!-- Input Number Person Recipe -->
                <div class="row mb-3">
                    <div class="col-8">
                        <label for="inputRecipeNbPerson">Nombre de personnes</label>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" id="inputRecipeNbPerson" placeholder="" name="recipe[name_recipes]">
                    </div>

                </div>

                <!-- Input Type Preparation Recipe -->
                <div class="row mb-3">
                    <div class="col-8">
                        <label for="inputRecipeType">Temps de préparation en minutes</label>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" id="inputRecipeType" placeholder="" name="recipe[name_recipes]">
                    </div>

                </div>

                <br>

                <!-- Buttons Validation / Reset -->
                <div class="row d-flex justify-content-around">

                    <!-- Button Validation -->
                    <input class="btn btn-lg" id ='button-validation' type="submit" value="Valider">

                    <!-- Button Reset -->
                    <a href="#">
                        <button onclick="resetInputs()" class="btn btn-lg" id ='button-reset' type="button">
                            Annuler</button>
                    </a>
                </div>
            </form>
        </div>


        <div class="col-6">

            <div class="container">
                <div class="image-upload">
                    <div class="image-preview">
                        <div class="bg-warning" id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
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
    <div class="row d-flex mb-4">

        <div class="col-8">

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

                        <!-- Text AREA -->
                        <textarea cols="65" rows="5" class="bg-white border border-info rounded"></textarea>
                    </div>

                    <!-- Row One Step Preparation -->
                    <div class="row mb-4 d-flex">
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

                        <!-- Text AREA -->
                        <textarea cols="65" rows="5" class="bg-white border border-info rounded"></textarea>
                    </div>

                    <!-- Row One Step Preparation -->
                    <div class="row mb-4 d-flex">
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

                        <!-- Text AREA -->
                        <textarea cols="65" rows="5" class="bg-white border border-info rounded"></textarea>
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
                                <div class="col-4 no-padding">
                                    <input type="text" class="form-control" id="inputIngredientQuantity" placeholder="Quantité">
                                </div>
                                <div class="col-4 no-padding">
                                    <input type="text" class="form-control" id="inputIngredientUnit" placeholder="Unité">
                                </div>
                                <div class="col-2 no-padding">
                                    <input class="btn" onclick="addIngredient()" type="submit" id="button-validation" value="OK">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>