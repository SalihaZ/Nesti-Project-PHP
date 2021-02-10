<?php

include(PATH_ENTITIES . "Article.php");
include(PATH_MODEL . "ArticleDAO.php");

// Constructor Obj Article
$model = new ArticleDAO();
$arrayArticles = $model->readAll();
