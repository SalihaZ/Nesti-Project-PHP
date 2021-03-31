<?php

class ControllerConnection extends BaseController
{
    public function initialize()
    {
        $UserSession = new Session();
        
        $username = filter_input(INPUT_POST, "logUsername", FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, "logPassword", FILTER_SANITIZE_STRING);

        if (isset($username)) {

            // $activeUser = ConnectionDAO::checkUsername($username);
            $activeUser = UserDAO::findOneBy('username_user', $username);
            //  ConnectionDAO::checkPassword($password);

            if ($activeUser) {

                $UserSession->connectUser($activeUser->getId_user());    
                
                // Add log user 
                ConnectionDAO::addLogUser($_SESSION["id_user"]);

                $_SESSION["lastname_user"] = $activeUser->getLastname_user();
                $_SESSION["firstname_user"] = $activeUser->getFirstname_user();

                header('Location:' . BASE_URL . "recipes");
                die();
            } else {
                header('Location:' . BASE_URL . "connection");
            }
        }
    }
}
