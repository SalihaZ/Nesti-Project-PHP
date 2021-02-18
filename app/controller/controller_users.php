<?php

$modelUser = new UserDAO();
// $modelCity = new CityDAO();
$modelBase = new BaseDAO();

// Constructor Obj User
$arrayUsers = $modelUser->readAll();

// if($loc == "user" && $action == "create"){

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    //City
    $city = new City;
    $city-> setName_city($_POST["name_city"]);
    CityDAO::createCity($city);
    
    $nameCity = $_POST["name_city"];
    $city = CityDAO::findOneBy("name_city", $nameCity);

    var_dump($city);

    //User
    $user = new User;

    $user->setUsername_user($_POST["username_user"]);
    $user->setPasswordHash_user($_POST["password_user"]);
    // $user->setState_user( $_POST["state_user"]);
    $user->setLastname_user($_POST["lastname_user"]);
    $user->setFirstname_user($_POST["firstname_user"]);
    $user->setEmail_user($_POST["email_user"]);
    $user->setState_user($_POST["state_user"]);
    $user->setAdress1_user($_POST["adress1_user"]);
    $user->setAdress2_user($_POST["adress2_user"]);

    $user->setFk_id_city($city->getId_city());

    UserDAO::createUser($user);
}

//     function blabla()
// {
   
//     if (!empty($_POST)) {
//         var_dump($recipe);
//         $recipe->setParametersFromArray($_POST);
//         if ($recipe->isValid()) {
//             RecipeDAO::create($recipe);
//         }
//     }
// }
