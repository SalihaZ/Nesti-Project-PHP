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
                    $this->_data['article'] = $article;
                }
            }

            #ARTICLE / COMMANDS
            if ($_GET['action'] == 'commands') {

                if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

                    $data = [];
                    $id_command = $_POST['id_command'];
                    $commandLines = CommandDAO::getCommandsLines($id_command);

                    $index = 0;

                    foreach ($commandLines as $line) {
                        $article = ArticleDAO::findOneBy('id_article', $line->getFk_id_article());
                        $data['article-command'][$index] = $line->getCommand_quantity() . ' x ' .$article->getQuantity_unite_article() . ' ' . $article->getUnitArticle() . ' de ' . $article->getNameProduct();
                        $index++;
                    }
                    echo json_encode($data);
                    die;
              
                } else {

                    if (!isset($_GET['option'])) {

                        // Read data (user/city/roles)
                        $arrayCommands = CommandDAO::readAllCommands();
                        $this->_data['arrayCommands'] = $arrayCommands;
                    }
                }
            }
        }
    }
}
