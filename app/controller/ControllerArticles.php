<?php

class ControllerArticles extends BaseController
{

    public function initialize()
    {
        if (!isset($_GET['action'])) {
            $arrayArticles = ArticleDAO::readAllArticles();
            $this->_data['arrayArticles'] = $arrayArticles;
        }
    }
}

