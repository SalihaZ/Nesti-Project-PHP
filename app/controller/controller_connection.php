<?php

$log_username = filter_input(INPUT_POST, "logUsername");
$log_password = filter_input(INPUT_POST, "logPassword");

echo " LOG USERNAME : ".$log_username." ; ";
echo " LOG PASSWORD : ".$log_password." ; ";

if(($log_username != FALSE) && ($log_password != FALSE)){

    if ($log_password == "123"){
        $UserSession->connectUser(1);
        header('Location:'. BASE_URL.'recipes');
    }
}

