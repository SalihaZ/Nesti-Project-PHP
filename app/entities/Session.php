<?php

class Session
{
    // Does the user is connected ?
    public function isConnectUser()
    {
        $isConnect = false;
        if (isset($_SESSION['IDUser']) && !empty($_SESSION['IDUser'])) {
            $isConnect = true;
        }
        return $isConnect;
    }

    // Connection User Sesion
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
