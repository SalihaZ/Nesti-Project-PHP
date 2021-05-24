<?php

define('DEBUG', true);

// PATH
define('BASE_URL', 'https://teillier.needemand.com/realisations/Projet_Nesti/Nesti-Project-PHP/');
define('PATH_CTRL', 'app/controller/');
define("BASE_DIR", __DIR__.'/..');

// PATH-VIEW
define('PATH_VIEW', 'app/view/');
define('PATH_CONTENT', 'app/view/content/');
define('PATH_ARTICLES', 'app/view/content/articles/');
define('PATH_RECIPES', 'app/view/content/recipes/');
define('PATH_USER', 'app/view/content/users/');
define('PATH_ERRORS', 'app/view/errors/');
define('PATH_STATISTICS', 'app/view/content/statistics/');
define('PATH_COMMON', 'app/view/common/');

// PATH_ENTITIES
define('PATH_ENTITIES', 'app/entities/');

// PATH_MODEL
define('PATH_MODEL', 'app/model/');

// CONNECTION
define('DSN', 'mysql:dbname=c35teillier; host=localhost');
define('USERNAME', 'c35teillier');
define('PWD', '654zfdvTR');

// PATH_IMAGE
define('PATH_IMG', BASE_URL.'public/images/');
define('PATH_IMG_RECIPES', BASE_URL.'public/images/recipes/');
define('PATH_IMG_ARTICLES', BASE_URL.'public/images/articles/');

//PATH_JS
define('PATH_JS', BASE_URL.'public/js/');