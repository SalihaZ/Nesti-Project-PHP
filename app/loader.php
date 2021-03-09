<?php

include 'app/config.php';

spl_autoload_register(function ($class) {
    $sources = array(PATH_MODEL . $class . '.php', PATH_CTRL . $class . '.php ',  PATH_ENTITIES . $class . '.php');
    foreach ($sources as $source) {
        if (file_exists($source)) {
            require_once $source;
        }
    }
});
