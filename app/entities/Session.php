<?php

class Session
{
    // Does the user is connected ?
    public function isUserConnected()
    {
        $isConnected = false;
        if (isset($_SESSION['IDUser']) && !empty($_SESSION['IDUser'])) {
            $isConnected = true;
        }
        return $isConnected;
    }

    // Connection User Session
    public function connectUser($ID)
    {
        $_SESSION['IDUser'] = $ID;
    }

    // Disconnection User Sesion
    public function disconnectUser()
    {
        session_unset();
        session_destroy();
    }
}
