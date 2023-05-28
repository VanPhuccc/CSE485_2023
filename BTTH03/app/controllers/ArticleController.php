<?php
include('../app/services/ArticleSevices.php');
include('../app/config/config.php');

class ArticleController{
    public function index()
    {
        $articleService = new ArticleSerivces();
        $article = $articleService->getallArticle();
        include('../app/views/article/index.php');
    }
    public function add($title,$summary,$content)
    {
        if(isset($_POST['submit']))
        {
        $articleService = new ArticleSerivces();
        $article = $articleService->addArticle($_POST['Title'],$_POST['Summary'],$_POST['Content']);
            if($article)
            {
                echo"Thêm mới bài viết thành công!";
            }
        }
        include('../app/views/article/add_article.php');
    }
    public function update($id)
    {
        $articleService = new ArticleSerivces();
        $findArticle = $articleService->findArticlebyID();
        $article = $articleService->updateArticle();
        include('../app/views/article/add_article.php');
    }
}
?>

