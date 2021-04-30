document.addEventListener("DOMContentLoaded", function () {

    const buttonAddIngredient = document.querySelector("#buttonAddIngredient");  // Get the button add

    var buttonsDeleteIngredient = document.querySelectorAll(".buttonDeleteIngredient");

    console.log(buttonsDeleteIngredient)

    buttonAddIngredient.addEventListener('click', function () {

        // Get Values
        var ingredientName = document.getElementById("inputIngredientName").value;
        var ingredientQuantity = document.getElementById("inputIngredientQuantity").value;
        var ingredientUnit = document.getElementById("inputIngredientUnit").value;

        addIngredientDB(idRecipe, ingredientName, ingredientQuantity, ingredientUnit)
            .then((response) => {
                if (response) {

                    id_ingredient = response["id_ingredient"];
                    id_measure_unit_ingredient = response["id_measure_unit_ingredient"];
                    id_recipe = response['id_recipe'];

                    // Create elements
                    var listIngredients = document.getElementById("listIngredients");
                    var newIngredient = document.createElement("li");
                    var buttonDelete = document.createElement("button")

                    // Add classes
                    buttonDelete.innerHTML = "<i class='fas fa-times'></i>";
                    buttonDelete.className = "buttonDeleteIngredient rounded";
                    buttonDelete.setAttribute('data-quantity', ingredientQuantity);
                    buttonDelete.setAttribute('data-id-recipe', id_recipe);
                    buttonDelete.setAttribute('data-id-product', id_ingredient);
                    buttonDelete.setAttribute('data-id-measure-unit', id_measure_unit_ingredient);
                    newIngredient.className = "justify-content-between mb-1";

                    // AppendChild Element
                    newIngredient.appendChild(document.createTextNode(ingredientQuantity + " " + ingredientUnit + " de " + ingredientName + "  "));
                    newIngredient.appendChild(buttonDelete);
                    listIngredients.appendChild(newIngredient);

                    // Reset all inputs new ingredient
                    document.getElementById("inputIngredientName").value = '';
                    document.getElementById("inputIngredientQuantity").value = '';
                    document.getElementById("inputIngredientUnit").value = '';

                    buttonsDeleteIngredient = document.querySelectorAll(".buttonDeleteIngredient");
                    buttonsDeleteIngredient.forEach(button => button.addEventListener('click', function () {
                        deleteIngredient(button);
                    }));
                }
            });


        // AJAX REQUEST
        async function addIngredientDB(idRecipe, ingredientName, ingredientQuantity, ingredientUnit) {

            var myHeaders = new Headers();

            let formData = new FormData();
            formData.append('id_recipe', idRecipe);
            formData.append('name_ingredient', ingredientName);
            formData.append('quantity_ingredient', ingredientQuantity);
            formData.append('unit_ingredient', ingredientUnit);

            var myInit = {
                method: 'POST',
                headers: myHeaders,
                mode: 'cors',
                cache: 'default',
                body: formData
            };

            let response = await fetch(ROOT + 'recipes/edit/' + idRecipe + '/addingredient', myInit);

            try {
                if (response.ok) {
                    return await response.json();

                } else {
                    return false;
                }
            } catch (e) {
                console.error(e.message);
            }

        }

    });

    buttonsDeleteIngredient.forEach(button => button.addEventListener('click', function () {
        deleteIngredient(button);
    }));
});

function deleteIngredient(button) {
    // Get Values
    var idRecipe = button.getAttribute('data-id-recipe');
    var idIngredient = button.getAttribute('data-id-product');
    var ingredientQuantity = button.getAttribute('data-quantity');
    var idMeasureUnit = button.getAttribute('data-id-measure-unit');

    deleteIngredientDB(idRecipe, idIngredient, ingredientQuantity, idMeasureUnit)
        .then((response) => {
            if (response) {
                button.parentNode.remove();
            }
        });


    // AJAX REQUEST
    async function deleteIngredientDB(idRecipe, idIngredient, ingredientQuantity, idMeasureUnit) {

        var myHeaders = new Headers();

        let formData = new FormData();
        formData.append('id_recipe', idRecipe);
        formData.append('id_ingredient', idIngredient);
        formData.append('quantity_ingredient', ingredientQuantity);
        formData.append('id_measure_unit', idMeasureUnit);

        var myInit = {
            method: 'POST',
            headers: myHeaders,
            mode: 'cors',
            cache: 'default',
            body: formData
        };

        let response = await fetch(ROOT + 'recipes/edit/' + idRecipe + '/deleteingredient', myInit);

        try {
            if (response.ok) {
                return await response.json();

            } else {
                return false;
            }
        } catch (e) {
            console.error(e.message);
        }
    }
}


// ---------------------------------------------

// Add one step for a recipe
function addStepPreparation() {

    // Create elements
    var stepsPreparation = document.getElementById("stepsPreparation");
    var newRow = document.createElement("div");
    var buttonsColumn = document.createElement("div");
    var arrowUp = document.createElement("a");
    var iconArrowUp = document.createElement("i");
    var trash = document.createElement("a");
    var iconTrash = document.createElement("i");
    var textArea = document.createElement("textarea");

    // Add classes and features
    newRow.className = "row mb-4 d-flex";
    buttonsColumn.className = "d-flex flex-column pr-3";
    arrowUp.className = "mb-2";
    iconArrowUp.className = "fas fa-caret-square-up";
    iconTrash.className = "fas fa-trash";
    textArea.className = "bg-white border border-info rounded";
    textArea.cols = "65";
    textArea.rows = "5";


    // AppendChild Element
    stepsPreparation.appendChild(newRow);
    newRow.appendChild(buttonsColumn);
    newRow.appendChild(textArea);
    buttonsColumn.appendChild(arrowUp);
    arrowUp.appendChild(iconArrowUp);
    buttonsColumn.appendChild(trash);
    trash.appendChild(iconTrash);
}


    // Movement of the preparations div

    // function moveUp(element) {
    //     if (element.previousElementSibling)
    //         element.parentNode.insertBefore(element, element.previousElementSibling);
    // }

    // function moveDown(element) {
    //     if (element.nextElementSibling)
    //         element.parentNode.insertBefore(element.nextElementSibling, element);
    // }

    // document.querySelector('ul').addEventListener('click', function(e) {
    //     if (e.target.className === 'down') moveDown(e.target.parentNode);
    //     else if (e.target.className === 'up') moveUp(e.target.parentNode);
//});