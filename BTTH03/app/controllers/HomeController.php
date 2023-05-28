<?php
include('../app/services/ArticleSevices.php');
include('../app/config/config.php');
class HomeController{
    public function index()
    {
        $articleService= new ArticleServices();
        $article = $articleService->getallArticle();
        include('../app/views/home/index.php');
    }
}

?>
