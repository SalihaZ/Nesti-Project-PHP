// Reset all inputs new recipe
function resetInputs() {
    document.getElementById("inputRecipeName").value = '';
    document.getElementById("inputRecipeDifficulty").value = '';
    document.getElementById("inputRecipeNbPerson").value = '';
    document.getElementById("inputRecipeType").value = '';
}

function addIngredient() {
    addRow();
    resetIngredient();
}

// Add ingredient in a list
function addRow() {

    // Get Values
    var ingredientName = document.getElementById("inputIngredientName").value;
    var ingredientQuantity = document.getElementById("inputIngredientQuantity").value;
    var ingredientUnit = document.getElementById("inputIngredientUnit").value;

    // Create elements
    var listIngredients = document.getElementById("listIngredients");
    var newIngredient = document.createElement("li");
    var buttonDelete = document.createElement("button")

    // Add classes
    buttonDelete.innerHTML = "<i class='fas fa-times'></i>";
    buttonDelete.className = "buttonDelete rounded";
    newIngredient.className = "justify-content-between";

    // AppendChild Element
    newIngredient.appendChild(document.createTextNode(ingredientQuantity + " " + ingredientUnit + " de " + ingredientName + "  "));
    newIngredient.appendChild(buttonDelete);
    listIngredients.appendChild(newIngredient);

    // Add delete onclick
    buttonDelete.onclick = () => {
        buttonDelete.parentNode.remove();
    };
}

// Reset all inputs new ingredient
function resetIngredient() {
    document.getElementById("inputIngredientName").value = '';
    document.getElementById("inputIngredientQuantity").value = '';
    document.getElementById("inputIngredientUnit").value = '';
}

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
// });