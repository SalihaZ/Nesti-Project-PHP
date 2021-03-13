<?php

class ControllerArticles extends BaseController
{

    public function initialize()
    {
        // Constructor Obj Article
        $model = new ArticleDAO();
        $arrayArticles = $model->readAll();
    }
}
