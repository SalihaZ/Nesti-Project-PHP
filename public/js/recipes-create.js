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
    var ingredientName = document.getElementById("inputIngredientName").value;
    var ingredientQuantity = document.getElementById("inputIngredientQuantity").value;
    var ingredientUnit = document.getElementById("inputIngredientUnit").value;

    var listIngredients = document.getElementById("listIngredients");
    var newIngredient = document.createElement("li");
    var buttonDelete = document.createElement("button")

    buttonDelete.innerHTML = "<i class='fas fa-times'></i>";
    buttonDelete.className = "buttonDelete rounded";
    newIngredient.className = "justify-content-between";

    //AppendChild Element
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