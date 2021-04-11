<?php

class ControllerArticles extends BaseController
{

    public function initialize()
    {
        #ARTICLE
        if (!isset($_GET['action'])) {
            $arrayArticles = ArticleDAO::readAllArticles();
            $this->_data['arrayArticles'] = $arrayArticles;
        } else {

            #ARTICLE / DELETE
            if ($_GET['action'] == 'delete') {

                if (isset($_GET['id'])) {

                    $id_article = $_GET['id'];

                    ArticleDAO::deleteArticle($id_article);

                    $_SESSION['deleteArticle'] = '';
                    header('Location:' . BASE_URL . "articles");
                    exit();
                }
            }

        
            #ARTICLE / EDITION
            if ($_GET['action'] == 'edition') {
                if (!isset($_GET['option'])) {

                    $id_article = $_GET['id'];

                    // Read data (user/city/roles)
                    $article = ArticleDAO::findOneBy("id_article", $id_article);
                    var_dump($article);
                }
            }

             #ARTICLE / COMMANDS
             if ($_GET['action'] == 'commands') {
                if (!isset($_GET['option'])) {

                    // Read data (user/city/roles)
                    $arrayCommands = CommandsDAO::readAllCommands();
                    $this->_data['arrayCommands'] = $arrayCommands;
                }
            }

            $this->_data['article'] = $article;
        }
    }
}
