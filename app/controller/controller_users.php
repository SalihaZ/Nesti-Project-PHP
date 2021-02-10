<?php 

include (PATH_ENTITIES."User.php");
include (PATH_MODEL."UserDAO.php");

    // Constructor Obj User
    $model = new UserDAO();
    $arrayUsers =$model -> readAll();

?>