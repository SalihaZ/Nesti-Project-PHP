<?php



// Constructor Obj Recipe
$model = new UserDAO();
$arrayUser = $model->findOneBy("username", $_POST["user"]["username"]);
var_dump($arrayUser);
