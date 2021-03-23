<?php

class ControllerConnection extends BaseController
{

    public function initialize()
    {
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); // mettre sanitize encoded après ?

        $activUser =  $this->connectionDAO->checkPassword($email, $password);
        $_SESSION["idUser"] = $activUser->getIdUser();

        if ($_SESSION["idUser"] != 0) {
            $mySession->connectUser($_SESSION["idUser"]);
            $this->connectionDAO->addUserLog($_SESSION["idUser"]);

            $_SESSION["lastname"] = $activUser->getLastname();
            $_SESSION["firstname"] = $activUser->getFirstname();

            header('Location:' . BASE_URL . "recipe");
            die();
        } else {
            header('Location:' . BASE_URL . "connection");
        }
    }
}
